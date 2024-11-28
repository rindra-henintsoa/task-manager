<?php

namespace App\Controller\Admin;

use App\Entity\Tache;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Security\Core\Security;

class TacheCrudController extends AbstractCrudController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getEntityFqcn(): string
    {
        return Tache::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title', 'Titre'),
            TextEditorField::new('descritpion', 'Description')->hideOnIndex(),
            ChoiceField::new('status', 'Status')->setChoices([
                'En attente' => 'en attente',
                'En cours' => 'en cours',
                'Terminé' => 'terminé',
            ]),
            ChoiceField::new('priorite', 'Priorité')->setChoices([
                'Basse' => 'Basse',
                'Moyenne' => 'Moyenne',
                'Haute' => 'Haute',
            ])->renderAsNativeWidget(),
            DateTimeField::new('dateDebut', 'Date début'),
            DateTimeField::new('dateFin', 'Date Fin')->hideOnIndex(),
            AssociationField::new('utilisateurAssigne', 'Utilisateur assigné')
            ->setPermission('ROLE_ADMIN'),
            TextareaField::new('commentaire')
        ];
    }

    public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    {
        $qb = parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);

        if($this->security->isGranted('ROLE_USER') && !$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('entity.utilisateurAssigne = :utilisateur')
               ->setParameter('utilisateur', $this->getUser());
        }

        return $qb;
    }

    public function configureActions(Actions $actions): Actions
    {
        if ($this->isGranted('ROLE_USER') && !$this->isGranted('ROLE_ADMIN')) {
            return $actions
                ->disable(Action::NEW, Action::DELETE)
                ->setPermission(Action::EDIT, 'ROLE_USER')
                ->setPermission(Action::INDEX, 'ROLE_USER');
        }

        return $actions;
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
    private UserPasswordHasherInterface $passwordEncoder;

    // Injection de dépendance pour le hachage du mot de passe
    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('firstname', 'Prénom'),
            TextField::new('lastname', 'Nom'),
            EmailField::new('email', 'Email'),
            ChoiceField::new('roles', 'Rôles')
                ->setChoices([
                    'Membre' => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN',
                ])
                ->allowMultipleChoices() // Permet de gérer les rôles sous forme de tableau
                ->renderExpanded()      // Affiche sous forme de cases à cocher
                ->renderAsBadges(),     // Affiche les rôles en badges dans la liste
            TextField::new('password', 'Mot de passe')->onlyOnForms(), // Affiche le mot de passe en texte non haché uniquement sur le formulaire
        ];
    }

    // Cette méthode est utilisée lors de la création d'un nouvel utilisateur ou de la mise à jour d'un utilisateur
    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        // Si un mot de passe est renseigné, on le hache avant de l'enregistrer
        if ($entityInstance instanceof User) {
            if ($entityInstance->getPassword()) {
                $encodedPassword = $this->passwordEncoder->hashPassword($entityInstance, $entityInstance->getPassword());
                $entityInstance->setPassword($encodedPassword);
            }
        }

        // Appel à la méthode parent pour gérer la persistance
        parent::persistEntity($entityManager, $entityInstance);
    }

    // Méthode utilisée lors de la mise à jour d'un utilisateur existant
    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        // Si un mot de passe est renseigné, on le hache avant de l'enregistrer
        if ($entityInstance instanceof User) {
            if ($entityInstance->getPassword()) {
                $encodedPassword = $this->passwordEncoder->hashPassword($entityInstance, $entityInstance->getPassword());
                $entityInstance->setPassword($encodedPassword);
            }
        }

        // Appel à la méthode parent pour gérer la mise à jour
        parent::updateEntity($entityManager, $entityInstance);
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\Tache;
use App\Entity\User;
use App\Repository\TacheRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractDashboardController
{
    private $tacheRepository;

    public function __construct(TacheRepository $tacheRepository)
    {
        $this->tacheRepository = $tacheRepository;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $tasksByStatus = $this->tacheRepository->countTasksByStatus();
        $overdueTasks = $this->tacheRepository->findOverdueTasks();
        $userStatistics = $this->tacheRepository->getUserTaskStatistics();

        // Rendre une vue Twig personnalisée pour l'accueil du Dashboard
        return $this->render('admin/dashboard.html.twig', [
            'welcome_message' => 'Bienvenue sur le tableau de bord',
            'tasksByStatus' => $tasksByStatus,
            'overdueTasks' => $overdueTasks,
            'userStatistics' => $userStatistics,
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion de tâches');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::linkToCrud('Membres', 'fas fa-user', User::class);
        }
        yield MenuItem::linkToCrud('Tâches', 'fas fa-list', Tache::class);
    }
}

<?php

namespace App\Controller\Admin;

// use App\Entity\Articles;

use App\Controller\Admin\ArticlesCrudController;
use App\Controller\ArticlesController;
use App\Controller\ArticlesCrudController as ControllerArticlesCrudController;
use App\Entity\Articles;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;



class DashboardController extends AbstractDashboardController e
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ArticlesCrudController::class)->generateUrl());
        

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Tableau de bord administrateur');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Articles', 'fas fa-list', Articles::class);
        // yield MenuItem::linkToCrud('Articles', 'fas fa-list', Articles::class);
    }
}

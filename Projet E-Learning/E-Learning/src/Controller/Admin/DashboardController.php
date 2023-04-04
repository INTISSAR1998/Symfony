<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Course;
use App\Entity\Instructor;
use App\Entity\LearningPath;
use App\Entity\PlayList;
use App\Entity\Student;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(CourseCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('E Learning')
            ->setTranslationDomain('admin');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linktoDashboard('Dashboard', 'fas fa-tachometer-alt'),
            MenuItem::section('Les cours'),
            MenuItem::linkToCrud('cour', 'fab fa-leanpub', Course::class),
            MenuItem::linkToCrud('Catégorie', 'fa fa-tags', Category::class),
            MenuItem::section('Les instarcteurs'),
            MenuItem::linkToCrud('Instarcteur', 'fas fa-chalkboard-teacher', Instructor::class),
            MenuItem::section('Paramètre'),
            MenuItem::linkToCrud('utilisateur', 'fas fa-users', User::class),

        ];
    }
}

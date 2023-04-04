<?php

namespace App\Controller;

use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('site/index.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }
}

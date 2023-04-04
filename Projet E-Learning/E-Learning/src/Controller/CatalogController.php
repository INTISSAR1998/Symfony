<?php

namespace App\Controller;


use App\Repository\CategoryRepository;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function show(CourseRepository $courseRepository, CategoryRepository $categoryRepository)
    {

        $courses = $courseRepository->findAll();
        $category = $categoryRepository->findAll();
        return $this->render('site/catalog.html.twig', [
            'courses' => $courses,
            'category' => $category,
        ]);
    }
}

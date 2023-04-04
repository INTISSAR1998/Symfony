<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/custom/{name?}", name="custom")
     */
    public function custom(Request $request)
    {
        /*créer une variable name et lui assigner le contenu
        de la variable passé dans la requète.*/
        $name = $request->get('name');
        return $this->render('home/custom.html.twig', [
            'name' => $name
        ]);
    }
}

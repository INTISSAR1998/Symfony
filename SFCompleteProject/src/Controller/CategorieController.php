<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieFormType;
use App\Repository\CategorieRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categorie", name="categorie.")
 */
class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="show")
     */
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();
        return $this->render('categorie/index.html.twig', [
            'categories' => $categories
        ]);
    }
    /**
     * @Route("/create", name="insert")
     */
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieFormType::class, $categorie);
        $form->getErrors();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirect($this->generateUrl("categorie.show"));
        }
        return $this->render("categorie/create.html.twig", [
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function remove($id, CategorieRepository $categorieRepository, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $categorie = $categorieRepository->find($id);
        $em->remove($categorie);
        $em->flush();
        return $this->redirect($this->generateUrl("categorie.show"));
    }
    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit($id, CategorieRepository $categorieRepository, ManagerRegistry $doctrine, Request $request)
    {
        $em = $doctrine->getManager();
        $categorie = $categorieRepository->find($id);
        $form = $this->createForm(CategorieFormType::class, $categorie);

        $form->getErrors();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirect($this->generateUrl("categorie.show"));
        }
        return $this->render("categorie/update.html.twig", [
            "form" => $form->createView()
        ]);
        return $this->redirect($this->generateUrl("categorie.show"));
    }
}

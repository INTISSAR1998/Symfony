<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Product;
use App\Form\ProductFormType;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product", name="product.")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="show")
     */
    public function index(ManagerRegistry $doctrine, ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products

        ]);
    }
    /**
     * @Route("/create", name="insert")
     */
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductFormType::class, $product);

        $form->getErrors();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($product);
            $em->flush();
            return $this->redirect($this->generateUrl("product.show"));
        }
        return $this->render("product/create.html.twig", [
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function remove($id, ProductRepository $productRepository, ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
        $product = $productRepository->find($id);
        $em->remove($product);
        $em->flush();
        return $this->redirect($this->generateUrl("product.show"));
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(
        $id,
        ProductRepository $productRepository,
        ManagerRegistry $doctrine,
        Request $request
    ) {

        $em = $doctrine->getManager();
        $product = $productRepository->find($id);
        $form = $this->createForm(ProductFormType::class, $product);

        $form->getErrors();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $doctrine->getManager();
            $em->persist($product);
            $em->flush();
            return $this->redirect($this->generateUrl("product.show"));
        }
        return $this->render("product/update.html.twig", [
            "form" => $form->createView()
        ]);
        return $this->redirect($this->generateUrl("product.show"));
    }
}

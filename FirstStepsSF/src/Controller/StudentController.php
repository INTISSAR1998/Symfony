<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/student", name="student.")
 */
class StudentController extends AbstractController
{
    /**
     * @Route("/", name="show")
     */
    public function index(StudentRepository $studentRepository): Response
    {
        $students = $studentRepository->findAll();
        //dump($students);
        return $this->render('student/index.html.twig', [
            'students' => $students
        ]);
    }
    /**
     * @Route("/create", name="create")
     */

    public function create(Request $request)
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);

        $form->getErrors();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
            return $this->redirect($this->generateUrl("student.show"));
        }
        return $this->render("student/create.html.twig", [
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function remove($id, StudentRepository $studentRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $student = $studentRepository->find($id);
        $em->remove($student);
        $em->flush();
        return $this->redirect($this->generateUrl("student.show"));
    }
}

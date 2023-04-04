<?php

namespace App\Controller;

use App\Repository\CourseRepository;
use App\Repository\PlayListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/course", name="course")
     */
    public function Show(CourseRepository $courseRepository): Response
    {
        return $this->render('site/course.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/course/{courseName}", name="course_detail")
     */
    public function showDetail($courseName, CourseRepository $courseRepository)
    {

        $course = $courseRepository->findOneBy(['title' => $courseName]);
        return $this->render('site/course_detail.html.twig', [
            'course' => $course,
        ]);
    }

    /**
     * @Route("/learning-paths", name="learning-paths")
     */
    //public function showLearningPaths()
    // {
    //return $this->render( 'site/learning-paths.html.twig');
    //}

    /**
     * @Route("/learning-path-courses", name="learning_path_courses")
     */
    //public function showLearningPathCourses()
    //{
    // return $this->render('site/learning-path-courses.html.twig');
    //}
}

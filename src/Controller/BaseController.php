<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @Route("/index.html", name="index.html")
     */
    public function index()
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
    /**
     * @Route("/contacts.html", name="contacts.html")
     */

    public function contacts()
    {
        return $this->render('contacts.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
     /**
     * @Route("/about.html", name="about.html")
     */

    public function about()
    {
        return $this->render('about.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
     /**
     * @Route("/work.html", name="work.html")
     */

    public function work()
    {
        return $this->render('work.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
     /**
     * @Route("/blog.html", name="blog.html")
     */

    public function blog()
    {
        return $this->render('blog.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}

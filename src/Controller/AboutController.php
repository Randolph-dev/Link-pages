<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController {
    #[Route('/about', name: 'about')]

    public function index(Request $request) {
        return $this->render('home/index.html.twig');
    }
}
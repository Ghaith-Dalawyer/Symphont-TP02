<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class DemoController extends AbstractController
{
    #[Route('/root', name: 'app_demo')]
    public function index(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
    #[Route('/demo/{username}', name: 'user_name')]
    public function index2($username) 
    {
        return $this->render('demo/index2.html.twig', [
            'nom' => $username,
        ]);
    }

}

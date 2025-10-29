<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CamionController extends AbstractController
{
    #[Route('/camion', name: 'app_camion')]
    public function index(): Response
    {
        return $this->render('camion/index.html.twig', [
            'controller_name' => 'CamionController',
        ]);
    }
}

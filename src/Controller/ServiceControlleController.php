<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceControlleController extends AbstractController
{
    #[Route('/service/controlle', name: 'app_service_controlle')]
    public function index(): Response
    {
        return $this->render('service_controlle/index.html.twig', [
            'controller_name' => 'ServiceControlleController',
        ]);
    }
}

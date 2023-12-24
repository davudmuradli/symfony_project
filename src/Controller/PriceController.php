<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response; // Use Response instead of JsonResponse
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    #[Route('/price', name: 'price')]
    public function index(): Response // Change return type to Response
    {
        return $this->render('price/index.html.twig', [
            'controller_name' => 'PriceController',
        ]);
    }
}

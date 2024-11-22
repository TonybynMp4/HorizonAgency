<?php
// src/Controller/Home.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RootController extends AbstractController
{
    #[Route('/')]
    public function number(): Response
    {
        $title = "Agence Horizon";

        return $this->render('home.html.twig', [
            'title' => $title,
        ]);
    }
}
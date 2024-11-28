<?php
// src/Controller/RootController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RootController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function number(): Response
    {
        $title = "Agence Horizon";

        return $this->render('home.html.twig', [
            'title' => $title,
            'destinations' => [
                [
                    'url' => 'paris',
                    'name' => 'Paris',
                    'description' => "Découvrez la Ville Lumière, célèbre pour sa culture romantique, son architecture magnifique, et ses monuments iconiques comme la Tour Eiffel, la Cathédrale Notre-Dame, et le Louvre. Promenez-vous le long de la Seine, goûtez à la gastronomie française et explorez les charmants cafés parisiens.",
                    'image' => 'paris.jpg'
                ],
                [
                    'url' => 'newyork',
                    'name' => 'New York',
                    'description' => "La ville qui ne dort jamais regorge de monuments emblématiques, d’une culture artistique vibrante et d'une ambiance cosmopolite unique. Explorez Central Park, Times Square et les nombreux musées de la ville.",
                    'image' => 'newyork.jpg'
                ],
                [
                    'url' => 'kyoto',
                    'name' => 'Kyoto',
                    'description' => "Plongez dans l'histoire du Japon en visitant Kyoto, connue pour ses temples millénaires, ses jardins zen et ses quartiers traditionnels comme Gion. Laissez-vous séduire par les cerisiers en fleurs et l’art du thé japonais",
                    'image' => 'kyoto.jpg'
                ],
                [
                    'url' => 'santorini',
                    'name' => 'Santorini',
                    'description' => "Cette île pittoresque des Cyclades offre des vues spectaculaires sur la mer Égée, des villages blanchis à la chaux et des couchers de soleil inoubliables. Profitez de plages de sable noir et d'une cuisine méditerranéenne exquise.",
                    'image' => 'santorini.jpg'
                ]
            ]
        ]);
    }
}
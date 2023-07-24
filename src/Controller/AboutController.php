<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/a-propos/{id}', name: 'a_propos')]
    public function index($id): Response
    {
        $personnes = [
            1 => [
                'nom' => 'John Doe',
                'email' => 'john.doe@example.com',
                'telephone' => '123-456-7890',
            ],
            2 => [
                'nom' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'telephone' => '987-654-3210',
            ],
        ];


        if (isset($personnes[$id])) {
            $person = $personnes[$id];

            return $this->render('about/index.html.twig', [
                'person' => $person,
            ]);
        }
    }
}

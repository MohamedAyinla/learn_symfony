<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {
        $person = [
            'nom' => 'John Doe',
            'email' => 'john.doe@example.com',
            'telephone' => '123-456-7890',
        ];
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Contact',
            'person' => $person,
        ]);
    }
}

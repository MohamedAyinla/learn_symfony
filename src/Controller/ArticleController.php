<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'article')]
    public function index(Request $request): Response
    {
        // Retrieve the parameters from the request
        $nom = $request->query->get('nom');
        $prix = $request->query->get('prix');
        $dateExpiration = $request->query->get('dateExpiration');

        return $this->render('article/index.html.twig', [
            'nom' => $nom,
            'prix' => $prix,
            'dateExpiration' => $dateExpiration,
        ]);
    }
}

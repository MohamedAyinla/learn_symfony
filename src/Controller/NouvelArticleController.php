<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NouvelArticleController extends AbstractController
{
    #[Route('/nouvel_article', name: 'nouvel_article')]
    public function index(Request $request): Response
    {
        // if ($request->isMethod('POST')) {
        //     // Récupérer les données du formulaire
        //     $nom = $request->request->get('nom');
        //     $prix = $request->request->get('prix');
        //     $dateExpiration = $request->request->get('date_expiration');

        //     // Rediriger vers la page de l'article créé
        //     return $this->redirectToRoute('article', [
        //         'nom' => $nom,
        //         'prix' => $prix,
        //         'dateExpiration' => $dateExpiration,
        //     ]);
        // }

        $form = $this->createForm(ArticleFormType::class, new Article());

        return $this->render('nouvel_article/index.html.twig', [
            'form' => $form
        ]);
    }
}

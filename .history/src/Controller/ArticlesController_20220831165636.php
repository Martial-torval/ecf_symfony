<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route('/articles/{id}', name: 'article')]
    public function index(ArticlesRepository $art): Response
    {
        
        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }
}

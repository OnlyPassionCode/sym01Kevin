<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
        ]);
    }

    #[Route('/page/{id<\d{1,3}>?1}', name: 'page')]
    public function page(int $id): Response
    {
        return $this->render("public/page.html.twig", [
            'page' => $id,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function haha(): Response
    {
        return $this->render('public/contact.html.twig', [
        ]);
    }
}

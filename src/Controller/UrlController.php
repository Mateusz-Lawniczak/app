<?php

namespace App\Controller;

use App\Repository\UrlRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

use Symfony\Component\HttpFoundation\RedirectResponse;

class UrlController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Environment $twig, UrlRepository $UrlRepository): Response
    {

        return $this->render('url/index.html.twig', [
            'url' => $UrlRepository->findAll(),
        ]);
    }
    #[Route('/{slug}', name: 'show', stateless: 'wp')]
    public function show(string $slug, UrlRepository $urlReposiotry, Environment $twig) //: Response
    {
        $repository = $urlReposiotry->findOneBy(['slug'=> $slug]);
             if($repository !== NULL)
             {
                 return new Response(
                     $twig->render('url/show.html.twig',
                     ['url'=> $repository])
                 );
             }
             return new RedirectResponse('/', 302);
    }
}

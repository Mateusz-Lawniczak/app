<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UrlController extends AbstractController
{
    #[Route('/', name: 'app_url')]
    public function index(): Response
    {
                return new Response(<<<EOF
        <html>
            <body>
                <img src="/images/under-construction.gif" />
            </body>
        </html>
        EOF
                );
    }
}

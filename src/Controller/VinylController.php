<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;



class VinylController
{
    #[Route("/")]
    function homepage(): Response
    {
        return new Response("Bonjour <strong>DSI21G1</strong><br><img src='https://assets.website-files.com/60b9fdcaf8c317a1cfdb2bd9/613b3216be53c8701f5a5026_symfony_black_03.png' width='200'> !");
    }
    #[Route("/browse/{slug}")]
    function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = "Genre: " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "All Genre";
        }

        return new Response($title);
    }
}

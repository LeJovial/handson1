<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class userPageController extends AbstractController
{
    //Display the user main page when requesting the root page of the app
    #[Route('/')]
    public function displayPage(): Response {
        return $this->render('index.html.twig');
    }
}
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class userPageController extends AbstractController
{
<<<<<<< HEAD
    //Display the user main page when requesting the root page of the app
    #[Route('/')]
=======
    #[Route('/main')]
>>>>>>> antoine
    public function displayPage(): Response {
        return $this->render('index.html.twig');
    }
}
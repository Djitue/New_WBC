<?php

namespace App\Controller\Accomplissement\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccomplissementController extends AbstractController
{
   // #[Route('/accomplissement', name: 'app_accomplissement')]
    public function index(): Response
    {
        return $this->render('accomplissement/index.html.twig', [
            'controller_name' => 'AccomplissementController',
        ]);
    }

    public function accom(): Response
    {
        return $this->render('accomplissement/front/index.html.twig', [
            'controller_name' => 'AccomplissementController',
        ]);
    }

}

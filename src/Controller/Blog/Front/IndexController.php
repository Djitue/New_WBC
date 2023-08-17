<?php

namespace App\Controller\Blog\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
   // #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    public function layoutAss(): Response
    {
        return $this->render('blog/front/layout-assistance.html.twig', [
            'controller_name' => 'IndexController',
        ]);
}
    public function detail(): Response
    {
        return $this->render('blog/front/index/detail.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function indexx(): Response
    {
        return $this->render('blog/front/index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function appStatus(): Response
    {
        return $this->render('blog/front/index/form/application-status.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function appStatusCard(): Response
    {
        return $this->render('blog/front/index/form/application-status-card.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function bottAct(): Response
    {
        return $this->render('blog/front/index/form/bottom-action.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function certif(): Response
    {
        return $this->render('blog/front/index/form/certifications-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function educ(): Response
    {
        return $this->render('blog/front/index/form/educations-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function exp(): Response
    {
        return $this->render('blog/front/index/form/experience-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function expertise(): Response
    {
        return $this->render('blog/front/index/form/expertise-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function identity(): Response
    {
        return $this->render('blog/front/index/form/identity-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function skill(): Response
    {
        return $this->render('blog/front/index/form/skills-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function stepper(): Response
    {
        return $this->render('blog/front/index/form/stepper-info.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function terms(): Response
    {
        return $this->render('blog/front/index/form/terms-form.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function detailSide(): Response
    {
        return $this->render('blog/front/post/shared/detail-side.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function single(): Response
    {
        return $this->render('blog/front/post/shared/single.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function editChoice(): Response
    {
        return $this->render('blog/front/post/shared/single-editor-choice.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    public function intern(): Response
    {
        return $this->render('blog/front/post/shared/single-intern.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EsiController extends AbstractController
{
    /**
     * @Route("/esi/navigation", name="navigation")
     */
    public function navigation(): Response
    {
        return $this->render('_navigation.html.twig');
    }
}

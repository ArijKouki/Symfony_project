<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class NbVisitesController extends AbstractController
{
    #[Route('/nbVisites', name: 'app_nb_visites')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        if ($session->has( 'nbVisite')) {
            $nbVisite = $session->get('nbVisite') + 1;
        } else {
            $nbVisite = 1;
        }
        $session->set('nbVisite', $nbVisite);


            return $this->render('nb_visites/index.html.twig');
    }
}

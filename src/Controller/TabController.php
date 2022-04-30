<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabController extends AbstractController
{
    #[Route('/tab/{n?5<\d+>}', name: 'app_tab')]
    public function index($n): Response
    {
        $tab=[];
        for($i=0; $i<$n; $i++){
            $tab[$i]=rand(0,20);
        }
        return $this->render('tab/index.html.twig', [
            "notes" => $tab,
        ]);
    }
}

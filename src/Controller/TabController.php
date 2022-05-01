<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabController extends AbstractController
{
    #[Route('/tab/users', name: 'tab_users')]
    public function users():Response{
        $users=[
            ['nom'=>'arij','age'=>20],
            ['nom'=>'hamza','age'=>24],
            ['nom'=>'aziz','age'=>30],
            ['nom'=>'roua','age'=>52]
        ];
        return $this->render("tab/users.html.twig",['users'=> $users]);
    }



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

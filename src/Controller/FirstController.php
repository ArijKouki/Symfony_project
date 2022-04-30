<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {

       return $this->render('first/index.html.twig',['prenom'=>'Arij','nom'=>'Kouki']);

    }

    #[Route('/sayHello/{name}', name: 'say.hello')]
    public function sayHello($name): Response
    {
     return $this->render('first/sayHello.html.twig',['nom'=>$name,'path'=>'     ']);


    }

    #[Route(
        '/multi/{a<\d+>}/{b<\d+>}',
        name:'multi'
    )]
    public function multi($a,$b):Response
    {
        $r=$a * $b;
        return new Response("<h1>$r </h1>");
    }
}

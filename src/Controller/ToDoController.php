<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ToDoController extends AbstractController
{
    #[Route('/toDoListe', name: 'app_to_do')]
    public function indexAction(Request $request): Response
    {
        $session=$request->getSession();
        if (!$session->has('todos')){
            $todos=['cours'=>'finaliser mes cours', 'achat'=> 'acheter clé usb' ];
            $session->set('todos',$todos);
        }
        else{

        }
        return $this->render('to_do/listeToDo.html.twig');
    }
}

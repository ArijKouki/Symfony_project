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
            $todos=['Study'=>'maths - physics', 'Exercise'=> 'running 30 min','Cook'=>'pizza' ];
            $session->set('todos',$todos);
            $this->addFlash('info',"La liste des ToDo vient d'etre initialisée");
        }

        return $this->render('to_do/listeToDo.html.twig');
    }

    #[Route('/toDoListe/add/{name}/{content}', name: 'to_do.add')]
    public function addToDo(Request $request,$name,$content): Response{
        $session=$request->getSession();
        if ($session->has('todos')){
            $todos=$session->get('todos');
            if(isset($todos[$name])){
                $this->addFlash('error',"Le ToDo ' $name ' existe déjà");
            }
            else{
                //$todos[]=[$name => $content];
                $todos[$name]=$content;
                $session->set('todos',$todos);
                $this->addFlash('success',"Le ToDo ' $name ' a été ajouté avec succes");
            }

        }
        else{
            $this->addFlash('error',"La liste des ToDo n'est pas encore initialisée");

        }
        //return $this->forward('App\Controller\ToDoController::indexAction');
        return $this->redirectToRoute('app_to_do',['name'=>$name,'content'=>$content]);

    }

}

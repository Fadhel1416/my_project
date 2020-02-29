<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{

    
    /**
     * @Route("/default", name="default")
     */
    
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController pour fadhel',
        ]);
    }
   
    
    public function index2($id)
    {
        return new Response('hello' . '  fadhel'. ' ali  votre   age est '.$id);
    }
    public function fadhel()
    {
        return new Response('hello' . '  fadhel'. ' ali  votre   age est ');
    }
}

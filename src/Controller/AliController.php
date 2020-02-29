<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AliController extends AbstractController
{
    /**
     * @Route("/defg", name="def_hello")
     */
    public function Hello()
    {
        $tt= 'hello word';
        return new Response($tt);
    }
}
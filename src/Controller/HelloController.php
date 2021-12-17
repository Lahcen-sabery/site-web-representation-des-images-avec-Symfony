<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HelloController{
    /**
     * @Route("/hello")
    */
    public function Hello():Response{
        echo ' Hello Word bonjour';
        return new Response();
    }
    /**
     * @Route("/hello/{name}")
    */
    public function Helloname($name): Response{

        return new Response("Hello".$name);
    }
}

?>
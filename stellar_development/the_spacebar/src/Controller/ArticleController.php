<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{   
    /** 
     *@Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! Wooh!!');
    }

    /** 
     *@Route("/news/{slug}")
     */
    public function show($slug)
    {   
        return new Response(
            sprintf('Future page to show 1 space article: %s..', $slug)
        );
    }

}
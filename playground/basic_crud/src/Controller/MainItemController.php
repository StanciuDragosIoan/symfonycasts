<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainItemController
{   
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response(
            "<h1>Welcome to the homepage</h1>"
        );
    }


     /**
     * @Route("/add")
     */
    public function create()
    {
        return new Response(
            "<h1>Welcome to the create item page</h1>"
        );
    }


     /**
     * @Route("/update/{id}")
     */
    public function update($id)
    {   
        return new Response(
            "<h1>Welcome to the udpate item page. The item to be updated will
             be the one with the id: $id</h1>"
        );
    }



     /**
     * @Route("/delete/{id}")
     */
    public function delete($id)
    {
        return new Response(
            "<h1>Welcome to the udpate item page. The item to be deleted will
             be the one with the id: $id</h1>"
        );
    }
}
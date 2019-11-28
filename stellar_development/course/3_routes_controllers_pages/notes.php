<?php


/*
    a route = configuration that defines the url for a page

    a controller = a function that we write that builds the content for that page

    defined a route in config/routes.yaml

    created a new Controller in src/Controller

    added annotations (to replace the route from routes.yaml with annotation routes in the 
    controller)

    ran
        $ composer require annotations

    added annotations namespace in controller and defined route in annotation
        use Symfony\Component\Routing\Annotation\Route;

    defined a 2nd method show() inside the ArticleController
        this method matches the url and prints it (later the url will become the title of
        an article to be displayed on the page)

    routes can also match regular expressions, match http methods or match host names


*/
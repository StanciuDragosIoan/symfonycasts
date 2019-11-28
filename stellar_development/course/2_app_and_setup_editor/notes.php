<?php

    /*
        The 'public' directory is the front-facing one, the index.php in it is the
        front controller (app entry point)

        in the 'config' directory we have config files

        in the 'src' directory we have the app directory 

        ran 
            $ composer require server 
                this is part of symfony flex 

                    now we can use commands like ./bin/console ... 
                        e.g. ./bin/console server:run

                        the ./bin/console cmd works because our project has a bin directory
                        with a console file in it

                        on windows we must run php bin/console (as the console is a php file)
    */
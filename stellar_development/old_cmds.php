<?php
/*

 php bin/console server:start  -> start dev server
     php bin/console server:stop  -> stop dev server
     php bin/console debug:container -> shows available services
     ./bin/console config:dump KnpMarkdownBundle ->dump the configuration options (the array)
                                                  for a specific bundle
     ./bin/console cache:clear -> (clear the cache and rebuilds some of the cache files)
     ./bin/console cache:clear -> (clear the cache and rebuilds all the cache files)
     ./bin/console debug:container --show-private  (shows all services in the container)
     ./bin/console debug:autowiring (shows most of the services we'll use)
     ./bin/console debug:autowiring --all   (shows all the services in the container)
     ./bin/console debug:container log (shows al channels of the log service)
     ./bin/console about (shows environment variables)
     ./bin/console doctrine:database:create (creates DB)
     ./bin/console make:entity (creates a DB entity)
     ./bin/console make:migration (checks the DB and the entity classes and creates the
                                   mySQL code necessary to create the DB table)
     ./bin/console doctrine:migrations:migrate (actually creates the DB table)
     ./bin/console doctrine:migrations:status (gives us migrations status)
     ./bin/console doctrine:query:sql 'SELECT * from article'  (query the DB with specific
     sql queries)
     
     @@ACtual symfony cmds:
     symfony new my_project_name --full  (create full project)
     symfony server:start  ->start dev server
     symfony server:stop   ->stop dev server
     rm -rf var/cache/dev* -> clear cache (usually symfony does it automatically)
          *might be required when we copy into a template file without actually modifiying 
            the file
     ./bin/console debug:router -> shows all routes in app
     tail -f var/log/dev.log -> shows logs
     ./bin/console debug:autowiring --all    -> displays all services available in the app

     */
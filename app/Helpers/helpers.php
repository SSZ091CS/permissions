
<?php

function assign_permission(){
    $routes     =   \Illuminate\Support\Facades\Route::getRoutes();


    foreach ($routes as $key =>$route) {
        if ($route->getName() != NULL && $route->getName() != "login" && $route->getName() != "logout"
            && $route->getName() != "home" && $route->getName() != "register") {
            $route->action['middleware'][] = 'permission:' . $route->getName();
        }
    }

}

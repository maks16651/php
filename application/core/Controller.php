<?php

namespace application\core;

use application\core\View;

abstract class Controller
{     //create an abstract main controller, from which the rest of the controllers will inherit
    public $route;
    public $view;


    public function __construct($route)
    {
        $this->route=$route;
        $this->view = new View($route);
//        $this->loadModel($route['controller']);
    }
//    public function loadModel($name){
//        $path = 'application/models/'.$name.'.php';
//        debug($path);
//    }
}

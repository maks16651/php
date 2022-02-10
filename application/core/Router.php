<?php
namespace application\core;
class Router {
    protected $routes = [];
    protected $params = [];

    public function __construct(){
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val){
            $this->add($key,$val);
        }

    }

    public function add($route,$params){  //add our paths to the routes variable
        $route = '#^'.$route.'$#';
        $this-> routes[$route] = $params;


    }

    public function check(){  // check if such paths exist
        $url=$_SERVER["REQUEST_URI"];

        foreach ($this->routes as $route => $params){
            if (preg_match($route,$url,$matches)){
               $this->params = $params;
               return true;
            }
        }
        return false;
    }

    public function run(){
        if ($this->check()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if(class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path,$action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    echo 'action не найден : '.$action;
                }
            } else {
                echo ' не найден контроллер '.$path;
            }
        }
        else{

         echo '404 bad';}

    }
}
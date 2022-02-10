<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {


    public function indexAction() {
        $db=new Db;
        $data = $db->row('SELECT * FROM users ');
        $vars= [
            'name' => 'вася',
            'age' => 88,
        ];
        $this->view->render('Главная страница',$vars);
    }

}
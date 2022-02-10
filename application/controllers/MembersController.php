<?php

namespace application\controllers;

use application\core\Controller;

class MembersController extends Controller {

//    function __construct()
//    {
//
//    }
    public function membersAction() {
        $this->view->redirect('/');
        $this->view->render('Страница пользователей');
    }

}
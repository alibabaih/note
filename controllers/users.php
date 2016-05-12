<?php
class Users extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('location: ../index');
            exit;
        }
    }

    function index() {
        $this->view->usersList = $this->model->usersList();
        $this->view->render('users/index');
    }


    function logout() {
        Session::destroy();
        header('location: ../index');
        exit;
    }


}
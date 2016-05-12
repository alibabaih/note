<?php
class Search extends Controller {

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
        $this->view->notes = $this->model->notes();
        $this->view->render('search/index');
    }


    function logout() {
        Session::destroy();
        header('location: ../index');
        exit;
    }


}
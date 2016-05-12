<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->view->render('index/index', 1);
    }

    /**
     * All business logic we will return to the model
     */
    function run() {
        $this->model->run();
    }

}
<?php
class Help extends Controller {

    function __construct() {
        parent::__construct();
        echo 'We are inside the help class <br />';


    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {

        echo 'We are inside other function <br/>';

        require 'models/help_model.php';
        $model = new Help_Model();

        $this->view->blah = $model->blah();
        if($arg == true) {
            echo 'Optional: ' . $arg;
        }


    }
}
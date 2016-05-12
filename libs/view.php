<?php
class View {

    function __construct() {}

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            //отображение для index'ной страницы
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        } else {
            require 'views/header.php';
            require 'views/header_body.php';
            require 'views/' . $name . '.php';
            require 'views/footer_body.php';
            require 'views/footer.php';
        }
    }

    public function renderAjax($name) {
        require 'views/' . $name . '.php';
    }
}
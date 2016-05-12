<?php
class Bootstrap {

    /**
     * Create url: get url and make from it an array
     */
    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null ;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //check if site.ru/index or just site.ru
        if(empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        /**
         * Service function to check if the array was constructed properly
         */
        //print_r($url);

        //require 'controllers/' . $url[0] . '.php';
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            $this->error();
        }

        $controller = new $url[0];

        $controller->loadModel($url[0]);



        /**
         * РЎ РїРѕРјРѕС‰СЊСЋ РґР°РЅРЅРѕР№ РјР°РіРёРё РјС‹ РёР· РјР°СЃСЃРёРІР° СЃ url
         * РІС‹Р·С‹РІР°РµРј РЅРµРѕР±С…РѕРґРёРјСѓСЋ С„СѓРЅРєС†РёСЋ, РЅР°РїСЂРёРјРµСЂ,
         * mvc.example/help/other where help is a controller
         * and other is a function
         * calling methods
         */
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }

        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }

            } else {
                $controller->index();
            }
        }

    }

    public function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }

}
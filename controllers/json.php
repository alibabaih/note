<?php
class Json extends Controller {

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
        $data = json_encode($this->model->notes(), JSON_UNESCAPED_UNICODE);
        $format_data = _format_json($data, true);
        $this->view->data = _format_json($format_data);


        $this->view->render('json/index');
    }


    function logout() {
        Session::destroy();
        header('location: ../index');
        exit;
    }


}



function _format_json($json, $html = false) {
    $tabcount = 0;
    $result = '';
    $inquote = false;
    $ignorenext = false;

    if ($html) {
        $tab = "&nbsp;&nbsp;&nbsp;";
        $newline = "<br/>";
    } else {
        $tab = "\t";
        $newline = "\n";
    }

    for($i = 0; $i < strlen($json); $i++) {
        $char = $json[$i];

        if ($ignorenext) {
            $result .= $char;
            $ignorenext = false;
        } else {
            switch($char) {
                case '{':
                    $tabcount++;
                    $result .= $char . $newline . str_repeat($tab, $tabcount);
                    break;
                case '}':
                    $tabcount--;
                    $result = trim($result) . $newline . str_repeat($tab, $tabcount) . $char;
                    break;
                case ',':
                    $result .= $char . $newline . str_repeat($tab, $tabcount);
                    break;
                case '"':
                    $inquote = !$inquote;
                    $result .= $char;
                    break;
                case '\\':
                    if ($inquote) $ignorenext = true;
                    $result .= $char;
                    break;
                default:
                    $result .= $char;
            }
        }
    }

    return $result;
}
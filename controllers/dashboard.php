<?php
class Dashboard extends Controller {

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
        $data = $this->model->notes();

        $dates1 = array();
        $dates2 = array();
        $dates3 = array();
        $dates4 = array();
        $dates5 = array();
        $dates6 = array();
        for($i = 0; $i < sizeof($data); $i++) {
            if(!empty($data[$i])) {
                $month = DateTime::createFromFormat('Y-m-d', $data[$i][date]);
                $format_month = $month->format('n');
                switch ($format_month) {
                    case 1:
                        array_push($dates1, $data[$i]);
                        $this->view->month1 = $dates1;
                        break;
                    case 2:
                        array_push($dates2, $data[$i]);
                        $this->view->month2 = $dates2;
                        break;
                    case 3:
                        array_push($dates3, $data[$i]);
                        $this->view->month3 = $dates3;
                        break;
                    case 4:
                        array_push($dates4, $data[$i]);
                        $this->view->month4 = $dates4;
                        break;
                    case 5:
                        array_push($dates5, $data[$i]);
                        $this->view->month5 = $dates5;
                        break;

                    case 6:
                        array_push($dates6, $data[$i]);
                        $this->view->month6 = $dates6;
                        break;
                }
            }
        }
        $this->view->render('dashboard/index');
    }

    function test() {
        $this->view->render('dashboard/test');
    }


    function add() {
        $this->view->render('dashboard/add');
    }

    function create() {
        //2015-09-16
        //12:39:18
        $time = $_POST['time'] . ':'.'00';
        $dateGet = $_POST['date']; //04.02.15
        $pieces = explode(".", $dateGet);
        $mysqldate = '20' . $pieces[2] . '-' . $pieces[1] . '-' . $pieces[0];

        $data = array();
        $data['date'] = $mysqldate;
        $data['time'] = $time;
        $data['place'] = $_POST['place'];
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['record'] = $_POST['record'];
        $this->model->create($data);
        header('location: '.URL.'dashboard');
    }

    function delete($id) {
        $this->model->delete($id);
        header('location: ' .URL . 'dashboard');
    }

    function edit($id) {
        $this->view->note = $this->model->note($id); //id, notes, note
        $this->view->render('dashboard/edit');
    }

    function update($id) {
        $time = $_POST['time'] . ':'.'00';
        $data = array();
        $data['id'] = $id;
        $dateGet = $_POST['date']; //04.02.15
        $pieces = explode(".", $dateGet);
        $mysqldate = '20' . $pieces[2] . '-' . $pieces[1] . '-' . $pieces[0];
        $data['date'] = $mysqldate; //04.02.15
        $data['time'] = $time;
        $data['place'] = $_POST['place'];
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['record'] = $_POST['record'];
        $this->model->save($data);
        header('location: ' .URL . 'dashboard');
    }

    function getData() {

//        $example = $this->model->ajax();
//        echo json_encode($example);
//        foreach ($example as $key=>$value) {
//            echo $value['name'] . '' . $value['point'] . '<br />';
//        }
        //$example = 'example etye';
        //print_r($example);
        //echo 'передача завершилась успешно. Параметры: name = ' . $_POST['time'] . ', nickname= ' . $_POST['date'];
        $data = array();
        $data['time'] = $_POST['time'];
        $data['date'] = $_POST['date'];
        $this->view->data = $data;
        $this->view->renderAjax('dashboard/addAjax');
    }

    function logout() {
        Session::destroy();
        header('location: ../index');
        exit;
    }


}

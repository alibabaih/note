<?php
class Index_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $stch = $this->db->prepare("SELECT * FROM users WHERE login = :login AND password = MD5(:password)");
        $stch->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

        $data = $stch->fetchAll();
        $count =  $stch->rowCount();
        if ($count > 0) {
            //login
            Session::init();
            Session::set('role', $data['0']['role']);
            Session::set('loggedIn', true);
            Session::set('login', $data['0']['login']);
            Session::set('office', $data['0']['office']);
            Session::set('comment', $data['0']['comment']);
//            echo '
//                <script type="text/javascript">
//                    location.replace("../dashboard");
//                </script>
//                ';
            if (Session::get('role') != MOSCOW) {
                header('location: ../dashboard');
            } else {
                header('location: ../sales');
            }

        } else {
            //show an error
            header('location: ../index');
        }
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        echo $data['0']['role'];
    }
}
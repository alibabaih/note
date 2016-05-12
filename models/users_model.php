
<?php
class Users_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function usersList() {
        $sth = $this->db->prepare('SELECT * FROM users');
        $sth->execute();
        return $sth->fetchAll();
    }



}
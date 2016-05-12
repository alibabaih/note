<?php
class Json_Model extends Model {

    function __construct() {
        parent::__construct();
    }


    function notes() {
            $sth = $this->db->prepare('SELECT * FROM notes ORDER BY date ASC, time ASC');
            $sth->execute();
        return  $sth->fetchAll(PDO::FETCH_ASSOC);
    }


}
<?php
class Dashboard_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function ajax() {
        $sth = $this->db->prepare('SELECT date, account_cashier  FROM reports WHERE date >= (NOW() - INTERVAL 22 DAY);');
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function notes() {
            $sth = $this->db->prepare('SELECT * FROM notes ORDER BY date ASC, time ASC');
            $sth->execute();
        return  $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function notesByMonth($month) {
        $sth = $this->db->prepare('SELECT * FROM notes WHERE MONTH(date) = '.$month.' ORDER BY date ASC, time ASC');
        $sth->execute();
        return  $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function note($id) {
        $sth = $this->db->prepare('SELECT * FROM notes WHERE id ='.$id);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function create($data) {
        $sth = $this->db->prepare('INSERT
          INTO notes (date, time, place, name, phone, record)
          VALUES (:date, :time, :place, :name, :phone, :record)'
        );
        $sth->execute(array(
            ':date' => $data['date'],
            ':time' => $data['time'],
            ':place' => $data['place'],
            ':name' => $data['name'],
            ':phone' => $data['phone'],
            ':record' => $data['record'],
        ));
    }

    function save($data) {
        $sth = $this->db->prepare('UPDATE notes SET date = :date, time = :time, place = :place, name = :name, phone = :phone, record = :record WHERE id = :id');
        $sth->execute(array(
            ':id' => $data['id'],
            ':date' => $data['date'],
            ':time' => $data['time'],
            ':place' => $data['place'],
            ':name' => $data['name'],
            ':phone' => $data['phone'],
            ':record' => $data['record'],
        ));
    }

    function delete($id) {
        $sth = $this->db->prepare('DELETE from notes WHERE id = :id');
        $sth->execute(array(':id' => $id));
    }

}
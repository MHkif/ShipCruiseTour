<?php

class DataModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData($table)
    {
        $sql = "SELECT * FROM " . $table;
        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getRoomData($num)
    {
        // $num = $_REQUEST["num"];
        // die($num);
        
        $sql = "SELECT * FROM `room` JOIN room_type ON room.room_type_id = room_type.id WHERE room_number =". $num;
        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }
}

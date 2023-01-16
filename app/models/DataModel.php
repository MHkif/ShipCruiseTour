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
    public function getCruises(){
        $sql = "SELECT cruise.id , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date , cruise.ship_id ,port.id, port.name as'depart_port', port.country, itinerary.id, itinerary.name as 'itinerary_name', ship.id , ship.name as 'ship_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id inner join itinerary on cruise.itinerary_id = itinerary.id";
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

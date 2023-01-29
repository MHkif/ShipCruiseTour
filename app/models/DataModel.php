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

    public function searchCruises($data)
    {
        $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date , cruise.ship_id ,port.id, port.name as'depart_port', port.country, itinerary.id, itinerary.name as 'itinerary_name', ship.id , ship.name as 'ship_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port
         on cruise.port_id = port.id inner join itinerary on cruise.itinerary_id = itinerary.id 
         AND  port.id = :port OR  cruise.depart_date LIKE '%':cruiseDate'%' GROUP BY 'cruise_id'";


        $this->db->query($sql);
        $this->db->bind(':port', $data['port']);
        $this->db->bind(':cruiseDate', $data['cruiseDate']);

        $results = $this->db->resultSet();
        // die(print_r($results));
        return $results;
    }

    public function getCruises()
    {
        $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date , cruise.ship_id ,port.id, port.name as'depart_port', port.country, itinerary.id, itinerary.name as 'itinerary_name', ship.id , ship.name as 'ship_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id inner join itinerary on cruise.itinerary_id = itinerary.id ";


        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getRoomData()
    {

        $sql = "SELECT room.id as 'room_id', ship.id as 'shipTable_id', room_type.id as 'type_id', room.room_number as 'room_num', room_type.name as 'type_name', room_type.price as 'room_price', room_type.capacity as 'room_capacity', ship.name as 'shipName'  FROM `room` INNER JOIN room_type ON room.room_type_id = room_type.id INNER JOIN ship ON room.ship_id = ship.id";
        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }
}

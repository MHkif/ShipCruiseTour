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

    public function getReservations()
    {
        $sql = "SELECT * FROM reservation";
        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCruises()
    {
        $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date , cruise.ship_id ,port.id  as 'port_Id', port.name as'depart_port', port.country, itinerary.id as 'itinerary_Id ', itinerary.name as 'itinerary_name', ship.id as 'ship_Id', ship.name as 'ship_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id inner join itinerary on cruise.itinerary_id = itinerary.id ";


        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getRoomData()
    {

        $sql = "SELECT room.id as 'room_id', ship.id as 'shipTable_id', room_type.id as 'type_id', room.room_number as 'room_num', room_type.name as 'type_name', room_type.price as 'room_price', room_type.capacity as 'room_capacity', ship.name as 'shipName'  FROM `room` INNER JOIN room_type ON room.room_type_id = room_type.id INNER JOIN ship ON ship.id = 2;";
        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCruiseById($id)
    {
        // print_r($data);
        // exit;
        $sql = "SELECT  cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date , cruise.ship_id ,port.id  as 'port_Id', port.name as'depart_port', port.country, itinerary.id as 'itinerary_Id ', itinerary.name as 'itinerary_name', ship.id as 'ship_Id', ship.name as 'ship_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id inner join itinerary on cruise.itinerary_id = itinerary.id AND cruise.id  = :id";
        $this->db->query($sql);

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function getUserReservations($user_id)
    {
        $this->db->query("SELECT res.*, c.name, c.id as 'cruise_id', c.ship_id, nav.id as'shipId' , nav.name as 'ShipName', r.room_number as 'room_num' FROM reservation  res INNER JOIN cruise  c ON res.cruise_id = c.id INNER JOIN ship nav ON c.ship_id = nav.id
        INNER JOIN room r ON res.room_id = r.id WHERE res.user_id = :user_id
    GROUP BY res.id");
        $this->db->bind(':user_id', $user_id);
        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function cancelReservation($id)
    {
        // die($id);
        // $sql = "";


        $this->db->query('DELETE FROM reservation WHERE cruise_id in (SELECT id FROM cruise WHERE DATEDIFF(depart_date, CURDATE()) > 2) AND id = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

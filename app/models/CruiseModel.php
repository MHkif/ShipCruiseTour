<?php


class CruiseModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data)
    {


        $this->db->query('INSERT INTO `cruise`(`name`, `price`, `image`, `nights_number`, `depart_date`, `ship_id`, `port_id`, `itinerary_id`)
                 VALUES (:name,:price,:image, :nights, :dep_date, :ship_id, :port, :itinerary)');


        $this->db->bind(':name', $data['name']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':nights', $data['nights']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':dep_date', $data['date']);
        $this->db->bind(':port', $data['port']);
        $this->db->bind(':ship_id', $data['ship']);
        $this->db->bind(':itinerary', $data['Itinerary']);


        // Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
    }
}

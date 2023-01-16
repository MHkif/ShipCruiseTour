<?php


class ShipModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data)
    {


        $this->db->query('INSERT INTO `ship`(`name`, `rooms_number`,  `places_number`)
                 VALUES (:name,:rooms,:places)');


        $this->db->bind(':name', $data['name']);
        $this->db->bind(':rooms', $data['room_num']);
        $this->db->bind(':places', $data['places']);


        // Execute
        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }




    }

    public function delete(){
        
    }
}

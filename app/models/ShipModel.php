<?php


class ShipModel
{

    private $db;
    private $tableName;

    public function __construct()
    {
        $this->db = new Database;
        $this->tableName = "ship";
    }
    public function places_numbers($rooms)
    {
        $uno = $duo = $family = floor($rooms / 3);
        $duo = $duo * 2;
        $family = $family * 4;
        $places = $uno + $duo + $family;
        return $places;
    }

    public function add($data)
    {
        $places =  $this->places_numbers($data['room_num']);
        $this->db->query('INSERT INTO ' . $this->tableName . ' (`name`, `rooms_number`,  `places_number`)
                 VALUES (:name,:rooms,:places)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':rooms', $data['room_num']);
        $this->db->bind(':places', $places);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($id)
    {
        // die($this->tableName);
        // $id = (int) $data;
        $sql = 'DELETE FROM ' . $this->tableName  . ' WHERE id = :id';
        $this->db->query($sql);
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

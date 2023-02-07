<?php


class CruiseModel
{

    private $db;
    private $tableName;

    public function __construct()
    {
        $this->db = new Database;
        $this->tableName = 'cruise';
    }

    public function add($data)
    {


        $this->db->query('INSERT INTO ' . $this->tableName . ' (`name`, `price`, `image`, `nights_number`, `depart_date`, `ship_id`, `port_id`, `itinerary_id`)
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

    public function getRoomTypes()
    {
        $this->db->query('SELECT * FROM room_type');

        if ($row = $this->db->resultSet()) {
            return $row;
        } else {
            return false;
        }
    }

    public function getCruise($id)
    {
        $this->db->query('SELECT * FROM cruise WHERE id = :id');
        $this->db->bind(':id', $id);


        $row = $this->db->single();

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    public function searchCruises($data)
    {
        // $sql = "SELECT cruise.*, port.id, port.name as'depart_port', port.country, itinerary.id, itinerary.name as 'itinerary_name', ship.id , ship.name as 'ship_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port
        //  on cruise.port_id = port.id inner join itinerary on cruise.itinerary_id = itinerary.id 
        //  OR  port.id = :port OR cruise.depart_date >= :cruiseDate  ";
        $sql = "SELECT
         cruise.*,
         PORT.id,
         PORT.name AS 'depart_port',
         PORT.country,
         itinerary.id,
         itinerary.name AS 'itinerary_name',
         ship.id,
         ship.name AS 'ship_name'
     FROM
         cruise
     INNER JOIN ship ON cruise.ship_id = ship.id
     INNER JOIN PORT ON cruise.port_id = PORT.id
     INNER JOIN itinerary ON cruise.itinerary_id = itinerary.id WHERE PORT.id = :port OR cruise.depart_date >= :cruiseDate
     GROUP BY
         cruise.id";


        $this->db->query($sql);
        $this->db->bind(':port', $data['port']);
        $this->db->bind(':cruiseDate', $data['cruiseDate']);

        $results = $this->db->resultSet();
        // die(print_r($results));
        return $results;
    }
}

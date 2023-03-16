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


        $this->db->query('INSERT INTO ' . $this->tableName . ' (`name`, `price`, `image`, `nights_number`, `depart_date`, `ship_id`, `port_id`)
                 VALUES (:name,:price,:image, :nights, :dep_date, :ship_id, :port)');


        $this->db->bind(':name', $data['name']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':nights', $data['nights']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':dep_date', $data['date']);
        $this->db->bind(':port', $data['port']);
        $this->db->bind(':ship_id', $data['ship']);


        // Execute
        if ($this->db->execute()) {
            $this->db->query('SELECT Max(id) FROM cruise');
            if ($row = $this->db->single()) {
                $cruise_id = $row->{"Max(id)"};

                if ($this->createItinerary($cruise_id, $data['port'], $data['Itinerary'])) {
                    return true;
                }
            } else {
                return false;
            }
            return false;
        } else {
            return false;
        }
    }


    public function createItinerary($cruise, $port, $name)
    {


        $this->db->query('INSERT INTO `itinerary`(`cruise_id`, `port_id`, `name`) 
                 VALUES (:cruise_id, :port_id, :name)');

        $this->db->bind(':cruise_id', $cruise);
        $this->db->bind(':port_id', $port);
        $this->db->bind(':name', $name);

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
        // die(var_dump($id));
        $this->db->query('SELECT c.* FROM cruise c JOIN itinerary i ON c.id = i.cruise_id JOIN ship s ON c.ship_id = s.id WHERE c.id = :id');
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
     INNER JOIN itinerary ON cruise.id = itinerary.cruise_id WHERE PORT.id = :port OR cruise.depart_date >= :cruiseDate
     GROUP BY
         cruise.id";


        $this->db->query($sql);
        $this->db->bind(':port', $data['port']);
        $this->db->bind(':cruiseDate', $data['cruiseDate']);

        $results = $this->db->resultSet();
        // die(print_r($results));
        return $results;
    }
    function filterByMonth($date)
    {
        // $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date, cruise.ship_id ,port.id  as 'port_Id', port.name as'depart_port', port.country, ship.id as 'ship_Id', ship.name as 'ship_name', itinerary.name as 'itinerary_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id  inner join  itinerary ON itinerary.cruise_id = cruise_id AND  itinerary.port_id = port.id WHERE cruise.depart_date > now() group by cruise.id";

        $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date, cruise.ship_id , port.id  as 'port_Id', port.name as 'depart_port', port.country, ship.id as 'ship_Id', ship.name as 'ship_name', itinerary.name as 'itinerary_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id  inner join  itinerary ON itinerary.cruise_id = cruise_id AND  itinerary.port_id = port.id   where  MONTH(depart_date) = :input and YEAR(cruise.depart_date) >= YEAR(NOW())  group by cruise.id";
        $this->db->query($sql);
        $this->db->bind(':input', $date);
        $results = $this->db->resultSet();
        // die(print_r($results));
        return $results;
    }

    function filterByShip($ship)
    {
        $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date, cruise.ship_id , port.id  as 'port_Id', port.name as 'depart_port', port.country, ship.id as 'ship_Id', ship.name as 'ship_name', itinerary.name as 'itinerary_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id  inner join  itinerary ON itinerary.cruise_id = cruise_id AND  itinerary.port_id = port.id  where cruise.ship_id = :ship_id group by cruise.id";
        $this->db->query($sql);
        $this->db->bind(':ship_id', $ship);

        $results = $this->db->resultSet();
        // die(print_r($results));
        return $results;
    }
    function filterByPort($port)
    {
        $sql = "SELECT cruise.id as 'cruise_id' , cruise.name , cruise.price , cruise.image , cruise.nights_number , cruise.depart_date, cruise.ship_id , port.id  as 'port_Id', port.name as 'depart_port', port.country, ship.id as 'ship_Id', ship.name as 'ship_name', itinerary.name as 'itinerary_name' from cruise inner join ship on cruise.ship_id = ship.id inner join port on cruise.port_id = port.id  inner join  itinerary ON itinerary.cruise_id = cruise_id AND  itinerary.port_id = port.id  where cruise.port_id = :port_id group by cruise.id";
        $this->db->query($sql);
        $this->db->bind(':port_id', $port);

        $results = $this->db->resultSet();
        // die(print_r($results));
        return $results;
    }
}

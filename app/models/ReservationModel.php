<?php
class ReservationModel
{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserReservations($user_id)
    {
        $this->db->query('SELECT * FROM reservation WHERE user_id = :user_id');
        $this->db->bind(':user_id', $user_id);
        $result = $this->db->resultSet();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function add($data)
    {
        $this->db->query('INSERT INTO reservation (reservation_price , cruise_id , user_id, room_id) VALUES (:price , :cruise_id , :user_id, :room_id)');
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':cruise_id', $data['cruise_id']);
        $this->db->bind(':room_id', $data['room_id']);
        $this->db->bind(':user_id', $data['user_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function increaseShip($cruise_id)
    {
        $this->db->query('UPDATE ship SET reserved_rooms = reserved_rooms + 1 WHERE id IN (SELECT ship_id FROM cruise WHERE id = :id)');
        $this->db->bind(':id', $cruise_id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getShipCapacity($cruise_id)
    {
        // die(var_dump($cruise_id));
        $this->db->query('SELECT * FROM ship WHERE ship.id IN (SELECT ship_id FROM cruise WHERE cruise.id = :id) ');
        $this->db->bind(':id', $cruise_id);
        $result = $this->db->single();
        // die(var_dump($result->reserved_rooms <= $result->places_number ));
        if ($result->reserved_rooms <= $result->places_number) {
            return true;
        } else {
            return false;
        }
    }


    public function getShipId($cruise_id)
    {
        $this->db->query('SELECT ship_id AS "ship_id" FROM cruise WHERE id = :id');
        $this->db->bind(':id', $cruise_id);

        $result = $this->db->single();

        if (empty($result->ship_id)) {
            return false;
        } else {
            return $result->ship_id;
        }
    }

    public function getReservedRooms($ship_id)
    {
        $this->db->query('SELECT  reserved_rooms AS "room_number" FROM ship WHERE id = :id');
        $this->db->bind(':id', $ship_id);

        $result = $this->db->single();

        // if ( $result->room_number == 0) {
        //     return false;
        // } else {
        return $result->room_number;
        // }
    }


    public function decreaseShip($ship_id)
    {

        $this->db->query('UPDATE ship SET reserved_rooms = reserved_rooms - 1 WHERE id = :id');
        $this->db->bind(':id', $ship_id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function createRoomAfterBooking($data)
    {
        $this->db->query('INSERT INTO room (room_number , room_type_id , ship_id) VALUES (:number_of_room , :type_of_room , :ship_id)');
        $this->db->bind(':number_of_room', $data['room_number']);
        $this->db->bind(':type_of_room', $data['type_of_room']);
        $this->db->bind(':ship_id', $data['ship_id']);


        if ($this->db->execute()) {
            $last_id = $this->db->getLastId();
            return $last_id;
            // die(var_dump($last_id));
        } else {
            return false;
        }
    }

    public function getCruisePrice($cruise_id)
    {
        $this->db->query('SELECT price AS "cruise_price" FROM cruise WHERE id = :id');
        $this->db->bind(':id', $cruise_id);
        $result = $this->db->single();

        if ($result) {
            return $result->cruise_price;
        } else {
            return false;
        }
    }



    public function getTypeOfRoomPrice($type_of_room)
    {
        $this->db->query('SELECT price as "type_of_room_price" FROM room_type WHERE id = :id');
        $this->db->bind(':id', $type_of_room);
        $result = $this->db->single();

        if ($result) {
            return $result->type_of_room_price;
        } else {
            return false;
        }
    }

    public function getWholePrice($cruise_id, $type_of_room)
    {
        if ($this->getCruisePrice($cruise_id) != false && $this->getTypeOfRoomPrice($type_of_room) != false) {
            return floatval($this->getCruisePrice($cruise_id) + $this->getTypeOfRoomPrice($type_of_room));
        }
    }

    // public function cancelUserReservation($reservation_id) {
    //     $this->db->query('DELETE FROM reservation WHERE cruise_id in (SELECT id FROM cruise WHERE DATEDIFF(starting_date , CURDATE()) > 2) AND id = :id');
    //     $this->db->bind(':id', $reservation_id);

    //     if($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function cancelUserReservation($reservation_id)
    {
        $this->db->query('SELECT * FROM reservation WHERE cruise_id in (SELECT id FROM cruise WHERE DATEDIFF(depart_date , CURDATE()) > 2) AND id = :id');
        $this->db->bind(":id", $reservation_id);
        $this->db->execute();
        if ($this->db->rowCount() === 0) {
            return false;
        } else {
            $this->db->query('DELETE FROM reservation WHERE id = :res_id');
            $this->db->bind(":res_id", $reservation_id);
            $this->db->execute();
            return true;
        }
    }

    public function getShipIdBeforeDeletingUserReservation($reservation_id)
    {

        $this->db->query('SELECT ship_id AS "ship_id" FROM cruise WHERE id IN (SELECT cruise_id FROM reservation WHERE id = :id)');
        $this->db->bind(':id', $reservation_id);

        $result = $this->db->single();

        if (empty($result->ship_id)) {
            return false;
        } else {
            return $result->ship_id;
        }
    }
}

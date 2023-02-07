<?php

class Clients extends UserModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Regsiter user
  public function register($data)
  {
    $this->db->query('INSERT INTO client (fName, lName, email, username, password,) VALUES(:fName , lName,:email, :username :password)');
    // Bind values
    $this->db->bind(':fName', $data['fName']);
    $this->db->bind(':lName', $data['lName']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':username', $data['username']);
    $this->db->bind(':password', $data['password']);

    // Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  // Login User
  public function login($email, $password)
  {
    $this->db->query('SELECT * FROM client WHERE email = :email');
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    $hashed_password = $row->password;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }

  // Find user by email
  public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM client WHERE email = :email');
    // Bind value
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    // Check row
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  // Get User by ID
  public function getUserById($id)
  {
    $this->db->query('SELECT * FROM client WHERE id = :id');
    // Bind value
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function reserve($data)
  {


    $this->db->query("INSERT INTO `reservation`(`reservation_price`, `cruise_id`, `user_id`, `room_id`) VALUES (:price, :cruise, :user, :room)");


    $this->db->bind(':price', $data['reservePrice']);
    $this->db->bind(':cruise', $data['cruiseId']);
    $this->db->bind(':user', $data['user_id']);
    $this->db->bind(':room', $data['room_id']);


    // Execute
    if ($this->db->execute()) {

      return true;
    } else {
      return false;
    }
  }


}

<?php 

class DataModel{

    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getData($table){
        $sql = "SELECT * FROM ". $table;
        $this->db->query($sql);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getDataById($table){
      $sql = "SELECT * FROM ". $table;
      $this->db->query($sql);

      $results = $this->db->resultSet();

      return $results;
  }
}


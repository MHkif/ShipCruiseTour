<?php


class PortModel
{

    private $db;
    private $tableName;

    public function __construct()
    {
        $this->db = new Database;
        $this->tableName = 'port';
    }

    public function add($data)
    {


        $this->db->query('INSERT INTO ' . $this->tableName . ' (`name`, `country`)
                 VALUES (:name,:country)');


        $this->db->bind(':name', $data['name']);
        $this->db->bind(':country', $data['country']);


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

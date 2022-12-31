<?php



class users_initial
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create()
    {

        $SQL = "CREATE TABLE admin (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                password VARCHAR(512) NOT NULL ,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

            )  ENGINE=INNODB;
            CREATE TABLE client (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                password VARCHAR(512) NOT NULL ,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                
            )  ENGINE=INNODB;";
        $this->db->query($SQL);
        $this->db->exec();
        if ($this->db->exec()) {
            echo "The" . get_class($this) . " Has been created \n";
        }
    }

    public function drop()
    {

        $SQL = "DROP TABLE admin;
        DROP TABLE client;";
        $this->db->query($SQL);
        $this->db->exec();
        if ($this->db->exec()) {
            echo "The" . get_class($this) . " Has been deleted \n";
        }
    }
}

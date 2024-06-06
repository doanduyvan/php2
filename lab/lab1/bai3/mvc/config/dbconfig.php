<?php

class Database {
    private $host = "localhost";
    private $db_name = "php2lab";
    private $username = "root";
    private $password = "duyvan2001";
    public $conn = null;

    public function __construct() {
        $this->getConnection();
    }

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function exce($sql) {
        $stmt = $this->conn->query($sql);
        return $stmt;
    }

}


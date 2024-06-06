<?php

namespace Core;

use Exception;
use mysqli;

class Database{
    private $conn = null;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "duyvan2001";
        $dbname = "php2";

        try{
             $this->conn = new mysqli($servername,$username,$password,$dbname);
        }catch(Exception $err){
            $this->conn = null;
        }
    }

    public function HelloWorld(){
        echo "Hello World";
    }
}

$test = new Database();

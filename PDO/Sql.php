<?php

/**
 *
 */
class Sql extends PDO
{

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
    }

    private function setParam(){

    }

    public funtion query($rawQuery, $params = [])
    {
        $statement = $this->conn->prepare($rawQuery);
    }


}

?>

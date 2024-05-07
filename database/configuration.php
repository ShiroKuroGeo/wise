<?php

class configuration{
    private $host;
    private $user;
    private $password;
    private $database;
    private $connection;
    private $status;

    function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "wise";
        $this->status = false;
        $this->connection = $this->init();
    }

    public function getStatus(){
        return $this->getStatusFunction();
    }

    public function getConnection(){
        return $this->getConnectionFunction();
    }

    public function ClosingConnection(){
        return $this->closeConnectionFunction();
    }

    private function getStatusFunction(){
        return $this->status;
    }

    private function getConnectionFunction(){
        return $this->connection;
    }

    private function closeConnectionFunction(){
        return $this->connection = null;
    }

    private function init(){
        try {
            $connection = new PDO("mysql:host=$this->host;dbname=".$this->database, $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->status = true;
            return $connection;
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }

}

?>
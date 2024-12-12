<?php

class Config {

    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "exam";
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function insertDatabase($name, $email, $phone){
        $query = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";
        $insertData = mysqli_query($this->conn, $query);
        return $insertData;
    }
    
    public function showDatabase(){
        $query = "SELECT * FROM students";
        $readData = mysqli_query($this->conn, $query);
        return $readData;
    }
 }

?>
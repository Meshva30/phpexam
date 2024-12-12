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

    public function insertDatabase($course_name, $description){
        $query = "INSERT INTO courses (course_name,description) VALUES ('$course_name', '$description')";
        $insertData = mysqli_query($this->conn, $query);
        return $insertData;
    }
    public function updateData($course_name, $description)
    {
        $query = "UPDATE courses SET course_name='$course_name', description='$description' WHERE id=$id";
        $update = mysqli_query($this->conn, $query);
        return $update;
    }
 }

?>
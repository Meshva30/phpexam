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

    public function insertDatabase($student_id, $course_id,$enrollment_date){
        $query = "INSERT INTO enrollments (student_id,course_id,enrollment_date) VALUES ('$student_id', '$course_id','$enrollment_date)";
        $insertData = mysqli_query($this->conn, $query);
        return $insertData;
    }
    
    public function removeData($id){
        $query = "DELETE FROM enrollments WHERE id=$id";
        $res = mysqli_query($this->conn, $query);
        return $res;
    }
   
 
 }

?>
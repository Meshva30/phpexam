<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include 'courses_config.php';

$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  
    if (isset($_POST['course_name']) && isset($_POST['description'])) {
        $course_name = $_POST['course_name'];
        $description = $_POST['description'];

       
        $res = $c1->insertDatabase($course_name, $description);

        if ($res) {
            echo json_encode(['status' => "Courses added successfully!"]);
        } else {
            echo json_encode(['error' => "Failed to add Courses."]);
        }
    } else {
        echo json_encode(['error' => "Missing course_name or description."]);
    }
} else {
    echo json_encode(['error' => "Only POST method is allowed."]);
}
?>


<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include 'enrollments_config.php';

$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $enrollment_date = $_POST['enrollment_date'];
    
    $res = $c1->insertDatabase($student_id,$course_id,$enrollment_date);
    if ($res) {
        echo json_encode(['status' => "data added successfully!"]);
    } else {
        echo json_encode(['error' => "Failed to add data."]);
    }
} else {
    echo json_encode(['error' => "Only POST method is allowed."]);
}
?>

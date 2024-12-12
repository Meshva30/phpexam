
<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include 'student_config.php';


$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
   


    $res = $c1->insertDatabase($name, $email, $phone);
    if ($res) {
        echo json_encode(['status' => "Students added successfully!"]);
    } else {
        echo json_encode(['error' => "Failed to add Students."]);
    }
} else {
    echo json_encode(['error' => "Only POST method is allowed."]);
}
?>

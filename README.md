# Set up the Project Structure:

index.php: Entry point to your API.
config/: Contains configuration files like the database connection.
models/: Contains the PHP classes (models) for your database tables.
controllers/: Contains the PHP classes (controllers) to handle CRUD operations.
routes/: Defines the API routes.
README.md: A GitHub readme file to provide project details.

# insert api

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
# read api

<?php
include 'student_config.php';

header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json");

$c1 = new Config();

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $result = $c1->showDatabase();
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode(['data' => $data]);
} else {
    echo json_encode(['error' => "Only GET method is allowed."]);
}
?>

# Video

https://github.com/user-attachments/assets/b12d6b0c-1a96-4544-84f3-b9da5bfab841



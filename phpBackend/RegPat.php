<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

// Database connection
$host = 'localhost';
$user = 'root';
$password = 'Ayush';
$database = 'HCMS2';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection error"]);
    exit();
}

// Get data from the POST request
$name = $data['name'];
$phone = $data['phone'];
$address = $data['address'];
$dob = $data['dob'];
$gender = $data['gender'];
$username = $data['username'];
$password = $data['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

try {
    // Insert into Patient table
    $stmt = $conn->prepare("INSERT INTO Patient (Name, Phone_No, Address, Date_Of_Birth, Gender) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $address, $dob, $gender);
    $stmt->execute();
    $patient_id = $stmt->insert_id;

    // Insert into patient_pass table
    $stmt = $conn->prepare("INSERT INTO patient_pass (username, password_hash, PatientID) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $username, $hashed_password, $patient_id);
    $stmt->execute();

    echo json_encode(["success" => true]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => "Error: " . $e->getMessage()]);
} finally {
    $stmt->close();
    $conn->close();
}
?>

<?php
session_start();  // Start session to access session variables

header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "Ayush", "HCMS2");

$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Debugging: Output raw input data to verify it's received
error_log("Raw input data: " . $input);

// Check for doctorId in decoded JSON
if (!isset($data['doctorId'])) {
    echo json_encode(["success" => false, "error" => "doctorId not provided"]);
    exit;
}

// Check if patientId is set in the session
if (!isset($_SESSION['patient_id'])) {
    echo json_encode(["success" => false, "error" => "User not logged in"]);
    exit;
}

// Retrieve patientId from session
$patientId = $_SESSION['patient_id'];
$doctorId = $data['doctorId'];
$day = $data['day'];
$time = $data['time'];

$sql = "INSERT INTO Appointment (DoctorID, PatientID, Appointment_Date, start_time) 
        VALUES (?, ?, CURDATE(), ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iis", $doctorId, $patientId, $time);

$response = [];
if ($stmt->execute()) {
    $response["success"] = true;
    $response["appointment_id"] = $conn->insert_id;
} else {
    $response["success"] = false;
    $response["error"] = $conn->error;
}

echo json_encode($response);
$conn->close();
?>

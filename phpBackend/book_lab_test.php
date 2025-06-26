
<?php
session_start(); // Start session to access session variables
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "Ayush";
$dbname = "HCMS2";

// Check if patient_id is set in the session
if (!isset($_SESSION['patient_id'])) {
    echo json_encode(["error" => "User not logged in"]);
    exit;
}

// Retrieve patient_id from session
$patient_id = $_SESSION['patient_id'];

if (isset($_POST['TestID'], $_POST['Date'], $_POST['Time'])) {
    $test_id = $_POST['TestID'];
    $date = $_POST['Date'];
    $time = $_POST['Time'];
    $booking_date = "$date $time";
    $status = "Booked";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO PatientLabTest (PatientID, TestID, Booking_Date, Status) VALUES (?, ?, ?, ?)");
        $stmt->execute([$patient_id, $test_id, $booking_date, $status]);

        echo json_encode(["message" => "Lab test booked on $booking_date"]);
    } catch (PDOException $e) {
        echo json_encode(["error" => "Database error: " . $e->getMessage()]);
    }

    $conn = null;
} else {
    echo json_encode(["error" => "Incomplete request data"]);
}
?>

<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "Ayush", "HCMS2");

$specialization = $_GET['specialization'];
$day = $_GET['day'];
$time = $_GET['time'];

$sql = "SELECT d.DoctorID, d.Name, d.Consultation_Fee, a.Start_Time, a.End_Time 
        FROM Doctor d
        JOIN Availability a ON d.DoctorID = a.DoctorID
        WHERE d.Specialization = ? AND a.Day = ? AND a.Start_Time <= ? AND a.End_Time >= ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $specialization, $day, $time, $time);
$stmt->execute();
$result = $stmt->get_result();

$doctors = [];
while ($row = $result->fetch_assoc()) {
    $doctors[] = [
        "id" => $row["DoctorID"],
        "name" => $row["Name"],
        "consultation_fee" => $row["Consultation_Fee"],
        "start_time" => $row["Start_Time"],
        "end_time" => $row["End_Time"]
    ];
}

echo json_encode($doctors);
$conn->close();
?>

<?php
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "Ayush";
$dbname = "HCMS2";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT TestID, Test_Name, Price FROM AllLabTest");
    $stmt->execute();
    $lab_tests = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($lab_tests);
} catch (PDOException $e) {
    echo json_encode(["error" => "Database error: " . $e->getMessage()]);
}
$conn = null;
?>

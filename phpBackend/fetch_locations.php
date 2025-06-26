<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$password = "Ayush";
$database = "hcms2";

$type_id = isset($_GET['type_id']) ? $_GET['type_id'] : '';

if (!$type_id) {
    echo json_encode([]);
    exit;
}

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("
        SELECT Location.HospitalName
        FROM Donation
        JOIN Location ON Donation.LocationID = Location.LocationID
        WHERE Donation.TypeID = :type_id
    ");
    $stmt->bindParam(':type_id', $type_id, PDO::PARAM_INT);
    $stmt->execute();
    $locations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($locations);

} catch(PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>

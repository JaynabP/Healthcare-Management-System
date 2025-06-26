<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$password = "Ayush";
$database = "hcms2";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT TypeID, Type FROM Type");
    $stmt->execute();
    $types = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($types);

} catch(PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>

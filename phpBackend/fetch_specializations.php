<?php
$connection = new mysqli("localhost", "root", "Ayush", "HCMS2");
$result = $connection->query("SELECT DISTINCT Specialization FROM Doctor");

$specializations = [];
while($row = $result->fetch_assoc()) {
    $specializations[] = $row['Specialization'];
}

echo json_encode($specializations);
?>

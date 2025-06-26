<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['patient_id'])) {
    header("Location: patient_login.html");
    exit;
}

// Database credentials
$servername = "localhost";
$db_username = "root";
$db_password = "Ayush";
$dbname = "HCMS2";

// Connect to the database
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch patient details
$patient_id = $_SESSION['patient_id'];
$sql = "SELECT p.Name, p.Phone_No, p.Address, p.Date_Of_Birth, p.Gender, pp.username 
        FROM Patient p 
        INNER JOIN patient_pass pp ON p.PatientID = pp.PatientID 
        WHERE p.PatientID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No patient data found.";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .profile-container h2 {
            text-align: center;
            color: #333;
        }
        .profile-container p {
            font-size: 1.1em;
            margin: 10px 0;
            color: #555;
        }
        .profile-container strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Your Profile</h2>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($row['username']); ?></p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($row['Name']); ?></p>
        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($row['Phone_No']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($row['Address']); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($row['Date_Of_Birth']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($row['Gender']); ?></p>
    </div>
</body>
</html>

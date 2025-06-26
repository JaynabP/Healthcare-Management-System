<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['patient_id'])) {
    header("Location: patient_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: #333;
        }
        .content {
            padding: 40px;
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .content h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2em;
            color: #666;
        }
    </style>
</head>
<body>

    <!-- Navigation bar -->
    <div class="navbar">
        <a href="dashboard.php">Home</a>
        <a href="BookApp.html">Find Doctors</a>
        <a href="find_locations.html">Find Blood & Organs</a>
        <a href="lab_test_booking.html">Book Lab Test</a>
        <a href="pat_profile.php">Profile</a> <!-- New Profile Button -->
        <a href="patient_logout.php">Logout</a>
    </div>
    
    <!-- Welcome Message -->
    <div class="content">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>This is your patient dashboard.</p>
    </div>

</body>
</html>
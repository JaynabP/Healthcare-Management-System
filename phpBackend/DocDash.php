<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: DocLogin.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
</head>
<body>
    <h1>Welcome, Doctor <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="docLOGOUT.php">Logout</a>
</body>
</html>

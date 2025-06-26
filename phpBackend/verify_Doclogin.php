<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', 'Ayush', 'HCMS2');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to fetch the hashed password
$sql = "SELECT password_hash FROM doctor_pass WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($stored_password_hash);
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $stored_password_hash)) {
        $_SESSION['username'] = $username;
        echo "Login Successful. Welcome, Doctor!";
        // Redirect to a dashboard or home page
        header("Location: DocDash.php"); // Create dashboard.php for further functionality
    } else {
        echo "Incorrect password. Please try again.";
    }
} else {
    echo "Username not found.";
}

$stmt->close();
$conn->close();
?>

<?php
// Database connection
$host = 'localhost';
$db = 'HCMS2';
$user = 'root';
$password = 'Ayush'; // Update with your MySQL password

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Collect form data
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $consultation_fee = $_POST['consultation_fee'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert into Doctor table
    $stmt = $conn->prepare("INSERT INTO Doctor (Name, Specialization, Phone_No, Email, Consultation_Fee) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $specialization, $phone_no, $email, $consultation_fee]);
    $doctor_id = $conn->lastInsertId();

    // Insert availability data
    $availability_data = $_POST['availability_data'];
    $availability_entries = explode(';', rtrim($availability_data, ';'));

    foreach ($availability_entries as $entry) {
        list($day, $times) = explode(': ', $entry);
        list($start_time, $end_time) = explode(' - ', $times);
        
        $stmt = $conn->prepare("INSERT INTO Availability (DoctorID, Day, Start_Time, End_Time) 
                                VALUES (?, ?, ?, ?)");
        $stmt->execute([$doctor_id, trim($day), trim($start_time), trim($end_time)]);
    }

    // Insert into doctor_pass table
    $stmt = $conn->prepare("INSERT INTO doctor_pass (username, password_hash, DoctorID) 
                            VALUES (?, ?, ?)");
    $stmt->execute([$username, $hashed_password, $doctor_id]);

    echo "Doctor registered successfully!";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

<?php
// Step 1: Database Connection
$servername = "localhost"; // Change if using a different host
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "internship_db"; // Name of your database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Collect & Validate User Input
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$address = trim($_POST['address']);
$education = trim($_POST['education']);
$level = trim($_POST['level']);
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$cv = $_FILES['cv']['name']; // Getting uploaded file name

// Step 3: Handle File Upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($cv);
move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file);

// Step 4: Insert Data Into Database
$sql = "INSERT INTO interns (fullname, email, phone, address, education, level, startdate, enddate, cv) 
        VALUES ('$fullname', '$email', '$phone', '$address', '$education', '$level', '$startdate', '$enddate', '$cv')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close Connection
$conn->close();
?>

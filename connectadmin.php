<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "blood_bank");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and sanitize
$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
$password = $_POST['password'];  // Password should not be trimmed or escaped because it is used as-is for verification

// Fetch admin by email
$sql = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $admin = $result->fetch_assoc();

    // Trim the password hash from database to remove hidden spaces
    $hashed_password = trim($admin['password']);

    // Debug info (remove later)
    echo "Entered email: " . htmlspecialchars($email) . "<br>";
    echo "Entered password: " . htmlspecialchars($password) . "<br>";
    echo "Hashed password from DB (trimmed): " . htmlspecialchars($hashed_password) . "<br><br>";

    // Verify password
    if (password_verify($password, $hashed_password)) {
        echo "<strong>Password is correct. Admin login successful.</strong><br>";

        // Set session and redirect
        $_SESSION['admin'] = $admin['email'];
        header("Refresh:2; url=admin_dashboard.php"); // Redirect after 2 seconds for demo
        exit();
    } else {
        echo "<strong style='color:red;'>Password is incorrect.</strong>";
    }
} else {
    echo "<strong style='color:red;'>Admin not found with this email.</strong>";
}

$conn->close();
?>

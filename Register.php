<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_raw = $_POST['password'];
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);  // donor or requester

    if (empty($fullname) || empty($email) || empty($password_raw) || empty($phone) || empty($type)) {
        $error = "All fields are required!";
    } else {
        // Hash the password securely
        $password = password_hash($password_raw, PASSWORD_DEFAULT);

        // Check if email already exists
        $check_sql = "SELECT * FROM users WHERE email='$email'";
        $check_result = mysqli_query($conn, $check_sql);
        if (mysqli_num_rows($check_result) > 0) {
            $error = "Email already registered!";
        } else {
            // Insert into database
            $sql = "INSERT INTO users (full_name, email, password, phone, type) VALUES ('$fullname', '$email', '$password', '$phone', '$type')";
            if (mysqli_query($conn, $sql)) {
                header("Location: login.php?registered=1");
                exit();
            } else {
                $error = "Database error: " . mysqli_error($conn);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register | Blood Bank Management System</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<header>
    <h1>Blood Bank Management System</h1>
    <nav>
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
</header>

<section class="register-container">
    <h2>Register</h2>
    <?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form action="register.php" method="POST" id="registerForm">
        <input type="text" name="full_name" placeholder="Full Name" required /><br />
        <input type="email" name="email" placeholder="Email" required /><br />
        <input type="password" name="password" placeholder="Password" required /><br />
        <input type="text" name="phone" placeholder="Phone Number" required /><br />
        <select name="type" required>
            <option value="">Select Type</option>
            <option value="donor">Donor</option>
            <option value="requester">Requester</option>
        </select><br />
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</section>
</body>
</html>

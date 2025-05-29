<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_input = $_POST['password'];

    if (empty($email) || empty($password_input)) {
        $error = "Both email and password are required!";
    } else {
        // Fetch the user from DB
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            // Match input password with the hashed password
            if (password_verify($password_input, $user['password'])) {
                // Successful login
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['type'] = $user['type'];

                header("Location: Home.html");
                exit();
            } else {
                $error = "Incorrect password!";
            }
        } else {
            $error = "Email not found!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login | Blood Bank Management System</title>
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
            <li><a href="register.php">New Account</a></li>
        </ul>
    </nav>
</header>

<section class="login-container">
    <h2>Login</h2>
    <?php if (!empty($_GET['registered'])) {
        echo "<p style='color:green;'>Registration successful! Please login.</p>";
    } ?>
    <?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form action="login.php" method="POST" id="loginForm">
        <input type="email" name="email" placeholder="Enter Email" required /><br />
        <input type="password" name="password" placeholder="Enter Password" required /><br />
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</section>
</body>
</html>


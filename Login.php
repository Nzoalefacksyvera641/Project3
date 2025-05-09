<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Blood Bank Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>

</style>
<body>
    <header>
        <h1>Blood Bank Management System</h1>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Register.php">New Account</a></li>
            </ul>
        </nav>
    </header>

    <section class="login-container">
        <h2>Login</h2>
        <form action="submit.php" method="POST" id="loginForm">
            <input type="email" id="email" placeholder="Enter Email" required name="email"><br>
            <input type="password" id="password" placeholder="Enter Password" required name="password"><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="Register.php">Register here</a></p>
    </section>

    
    </script>
</body>
</html>
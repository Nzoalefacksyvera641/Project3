
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | BBMS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="login-container">
        <h2>Admin Login</h2>
        <form method="POST" action="connectadmin.php">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </section>
</body>
</html>

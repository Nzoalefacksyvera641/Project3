<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blood Bank</title>
    <link rel="stylesheet" href="./CSS/about.css">
</head>
<body>

<header>
    <h1>Blood Bank Management System</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1>Contact Us</h1>
    <p>Get in touch with us for any inqueries or assistance.</p>

    <div class="contact-info">
        <p><strong>Email:</strong> syveranzoalefack@gmail.com</p>
        <p><strong>Phone:</strong> +237 670 777 320</p>
        <p><strong>Location:</strong> Buea, Cameroon</p>
    </div>
    <h2>Send a Message</h2>
    <form action="contact_process.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
</div>

<footer>
    <div class="footer-container">
        <div class="column">
            <img src="logo.png" alt="Blood Bank Logo" width="100">
            <p>Saving lives, one donation at a time.</p>
        </div>
        <div class="column">
            <h3></h3>
            <ul>
                <li><a href="index.php">Home</a></li><br>
                <li><a href="About.php">About Us</a></li><br>
                <li><a href="Contact.php">Contact Us</a></li><br>
            </ul>
        </div>
        <div class="column">
            <h3>Contact Us</h3>
            <p>Email:syveranzoalefack@gmail.com</p>
            <p>Phone: +237 670 777 320</p>
            <p>Location: Buea, Cameroon</p>
        </div>
    </div>
</footer>

</body>
</html>
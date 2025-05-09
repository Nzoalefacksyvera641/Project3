<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Blood | BBMS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="BBMS Logo">
            <h1>BBMS</h1>
        </div>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Donate.php">Donate Blood</a></li>
                <li><a href="Request.php">Request Blood</a></li>
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="donate-container">
        <h2>Donate Blood</h2>
        <form method ="POST" action="connect.php" id="donateForm" >
            <input type="text" id="fullname" placeholder="Full Name" name="full_name" required><br>
            <input type="email" id="email" placeholder="Email" name="email" required><br>
            <select id="blood_group" name="blood_group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br>
            <input type="date" id="donation_date" name="date" required><br>
            <input type="text" id="location" placeholder="Location" name="location" required><br>
            <button type="submit">Submit Donation</button>
        </form>
    </section>

    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <img src="logo.png" alt="Blood Drop">
                <p>Saving lives, one donation at a time.</p>
            </div>
            <div class="footer-column">
                <h3></h3>
                <ul style="list-style-type:none; color: white;">
                    <li><a href="Home.php">Home</a></li><br>
                    <li><a href="Donate.php">Donate</a></li><br>
                    <li><a href="request.php">Request</a></li><br>
                    <li><a href="Logout.php">Logout</a></li><br>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3><br>
                <p>Email: nzoalefacksyvera@gmail.com</p><br>
                <p>Phone: +237 670 777 320</p><br>
                <p>Location: Buea, Cameroon</p><br>
            </div>
        </div>
    </footer>

    <?php

session_start();
if (!isset($_SESSION['user_id'])) {
    // echo "You must log in first.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name= $_SESSION['full_name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $blood_group = $_POST['blood_group'];
    $date = $_SESSION['date'];
    $location = $_POST['location'];

    $sql = "INSERT INTO donations (id, full_name, email, password, blood_group, date, location) 
            VALUES ('NULL', '$full_name', '$email', '$password', '$blood_group', '$date' '$location')";

    if (mysqli_query($conn, $sql)) {
        echo "Donation recorded successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

    <script >
        function validateDonation() {
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let bloodGroup = document.getElementById("blood_group").value;
    let donationDate = document.getElementById("donation_date").value;
    let location = document.getElementById("location").value;

    if (fullname === "" || email === "" || bloodGroup === "" || donationDate === "" || location === "") {
        alert("All fields are required!");
        return false;
    }

    return true; 
}
    </script>
</body>
</html>
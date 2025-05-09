<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Blood | BBMS</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="Donate.php">Donate Blood</a></li>
                <li><a href="request.php">Request Blood</a></li>
                <li><a href="Logout.php" class="logout-btn">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="request-container">
        <h2>Request Blood</h2>
        <form method ="POST" action="connect_request.php" id="requestForm" onsubmit="return validateRequest()">
            <input type="text" id="fullname" placeholder="Full Name" name="full_name" required><br>
            <input type="email" id="email" placeholder="Email" name="email" required><br>
            <select id="blood_group" name="blood_group">
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br>
            <input type="date" id="request_date" name="date" required><br>
            <input type="text" id="location" placeholder="Location" name="location" required><br>
            <button type="submit">Submit Request</button>
        </form>
    </section>

    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <img src="logo.png" alt="Blood Drop">
                <p>Saving lives, one request at a time.</p>
            </div>
            <div class="footer-column">
                <h3></h3>
                <ul style="list-style-type:none;">
                    <li><a href="index.php">Home</a></li><br>
                    <li><a href="Donate.php">Donate</a></li><br>
                    <li><a href="request.php">Request</a></li><br>
                    <li><a href="Logout.php">Logout</a></li><br>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3><br>
                <p>Email: syveranzoalefack@gmail.com</p><br>
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
    $user_id = $_SESSION['user_id'];
    $blood_group = $_POST['blood_group'];
    $units = $_POST['units'];

    $sql = "INSERT INTO requests (user_id, blood_group, units) 
            VALUES ('$user_id', '$blood_group', '$units')";

    if (mysqli_query($conn, $sql)) {
        echo "Blood request submitted!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

    <script >
        function validateRequest() {
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let bloodGroup = document.getElementById("blood_group").value;
    let requestDate = document.getElementById("request_date").value;
    let location = document.getElementById("location").value;

    if (fullname === "" || email === "" || bloodGroup === "" || requestDate === "" || location === "") {
        alert("All fields are required!");
        return false;
    }

    return true; 
}
    </script>
</body>
</html>
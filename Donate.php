<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Donate Blood | BBMS</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<header>
    <div class="logo">
        <img src="logo.png" alt="BBMS Logo" />
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
    <form method="POST" action="connect.php" id="donateForm" onsubmit="return validateDonation();">
        <input type="text" id="fullname" name="full_name" placeholder="Full Name" required /><br />
        <input type="email" id="email" name="email" placeholder="Email" required /><br />
        <select id="blood_group" name="blood_group" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br />
        <input type="date" id="donation_date" name="donation_date" required /><br />
        <input type="text" id="location" name="location" placeholder="Location" required /><br />
        <button type="submit">Submit Donation</button>
    </form>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-column">
            <img src="logo.png" alt="Blood Drop" />
            <p>Saving lives, one donation at a time.</p>
        </div>
        <div class="footer-column">
            <ul style="list-style:none; color:white;">
                <li><a href="Home.php">Home</a></li><br />
                <li><a href="Donate.php">Donate</a></li><br />
                <li><a href="Request.php">Request</a></li><br />
                <li><a href="logout.php">Logout</a></li><br />
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Us</h3><br />
            <p>Email: nzoalefacksyvera@gmail.com</p><br />
            <p>Phone: +237 670 777 320</p><br />
            <p>Location: Buea, Cameroon</p><br />
        </div>
    </div>
</footer>

<script>
function validateDonation() {
    const fullname = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const bloodGroup = document.getElementById("blood_group").value;
    const donationDate = document.getElementById("donation_date").value;
    const location = document.getElementById("location").value.trim();

    if (!fullname || !email || !bloodGroup || !donationDate || !location) {
        alert("All fields are required!");
        return false;
    }
    return true;
}
</script>
</body>
</html>

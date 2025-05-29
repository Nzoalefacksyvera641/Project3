<?php 
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Database connection
$conn = new mysqli("localhost", "root", "", "blood_bank");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query counts
$bloodGroupsQuery = "SELECT blood_group, COUNT(*) AS total FROM donations GROUP BY blood_group";
$donorCountQuery = "SELECT COUNT(DISTINCT email) AS total FROM donations";
$requestCountQuery = "SELECT COUNT(*) AS total FROM request";
$totalBloodQuery = "SELECT SUM(quantity) AS total_quantity, SUM(amount) AS total_amount FROM donations";

$bloodGroups = $conn->query($bloodGroupsQuery);
$donors = $conn->query($donorCountQuery)->fetch_assoc();
$requests = $conn->query($requestCountQuery)->fetch_assoc();
$totals = $conn->query($totalBloodQuery)->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Blood Bank</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff5f5;
            margin: 0;
            padding: 0;
        }
        .dashboard-container {
            padding: 30px;
        }
        h1 {
            color: #b30000;
            text-align: center;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .card {
            background: #fff;
            border-left: 5px solid #b30000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .card h2 {
            color: #b30000;
            margin: 0 0 10px 0;
        }
        .dropdown-card {
            margin-top: 20px;
        }
        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #b30000;
            border-radius: 5px;
            background-color: #fff0f0;
        }
        footer {
            background-color: #b30000;
            color: #fff;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-column {
            flex: 1;
            margin: 10px;
        }
        .footer-column img {
            max-width: 100px;
        }
        .footer-column h4 {
            margin-bottom: 10px;
        }
        .footer-column a {
            display: block;
            color: #f8f8f8;
            text-decoration: none;
        }
        .footer-column a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h1>Welcome, Admin</h1>
    <div class="grid">
        <div class="card">
            <h2>Total Donors</h2>
            <p><?= $donors['total'] ?></p>
        </div>
        <div class="card">
            <h2>Total Requests</h2>
            <p><?= $requests['total'] ?></p>
        </div>
        <div class="card">
            <h2>Total Blood Quantity</h2>
            <p><?= $totals['total_quantity'] ?? 0 ?> ml</p>
        </div>
        <div class="card">
            <h2>Total Donation Value</h2>
            <p><?= $totals['total_amount'] ?? 0 ?> FCFA</p>
        </div>
    </div>

    <div class="card dropdown-card">
        <h2>Blood Group Breakdown</h2>
        <select>
            <option disabled selected>Select Blood Group</option>
            <?php while ($row = $bloodGroups->fetch_assoc()): ?>
                <option><?= $row['blood_group'] ?>: <?= $row['total'] ?> donations</option>
            <?php endwhile; ?>
        </select>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="footer-column">
        <img src="logo.png" alt="Logo">
        <p>Blood Bank Management System</p>
    </div>
    <div class="footer-column">
        <h4>Navigation</h4>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="donate.php">Donors</a>
        <a href="request.php">Requests</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="footer-column">
        <h4>Contact</h4>
        <p>Phone: +123-456-7890</p>
        <p>Email: info@bloodbank.com</p>
        <p>Location: Buea, Cameroon</p>
    </div>
</footer>

</body>
</html>

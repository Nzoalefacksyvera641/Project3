

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | BBMS</title>
    <link rel="stylesheet" href="Style2.css">
    <?php echo time(); ?>
    
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png" alt="BBMS Logo">
        <h1>BBMS - Admin Panel</h1>
    </div>
    <nav>
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="logout.php" class="logout-btn">Logout</a></li>
        </ul>
    </nav>
</header>
<section class="dashboard-container">
    <h2>Admin Dashboard</h2>
    <div class="dashboard-stats">
        <div class="stat-box">
            <h3>Total Donors</h3>
            <p><?php echo $total_donors; ?></p>
        </div>
        <div class="stat-box">
            <h3>Total Requests</h3>
            <p><?php echo $total_requests; ?></p>
        </div>
        <div class="stat-box">
            <h3>Total Blood Units</h3>
            <p><?php echo $total_units; ?> ml</p>
        </div>
    </div>

    <h2>Blood Group Availability</h2>
    <table>
        <tr>
            <th>Blood Group</th>
            <th>Units Available</th>
        </tr>
        <?php while ($row = $blood_groups->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['blood_group']; ?></td>
                <td><?php echo $row['units']; ?> ml</td>
            </tr>
        <?php } ?>
    </table>
    </section>

<footer>
    <div class="footer-container">
        <div class="footer-column">
            <img src="logo.png" alt="" width="50%">
            <p>Managing blood donations efficiently.</p>
        </div>
        <div class="footer-column">
            <h3></h3>
            <ul>
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Us</h3>
            <p>Email: bloodbank@gmail.com</p>
            <p>Phone: +123 456 7890</p>
            <p>Location: Buea, Cameroon</p>
        </div>
    </div>
</footer>
<?php
ob_start();
session_start();


if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}


include 'db_connect.php';


$donor_result = $conn->query("SELECT COUNT(*) AS total_donors FROM donors");
$donor_data = $donor_result->fetch_assoc();
$total_donors = $donor_data['total_donors'];


$request_result = $conn->query("SELECT COUNT(*) AS total_requests FROM requests");
$request_data = $request_result->fetch_assoc();
$total_requests = $request_data['total_requests'];


$blood_result = $conn->query("SELECT SUM(units) AS total_units FROM blood_stock");
$blood_data = $blood_result->fetch_assoc();
$total_units = $blood_data['total_units'] ?? 0;


$blood_groups = $conn->query("SELECT blood_group, SUM(units) AS units FROM blood_stock GROUP BY blood_group");

$conn->close();
?>

</body>
</html>
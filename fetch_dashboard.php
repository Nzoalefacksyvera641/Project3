<?php
session_start();
include('db_connect.php'); // Connect to your database

// Fetch total blood units
$query = "SELECT SUM(quantity_ml) AS total_blood FROM blood_stock"; // Replace with your correct table and column
$result = mysqli_query($conn, $query);
$total_blood = mysqli_fetch_assoc($result)['total_blood'] ?? 0;

// Fetch total donors
$query = "SELECT COUNT(*) AS total_donors FROM donors";
$result = mysqli_query($conn, $query);
$total_donors = mysqli_fetch_assoc($result)['total_donors'] ?? 0;

// Fetch pending requests
$query = "SELECT COUNT(*) AS pending_requests FROM requests WHERE status='Pending'";
$result = mysqli_query($conn, $query);
$pending_requests = mysqli_fetch_assoc($result)['pending_requests'] ?? 0;

// Fetch fulfilled requests
$query = "SELECT COUNT(*) AS fulfilled_requests FROM requests WHERE status='Fulfilled'";
$result = mysqli_query($conn, $query);
$fulfilled_requests = mysqli_fetch_assoc($result)['fulfilled_requests'] ?? 0;

header('Content-Type: application/json');
echo json_encode([
    'total_blood' => $total_blood,
    'total_donors' => $total_donors,
    'pending_requests' => $pending_requests,
    'fulfilled_requests' => $fulfilled_requests
]);
?>

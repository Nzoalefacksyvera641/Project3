<?php
include 'db_connect.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
    $donation_date = mysqli_real_escape_string($conn, $_POST['donation_date']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    $sql = "INSERT INTO donations (full_name, email, blood_group, date, location) 
            VALUES ('$full_name', '$email', '$blood_group', '$donation_date', '$location')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Donation successful!');
                window.location.href = 'index.html';
              </script>";
        exit();
    } else {
        echo "Error saving donation: " . mysqli_error($conn);
    }
} else {
    
    header("Location: Donate.php");
    exit();
}
?>


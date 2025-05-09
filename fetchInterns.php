<?php
// Step 1: Database Connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "internship_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Debugging Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to internship_db";
}


// Step 2: Fetch Data from Database
$sql = "SELECT fullname, email, phone, address, education, level, startdate, enddate, cv FROM interns";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interns List</title>
    <link rel="stylesheet" href="./styles.css"> <!-- Optional CSS file -->
</head>
<body>
    <h2>List of Interns</h2>
    <table border="1">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Education</th>
            <th>Level</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>CV</th>
        </tr>

        <?php
        // Step 3: Display Data
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["fullname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["education"] . "</td>";
                echo "<td>" . $row["level"] . "</td>";
                echo "<td>" . $row["startdate"] . "</td>";
                echo "<td>" . $row["enddate"] . "</td>";
                echo "<td><a href='uploads/" . $row["cv"] . "' download>Download CV</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No interns registered yet.</td></tr>";
        }

        // Close Connection
        $conn->close();
        ?>
    </table>
</body>
</html>

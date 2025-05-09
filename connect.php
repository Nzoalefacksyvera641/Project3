<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname= "blood_bank";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if ($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
    }else{
         
    }
    
    
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$blood_group=$_POST['blood_group'];
$date=$_POST['date'];
$location=$_POST['location'];


    $sql = "INSERT INTO donations (id, full_name, email, blood_group, date, location) 
            VALUES ('NULL', '$full_name', '$email', '$blood_group', '$date', '$location')";

    if (mysqli_query($conn, $sql)) {
        echo "Donatation recorded Successful! ";
    } else {
        echo "Error: " . mysqli_error($conn);
    } 
}
?>
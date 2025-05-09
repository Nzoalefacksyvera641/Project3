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
$password=$_POST['password'];
$type=$_POST['type'];
$phone=$_POST['phone'];


    $sql = "INSERT INTO users (id, full_name, email, password, type, phone) 
            VALUES ('NULL', '$full_name', '$email', '$password', '$type', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful! ";
        header("Location: Home.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    } 
}
?>
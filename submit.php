<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$servername = "localhost";
$username = "root";
$password ="";
$dbname= "blood_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
     
}

$email=$_POST['email'];
$password=$_POST['password'];


$sql = "SELECT * FROM users WHERE email ='$email' && password ='$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login Successful!";
	 header("Location: Home.php");
    exit();
} else {
   echo "Error";
} 

}
?>
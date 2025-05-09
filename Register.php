<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Blood Bank Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Blood Bank Management System</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="register-container">
        <h2>Register</h2>
        <form  action="db_connect.php" method="POST" id="registerForm" >
            <input type="text" id="name" name="full_name" placeholder="Full Name" required><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <input type="int" name="phone" id="phone" placeholder="Your phone number" required><br>

            <select id="userType" name="type">
                <option value="donor">Donor</option>
                <option value="requester">Requester</option>
            </select><br>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </section>

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
         echo "Connected successfully";
    }
    
    $fullname = isset($_POST['full_name'])? $_POST['full_name'] : '';
    $email = isset($_POST['email'])? $_POST['email'] : '';
    $password = isset($_POST['password'])? password_hash( $_POST['password'], PASSWORD_DEFAULT) : '';
    $blood_group = isset($_POST['type'])? $_POST['type'] : '';
    $phone = isset($_POST['phone'])? $_POST['phone'] : '';

    if(empty($fullname) || 
    empty($email) ||
    empty($POST['password']) ||
    empty($blood_group) || empty($phone))
    {
        echo "All fields are required!";
        exit();
    }


    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $sql = "INSERT INTO users (full_name, email, password, blood_group, phone) 
            VALUES ('$fullname', '$email', '$password', '$blood_group', '$phone')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    } 
}
?>


    <script>
        function validateRegistration() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let userType = document.getElementById("userType").value;

    if (name === "" || email === "" || password === "" || userType === "") {
        alert("All fields are required!");
        return false;
    }

    return true; 
}
    </script>
</body>
</html>
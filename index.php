
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <header>
        <div class="logo">
            <img src="logo.png" alt="BBMS Logo">
            <h1>BBMS</h1>
        </div>
        <nav class="navbar">
            <ul class="nav-links" >
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Us</a></li>
                <!-- <li><a href="Donate.php">Donate Blood</a></li>
                <li><a href="request.php">Request Blood</a></li> -->
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="register.php">New Account</a></li>
                
                <li><a href="Login.php" class="login-btn">Login</a></li> 
            </ul>
        </nav>
    </header>
    <section class="hero">
        <h2>HELP SAVE LIFE +</h2>
        <p>Give the Gift of Blood</p>
    </section>
    <!-- <section class="dashboard">
        <h2>Welcome, <span id="username">User</span>!</h2>
        <p id="replace">What would you like to do today?</p>
        <div class="options">
            <a  onclick="replace()" class="btn" >Donate Blood</a>
            <a onclick="replace()" class="btn">Request Blood</a>
        </div>
    </section> -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <img src="Logo.png" alt="">
                <p>Saving lives, one donation at a time.</p>
            </div>
            <div class="footer-column">
                <h3></h3>
                <ul style="list-style-type:none;">
                    <li><a href="Home.php">Home</a></li><br>
                    <li><a href="About.php">About</a></li><br>
                    <li><a href="Donate.php">Donate</a></li><br>
                    <li><a href="request.php">Request</a></li><br>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3><br>
                <p>Email: syveranzoalefack@gmail.com</p><br>
                <p>Phone: +237 670 777 320</p><br>
                <p>Location: Buea, Cameroon</p><br>
            </div>
        </div>
    </footer>
    </div>
    <script>
        const menu = document.querySelector('#mobile-menu');
        const menuLinks = document.querySelector('.navbar')
        menu.addEventListener('click', function(){
            menu.classList.toggle('is-active');
            menuLists.classList.toggle('active');
        });
        // function replace(){

        //     document.getElementById("replace").innerHTML=
        //    ' <a href="Register.php"> Register</a> Or <a href="Login.php"> Login</a> first ';
        
        // }
        // function replace(){
        //     document.getElementById("replace").innerHTML=
        //     ' <a href="Register.php"> Register</a> Or <a href="Login.php"> Login</a> first ';
        // }
    </script>
</body>
</html>


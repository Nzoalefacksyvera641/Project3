<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Blood Bank Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
         .pictur{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding-top: 50px;
        }
        .column{
            flex: 1 1 calc(33.333% - 20px);
            text-align: center;
        }
        .column img{
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 4, 0, 2);
            transition: transform 0.3s ease;
        }
        .column img:hover{
            transform: scale(1.05)
        }
        @media (max-width:900px) {
            .column{
                flex: 1 1 calc(50% - 20%);
            }
            
        }
        @media (max-width:600px) {
            .column{
                flex: 1 1 100%;
            }
            
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="BBMS Logo">
            <h1>BBMS</h1>
        </div>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Donate.php">Donate Blood</a></li>
                <li><a href="request.php">Request Blood</a></li>
                <li><a href="Logout.php" class="logout-btn">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section class="dashboard">
        <h2>Welcome, <span id="username">User</span>!</h2>
        <p id="replace">What would you like to do today?</p>
        <div class="options">
            <a href="Donate.php"class="btn">Donate Blood</a>
            <a href="Request.php" class="btn">Request Blood</a>
        </div>
    </section>
     <div class="pictur">
        <div class="column">
            <img src="./banner2.jpg"  alt="">
        </div>
        <div class="column">
            <img src="./blood-donor (1).jpg" alt="">
        </div>
        <div class="column">
            <img src="./slide2.jpg" alt="">
        </div>
    </div>
   


    
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <img src="logo.png" alt="">
                <p>Saving lives, one donation at a time.</p>
            </div>
            <div class="footer-column">
                <h3></h3>
                <ul style="list-style-type:none;">
                    <li><a href="Home.php">Home</a></li><br>
                    <li><a href="Donate.php">Donate</a></li><br>
                    <li><a href="request.php">Request</a></li><br>
                    <li><a href="logout.php">Logout</a></li><br>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3><br>
                <p>Email: nzoalefacksyvera@gmail.com</p><br>
                <p>Phone: +237 670 777 320</p><br>
                <p>Location: Buea, Cameroon</p><br>
            </div>
        </div>
    </footer>

    <script>
//          function replace(){

// document.getElementById("replace").innerHTML=
// ' <a href="Register.php"> Register</a> Or <a href="Login.php"> Login</a> first';

// }
// function replace(){
// document.getElementById("replace").innerHTML=
// ' <a href="Register.php"> Register</a> Or <a href="Login.php"> Login</a> first';
// }
    </script>
</body>
</html>

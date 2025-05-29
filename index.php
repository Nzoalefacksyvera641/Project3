
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>

        .hero{
            display:flex;
            flex-wrap:wrap;
            background-image: url("bloodbg.jpg") ;
            background-size: cover;
            background-position:center;
            background-repeat:no-repeat;
            background-color:#f0f0f0;
            padding-top:10px;
            gap:10px;
            justify-content:space-around;
            
        }
        .hero1{
            padding-top:200px;
            padding-left:150px;
            font-size:30px;
            width:50%;
            color:black;
            margin:20px;
        }
        h2, .h2 {
            font-size:50px;
        }
      
    .hero2{
      margin-right:-4.6em;
justify-content: left;
    }
    
        .sec1{
            border-radius:none;
            box-shadow:none;
            padding: 0px 0px;
            margin:0;
        }
    section {
    padding: 30px 20px;
    margin: 20px;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    text-align: center;
}
.features {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    margin-top: 10px;
    padding: 20px 0;
}

.feature {
    background: #e7f1ff;
    padding: 15px;
    flex-basis: 28%;
    flex: 1;
    margin: 10px;
    width:100%;
    border-radius: 10px;
    gap:30px;
    font-size: 0.9rem;
    text-align: center;
    height:auto;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
    min-width: 250px;
}
span{
    color:red;
    font-size:70px;
}

        .feature:hover{
            transform: scale(1.05)
        }
        @media (max-width:900px) {
            .feature{
                flex: 1 1 calc(50% - 20%);
            }
            
        }
        @media (max-width:600px) {
            .feature{
                flex: 1 1 100%;
            }
            
        }
    </style>
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
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="register.php">SignUp</a></li>
                
                <li><a href="Login.php" class="login-btn">Login</a></li> 
            </ul>
        </nav>
    </header>
    <div>
    <section class="sec1">
     <div class=" hero ">
      <div class="hero1">
        <h2>HELP SAVE LIFE <span>+</span></h2>
        <p class="h2">Give the Gift of Blood</p>
      </div>
          <div class="hero2">
            <img src="./heart.png" alt="">
          </div>
     </div>
   </section>

   <section>

        <div class="features">
            <div class="feature">
                <h3>DONATE BLOOD</h3>
                <p>With an increasing need for rare and universal blood types,we have embrace the power
                    of digital platforms to connect donors with hospitals in real-time. 
                </p>
        <p> Our streamlined system allows you to register, schedule an appointment and track your donation history.
         </p>
            </div>
            <div class="feature">
                <h3>Be a Hero</h3>
                <p>Give Blood today and become a lifeline for someone in need. </p>
                   <p> Just one donation can save up to three lives, whether it's supporting accident 
                    victims, cancer patient, or new mothers during childbirth.</p>
                    <p> Your courage and kindness make you a true hero.
                </p>
            </div>
            <div class="feature">
                <h3>Give the Gift of Life</h3>
                <p> The blood you donate gives someone another chance at live. Every drop matters-over 4.5 million 
                    lives are saved annually through blood transfusion.</p>
                 <p> Join our community of donors and help ensure no hospital 
                    shelf ever goes empty.
                </p>
            </div>
        </div>
    </section>
   
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
                <p>Email: bloodbank@gmail.com</p><br>
                <p>Phone: +237 677 777 320</p><br>
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
        
    </script>
</body>
</html>


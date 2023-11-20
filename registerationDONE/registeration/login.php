<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <nav class="header_nav">
            <div class="header_logo">
                <h1> SavorVista </h1>
                <div class="header_logo-overlay"></div>
            </div>
            <ul class="header_menu">
                <li><a href="#menu">Menu</a></li>
                <li><a href="#food">Recommendations</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about-us">About Us</a></li>
            </ul>
        </nav>
       
       <div class="contento">
       <h5>Customer Login Page</h5>


             <form method="post" action="server.php">
        <?php include('errors.php'); ?>

        
        <!-- notification message -->
        <?php if (isset($_SESSION['error'])) : ?>
      <div class="error" >
        <h6>
          <?php 
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
          ?>
        </h6>
      </div>
        <?php endif ?>



        <div class="input-group">

                <div class="input-box">
                    <span>Username</span>
                    <input type="text" name="username" >
                </div>
                <p>
                <div class="input-box">
                    <span>Password</span>
                    <input type="password" name="password">
                </div>
                </p>
                <p>
                <button type="submit" class="btn" name="login_user">Login</button>
                <p>
                <p>
                <div class="notamember">
                Not yet a member? <a href="register.php">Sign up</a>
                </div>
                </p>
                <div class="click">
                    <a href="index.php">Click to go back</a>
                </div>
        </div>
  </form>

            </div>
        </div>
        <img src="foodiez.png" class="feature-img">
         </header>
         </body>
</html>

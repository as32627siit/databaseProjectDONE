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
        <h3>
          <?php 
                echo $_SESSION['error']; 
                unset($_SESSION['error']);
          ?>
        </h3>
      </div>
        <?php endif ?>



        <div class="input-group">

                <div class="input-box">
                    <span>Username</span>
          <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <p>
                <div class="input-box">
                    <span>Email</span>
          <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                </p>
                 <p>
                <div class="input-box">
                    <span>Password</span>
          <input type="password" name="password_1">
          
                </div>
                </p>
                 <p>
                <div class="input-box">
                    <span>Confirm password</span>
          <input type="password" name="password_2">
                </div>
                </p>
                <p>
                <button type="submit" class="btn" name="reg_user">Register</button>
                <p>
                <p>
                <div class="notamember">
                Already a member? <a href="login.php">Sign in</a>
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




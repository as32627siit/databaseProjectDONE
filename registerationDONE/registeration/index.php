
<?php include ('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Select User</title>

        <link rel="stylesheet" href="style.css"> 
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
       <h3> Welcome To <br> SavorVista </h3>
        <p>"Food is our common ground, a universal experience."<br> - James Beard <br> </p>
        <a href="" class="contentbtn">Feel free to choose menu on your own</a>
       

        <h4>Please Choose Your User</h4>


             <form action="login.php" method="post">
             <div class="input-groupbtn">
            <button type="submit" name="user_customer" class="btn">Customer</button>
            </div>
        </form>
            <form action="employee_login.php" method="post">
            <div class="input-groupbtn">
            <button type="submit" name="user_employee" class="btn">Employee</button>
            
            </div>
        
        
            </form>

            </div>
        </div>
        <img src="foodiez.png" class="feature-img">
         </header>
         </body>
</html>






   
        
       
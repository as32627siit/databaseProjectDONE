
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
       <h5>* Warning : Employees Only *</h5>


             <form method="post" action="employee_connect.php">

        
       


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
                
                </p>
                <div class="notamember">
                    If you are a customer please <a href="login.php">Click here</a>
                </div>
        </div>
  </form>
</body>
</html>



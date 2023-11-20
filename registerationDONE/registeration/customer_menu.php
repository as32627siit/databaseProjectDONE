<?php
include('employee_server.php');

$query = "SELECT * FROM checkmenu";
$data = mysqli_query($conn, $query);

$menu_items = array();
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $menu_items[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Menu</title>
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
        <h5>Menu for Customers</h5>
    

    <div class="content">
        <?php if (empty($menu_items)) : ?>
            <p>No menu items available.</p>
        <?php else : ?>
            <form method="post" action="customer_order.php">
                
                <table class="content-table">
                    
                    <tr>
                        <th>Menu</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Quantity</th>
                    </tr>
                    <?php foreach ($menu_items as $item) : ?>
                        <tr>
                            <td><center><?php echo $item['menu']; ?></td>
                            <td><center><?php echo $item['price']; ?></td>
                            <td><center><?php echo $item['amount']; ?></td>
                            <td><center><input type="number" name="quantity[<?php echo $item['id']; ?>]" value="0" min="0"></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <div class="input-group">
                    <button type="submit" class="btn" name="place_order">Place Order</button>
                </div>
            </form>
        <?php endif; ?>
        <div class="notamember">
        <p></p>
        <p><a href="home.php" style="color: black;">Back to Home</a></p>
        </div>
    </div>
    </div>
    <img src="foodiez.png" class="feature-img">
</body>
</html>
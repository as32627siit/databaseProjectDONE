<?php
include('employee_server.php');
include('errors.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
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
        <h5>Order Confirmation</h5>
    

    <div class="menu">
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['place_order'])) {
            $quantities = $_POST['quantity'];

            // Initialize variables for total and receipt
            $totalAmount = 0;
            $receipt = "";

            // Loop through the submitted quantities and process the order
            foreach ($quantities as $menu_id => $quantity) {
                $menu_id = mysqli_real_escape_string($conn, $menu_id);
                $quantity = mysqli_real_escape_string($conn, $quantity);

                if ($quantity > 0) {  // Only process items with a quantity greater than 0
                    // Fetch menu details
                    $menu_query = "SELECT * FROM checkmenu WHERE id='$menu_id'";
                    $menu_result = mysqli_query($conn, $menu_query);

                    if ($menu_result && $menu_item = mysqli_fetch_assoc($menu_result)) {
                        $menu = $menu_item['menu'];
                        $price = $menu_item['price'];
                        $amount = $menu_item['amount'];

                        // Check if there's enough stock
                        if ($quantity <= $amount) {
                            // Calculate total amount for the current menu item
                            $totalItemAmount = $quantity * $price;

                            // Update totalAmount
                            $totalAmount += $totalItemAmount;

                            // Build receipt
                            $receipt .= "Menu: $menu\n";
                            $receipt .= "Quantity: $quantity\n";
                            $receipt .= "Price: $price\n";
                            $receipt .= "Total Amount: $totalItemAmount\n";
                            $receipt .= "-----------------------\n";

                            // Update the 'amount' in the 'checkmenu' table
                            $newAmount = $amount - $quantity;
                            $update_amount_query = "UPDATE checkmenu SET amount='$newAmount' WHERE id='$menu_id'";
                            $update_amount_result = mysqli_query($conn, $update_amount_query);

                            if (!$update_amount_result) {
                                array_push($errors, "Failed to update amount for menu ID: $menu_id");
                            }

                            // Insert the order into the 'orders' table
                            $insert_order_query = "INSERT INTO orders (menu_id, quantity, total_amount) VALUES ('$menu_id', '$quantity', '$totalItemAmount')";
                            $insert_order_result = mysqli_query($conn, $insert_order_query);

                            if (!$insert_order_result) {
                                array_push($errors, "Failed to place order for menu ID: $menu_id");
                            }
                        } else {
                            array_push($errors, "Not enough stock for menu: $menu");
                        }
                    }
                }
            }

            if (empty($errors)) {
                echo "<pre>";
                echo "Receipt:\n";
                echo $receipt;
                echo "Total Amount: $totalAmount\n";
                echo "</pre>";
            } else {
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
            }
        }
        ?>
        <!-- You can customize this section based on your requirements -->
         </div>
         <div class="contentbtn">
         <p></p>
        <p><a href="home.php" style="color: white;">Back to Home</a></p>
        </div>
    </div>
   
</body>
</html>
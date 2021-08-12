<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php 
                require 'includes/header.php';

                $user_id = $_SESSION['id'];
                $query = "SELECT item_id FROM users_items WHERE user_id='$user_id'";
                $result = mysqli_query($con, $query) or die(mysqli_error($con));

                while($row = mysqli_fetch_array($result)){
                    $item_id = $row['item_id'];
                    $confirmation = "UPDATE users_items SET status = 'Confirmed' where item_id = '$item_id'";

                    $confirm_result = mysqli_query($con, $confirmation) or die(mysqli_error($con));
                }
            ?>

            <!--success-->
            <div class="jumbotron text-center">
                <span class="glyphicon glyphicon-ok-circle glyph_size"></span>
                <h1 >Your Order is confirmed.</h1>
                <p>Thank you for shopping with us.</p>
                <hr>
                <p>
                <a href="products.php">Click here</a> to purchase any other item.
                </p>
            </div>
        </div>

    

    <!--Footer-->
    <?php require 'includes/footer.php'; ?>
    </body>
</html>
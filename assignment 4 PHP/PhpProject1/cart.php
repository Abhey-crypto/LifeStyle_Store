<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Lifestyle Store</title>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php
                require 'includes/header.php';

                $user_id = $_SESSION['id'];
                $select_query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart' ";
                $query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

                if(mysqli_num_rows($query_result)==0){ ?>
                <center>
                <?php
                    echo "<br>";
                ?><h3>There is no item in the cart!</h3>
                <h4>Click <a href="products.php">here</a> to visit our products.</h4>
                </center>
                <?php
                }
                else{
                    $total = 0;
                ?>

            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php while($row = mysqli_fetch_array($query_result)){ ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td>Rs. <?php $total += $row['price'];
                                echo $row['price']; ?></td>
                                <td><a href="cart-remove.php?id=<?php echo $row['id']; ?>" class='remove_item_link'>Remove</a></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total: <i class="fa fa-rupee"></i><?php echo $total; ?></td>
                                <td><a href="success.php" class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
   
                    </table>
                </div>
            </div>
            <?php }?>
        </div>
        
        <?php
            require 'includes/footer.php';
        ?>

    </body>
</html>
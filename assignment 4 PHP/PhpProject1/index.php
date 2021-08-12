<?php
    require 'includes/common.php';

    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome | Lifestyle Store</title>

        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <?php
        require 'includes/header.php';
        ?>

        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <br>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>

        <!--Item categories listing-->
        <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-3">
                    <a href="products.php#cameras" >
                        <div class="thumbnail">
                            <img src="img/1.jpg" alt="">
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="products.php#watches" >
                        <div class="thumbnail">
                            <img src="img/7.jpg" alt="">
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original watches from the best brands.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="products.php#shirts" >
                        <div class="thumbnail">
                            <img src="img/8_1.jpg" alt="">
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Our exquisite collection of shirts.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                    <a href="products.php#shoes" >
                        <div class="thumbnail">
                            <img src="img/15.jpg" alt="">
                            <div class="caption">
                                <h3>Shoes</h3>
                                <p>Shoes for every place you need to go.</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!--Item categories listing end-->

    <?php
    require 'includes/footer.php';
    ?>
    </body>
</html>
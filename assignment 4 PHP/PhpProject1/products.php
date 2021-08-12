<?php
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products | Lifestyle Store</title>
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
                require 'includes/check-if-added.php';
            ?>

            <!--Products-->
            <div class="container">
                <div class="jumbotron bg_color">
                    <h1>Welcome to our Lifestyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
                    <!--cameras-->
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/5.jpg" alt="camera">
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Price: Rs. 36000.00</p>

                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(1)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/2.jpg" alt="camera">
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/3.jpg" alt="camera">
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(3)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/4.jpg" alt="camera">
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           
                                            } else{ ?>
                                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--watches-->
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/9.jpg" alt="watch">
                                <div class="caption">
                                    <h3>Titan Model #3301</h3>
                                    <p>Price: Rs. 13000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="watch">
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(6)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/11.jpg" alt="watch">
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Price: Rs. 8000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(7)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/12.jpg" alt="watch">
                                <div class="caption">
                                    <h3>Faber Luba #111</h3>
                                    <p>Price: Rs. 18000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(8)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--shirts-->
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/8.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>H&W</h3>
                                    <p>Price: Rs. 800.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(9)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/6.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>Luis Phil</h3>
                                    <p>Price: Rs. 1000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(10)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>John Zok</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(11)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/14.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>Jhalsani</h3>
                                    <p>Price: Rs. 1300.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           
                                            } else{ ?>
                                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--shoes-->
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/16.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>EL Lustra Botas</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(14)){
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/17.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>Woodland Suede</h3>
                                    <p>Price: Rs. 3700.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(15)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/18_1.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>Bata Black Formal</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(16)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img src="img/19.jpg" alt="shirt">
                                <div class="caption">
                                    <h3>Vans 159</h3>
                                    <p>Price: Rs. 1800.00</p>
                                    <?php if(!isset($_SESSION['email'])) {?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>

                                        <?php 
                                        } else{
                                            if(check_if_added_to_cart(17)){ 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            
                                            } else{ ?>
                                                <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    
        </div>

    <!--Footer-->
    <?php
        require 'includes/footer.php';
    ?>
    </body>
</html>
<?php
    if(isset($_SESSION['id'])){
        header('location: products.php');
    }
    require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php
                require 'includes/header.php'
            ?>

            <!--Signup Form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3>SIGN UP</h3>
                            </div>
                            <div class="panel-body">
                                <form action="signup_script.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control"  placeholder="Contact" name="contact" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="City" name="city" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer">
                                Already have an account?<br>Click <a href="login.html">here</a> to login.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    

    <!--Footer-->
    <?php
        require 'includes/footer.php'
    ?>
    </body>
</html>
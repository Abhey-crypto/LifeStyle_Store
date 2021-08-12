<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap minified css-->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!--bootstrap minified jquery-->
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <!--bootstrap minified js-->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!--external css-->
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php
                require 'includes/header.php';
            ?>

            <!--Login Form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i></p>
                                
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--Footer-->
    <?php
    include 'includes/footer.php';
    ?>
    </body>
</html>
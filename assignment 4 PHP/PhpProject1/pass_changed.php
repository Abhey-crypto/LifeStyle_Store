<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Password Changed | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <div class="container-fluid" id="content">

            <!--success-->
            <div class="jumbotron text-center">
                <span class="glyphicon glyphicon-ok-circle glyph_size"></span>
                <h2>Your have successfully changed your password.</h2>
                
                <hr>
                <p>
                Click<a href="login.php"> here</a> to login again.
                </p>
            </div>
        </div>

    

    <!--Footer-->
    <?php 
    session_destroy();
    require 'includes/footer.php'; 
    ?>
    </body>
</html>
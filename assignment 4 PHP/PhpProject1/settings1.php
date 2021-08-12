<?php 
    require 'includes/common.php'; 
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings | Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php require 'includes/header.php' ?>

            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3>Change Password</h3>
                            </div>
                            <div class="panel-body">
                                <form action="settings_script.php" method="post">
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="Old Password" name="old_pass" pattern=".{6,}" required = "true">
                                    </div>
                                    <p class="text-warning" style="color: red;"><i>Old password is incorrect</i></p>
                                    <div class="form-group">
                                        <input type="password" class="form-control"  placeholder="New Password" name="new_pass" pattern=".{6,}" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Re-type New Password" name="re_pass" pattern=".{6,}" required = "true">
                                    </div>
        
                                    <button type="submit" name="submit" class="btn btn-primary">Change</button><br><br>
                                </form><br/>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!--Footer-->
    <? require 'includes/footer.php'; ?>
    </body>
</html>
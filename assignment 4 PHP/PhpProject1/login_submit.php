<?php
    require 'includes/common.php';

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $encrypted_pass = md5($password);

    $select_query = "SELECT id,email FROM users WHERE email = '$email' AND password = '$encrypted_pass' ";
    $query_result = mysqli_query($con, $select_query);

    if(mysqli_num_rows($query_result) == 0){
        header('location: login_1.php');
    }
    else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row['id'];

        //redirection to the products page

        header('location: products.php');
    }

?>
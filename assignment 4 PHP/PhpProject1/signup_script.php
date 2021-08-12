<?php
    require 'includes/common.php';

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    //password encryption
    $encrypted_pass = md5($password);
    $select_query1 = "SELECT id FROM users WHERE email='$email' AND password='$encrypted_pass' ";
    $query1_result = mysqli_query($con, $select_query1);
    if(mysqli_num_rows($query1_result) > 0){
        echo "Email already exists!! Please try another email";
    }
    else{
        $insert_query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$encrypted_pass', '$contact', '$city', '$address')";
        $insert_query_result = mysqli_query($con, $insert_query);
        $insert_id = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $insert_id;

        //redirecting to products page
        header ('location: products.php');
    }
?>
<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    else{
        //user details
        $user_id = $_SESSION['id'];
        $email = $_SESSION['email'];

        //new password
        $old_pass = mysqli_real_escape_string($con, $_POST['old_pass']);
        $encrypted_old_pass = md5($old_pass);

        $new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
        $encrypted_new_pass = md5($new_pass);

        $retype_pass = mysqli_real_escape_string($con, $_POST['re_pass']);
        $encrypt_retype_pass = md5($retype_pass);

        $select_query = "SELECT email, password FROM users WHERE email = '$email'";
        $select_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
        $row = mysqli_fetch_array($select_result);

        $orig_pass = $row['password'];
        
        //matching password
        if($orig_pass != $encrypted_old_pass){
            //echo mysqli_num_rows($select_query);
            header('location: settings1.php');
        }
        elseif(strlen($new_pass) != strlen($retype_pass)){
            echo "error!!";
            header('location: settings2.php');
        }
        elseif($encrypted_new_pass != $encrypt_retype_pass){
            echo "error!!";
            header('location: settings2.php');
        }
        else{
            $query = "UPDATE users SET password = '$encrypted_new_pass' WHERE email = '$email' AND id = '$user_id'";
            $query_result = mysqli_query($con, $query);

            header('location: pass_changed.php');
        }

    }
?>
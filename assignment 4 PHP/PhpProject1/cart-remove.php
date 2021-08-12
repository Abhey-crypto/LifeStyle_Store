<?php
    require 'includes/common.php';
    $user_id = $_SESSION['id'];
    $item_id = $_GET['id'];
    $delete_query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";
    $query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));

    //redirecting to cart page
    header ('location: cart.php');

?>
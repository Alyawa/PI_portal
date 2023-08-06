<?php
include('db.php');

if (isset($_POST['register'])) {
    $reg_id = $_POST['reg_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];

    // Perform the update operation
    $update = "UPDATE `register` SET 
           `name` = '{$name}',
           `email` = '{$email}',
           `state` = '{$state}',
           `mobile` = '{$mobile}'
           
           WHERE `reg_id` = '{$reg_id}'";


    if (mysqli_query($conn, $update)) {
        header("location: membership.php?success=update");
        exit;
    } else {
        header("location: membership.php?alert=update_failed");
        exit;
    }
}
?>

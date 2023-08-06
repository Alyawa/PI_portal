<?php
session_start();
include('db.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if the user is not logged in
    header("Location: memberlogin.php");
    exit();
}

$query = "SELECT * FROM register WHERE reg_id = '" . $_SESSION['reg_id'] . "'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $state = $row['state'];
        
        
    }
}

//START CRUD FOR TYPES OF PID
define('UPLOAD_SRC', 'uploads/');



function image_upload($img){
   $tmp_loc = $img['tmp_name'];
   $new_name = random_int(11111,99999).$img ['name'];

   $new_loc = UPLOAD_SRC.$new_name;

   if(!move_uploaded_file($tmp_loc,$new_loc)){
    header("location: membership.php?alert=img_upload");
    exit;
   }
   else{
    return $new_name;
   }
}

function image_remove($img){
   if (!unlink(UPLOAD_SRC.$img)){
    header("location: membership.php?alert=img_rem_fail");
    exit;
   }
   
}


if(isset($_POST['pid']))
{
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($conn,$value);
    }

    $imgpath = image_upload($_FILES['pid_photo']);

//data collect or copy from server name: localhost pi portal phpMydmin
    $query="INSERT INTO `pid`( `pid_name`, `pid_photo`, `pid_desc`, `pid_patientno`)
            VALUES ('$_POST[name]','$imgpath','$_POST[desc]','$_POST[patientno]')";

    if(mysqli_query($conn,$query)){
        header("location: membership.php?success=added");
    }
    else{
        header("location: membership.php?alert=add_failed");  
    }
}

// crud for delete button
if (isset($_GET['rem']) && $_GET['rem'] > 0) {
    $query = "SELECT * FROM pid WHERE pid_id='$_GET[rem]'";
    $result = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($result);

    image_remove($fetch['pid_photo']);

    $query = "DELETE  FROM pid WHERE pid_id='$_GET[rem]'";
    if (mysqli_query($conn, $query)) {
        header("location: membership.php?success=removed");
    } else {
        header("location: membership.php?alert=remove_failed");
    }
}


//crud for edit button

if (isset($_POST['editpid'])) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($conn, $value);
    }

  
    if(file_exists($_FILES['pid_photo']['tmp_name'])|| is_uploaded_file($_FILES['pid_photo']['tmp_name']))
    {
        $query="SELECT * FROM pid WHERE pid_id='$_POST[editpid_id]'";
        $result=mysqli_query($conn,$query);
        $fetch=mysqli_fetch_assoc($result);

        image_remove($fetch['pid_photo']);

        $imgpath=image_upload($_FILES['pid_photo']);

        $update="UPDATE `pid` SET 
                `pid_name`='$_POST[name]',
                `pid_photo`='$imgpath',
                `pid_desc`='$_POST[desc]',
                `pid_patientno`='$_POST[patientno]'
                 WHERE pid_id='$_POST[editpid_id]'";

    }
    else{
        $update="UPDATE `pid` SET 
                `pid_name`='$_POST[name]',
                `pid_desc`='$_POST[desc]',
                `pid_patientno`='$_POST[patientno]'
                 WHERE pid_id='$_POST[editpid_id]'";
    }
    if(mysqli_query($conn,$update)){
        header("location: membership.php?success=updated");
    }
    else{
        header("location: membership.php?alert=updated_failed");
    }

    
}


?>
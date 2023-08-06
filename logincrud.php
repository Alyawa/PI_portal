<?php
session_start();
include('db.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($username)) {
        header("location: login.php?error=Warning: Username is required!");
        exit();
    } else if (empty($pass)) {
        header("location: login.php?error=Warning: Password is required!");
        exit();
    } else {
        $query = "SELECT * FROM login WHERE username='$username' AND password='$pass'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['login_id'] = $row['login_id'];
                echo "<script>alert('Login successful!'); window.location.href = 'pid.php';</script>";
                exit();
            } else {
                header("location: index.php?error=Incorrect Username or Password!<br>Please try again.");
                exit();
            }
        } else {
            header("location: login.php?error=Incorrect Username or Password!<br>Please try again.");
            exit();
        }
    }
} else {
    header("location: login.php");
    exit();
}
?>

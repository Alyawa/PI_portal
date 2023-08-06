
<?php
include('db.php');

$error = "";
$email = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if any of the fields are empty
    if (empty($email) || empty($password)) {
        $error = "Warning! Please fill out every field.";
        header("Location: memberlogin.php?error=" . urlencode($error));
    } else {
        $sql = "SELECT reg_id, email, password FROM register WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            // Email and password match, login successful
            $row = mysqli_fetch_assoc($result); // Fetch the user's data
            $reg_id = $row['reg_id']; // Extract reg_id
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['reg_id'] = $reg_id; // Store reg_id in session
            header("Location: membership.php");
        } else {
            $error = "Invalid email or password.";
            header("Location: memberlogin.php?error=" . urlencode($error));
        }
    }
}
?>


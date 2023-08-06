<?php
include('db.php');

$error = ""; // Variable to store the error message

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $password = $_POST['password'];

    // Check if any of the fields are empty
    if (empty($name) || empty($email) || empty($mobile) || empty($state) || empty($password)) {
        $error = "Warning! Please fill out every field.";
    } else {
        $sql = "INSERT INTO register (name, email, mobile, state, password)
        VALUES ('$name', '$email', '$mobile', '$state', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Registration successful!'); window.location.href = 'membership.php';</script>";
        } else {
            die(mysqli_error($conn));
        }
    }
}
?>

<!--End PHP-->

<!--start HTML form layout-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Register</title>
    <!--Start inline CSS-->
    <style>
        body {
            background-image: linear-gradient(358.7deg, rgba(42,136,157,1) 1.7%, rgba(122,197,214,1) 51.1%, rgba(211,232,242,1) 95.5%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
        }

        * {
            font-family: sans-serif;
            box-sizing: border-box;
        }

        form {
            background: #FFFFFF;
            width: 550px;
            border: 2px solid #ccc;
            padding: 45px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 15px;
            animation: showForm 1s ease;
        }

        @keyframes showForm {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .center-image {
            display: block;
            margin: 0 auto;
        }

        .center-text {
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }

        label {
            color: #000000;
            font-size: 17px;
            padding: 10px;
        }

        #register-button {
            float: left;
            background: #555;
            padding: 10px 35px;
            color: #FFFFFF;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        #login-button {
            clear: both;
            background: #555;
            padding: 10px 35px;
            color: #FFFFFF;
            border-radius: 5px;
            border: none;
        }

        .error {
            background:#F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
    <!--End CSS style-->
  </head>
  
  
  <body>
  <body>
    <div class="container d-flex justify-content-center align-items-center ">
        <form method="post" class="p-5">
            <h3 class="text-left">
                <a href="membership.php" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </h3>
            
            <h2 class="text-center">Register as Member</h2>
            <img src="img/security.png"  class="center-image" width="40" height="40">
            <p class="center-text">Please enter your credentials to register</p>

            <!--insert notification alert "-->
            <?php if (!empty($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
        <!--close alert-->

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter your mobile phone number " name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" placeholder="Enter the current state you're living. E.g: Selangor" name="state" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-success" name="submit">Register</button>
            <br>
            <div class="center-text">
                <p id="login-p">Already registered? &nbsp <a href="memberlogin.php" id="login-button" class="btn btn-primary">Login</a></p>
            </div>
        </form>
    </div>
  </body>
</html>

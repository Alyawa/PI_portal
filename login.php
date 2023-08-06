<!DOCTYPE html>
<html>
<head>
    <title>Primary Immunodeficiency (PI) Portal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
<body>
</head>
    <form action="logincrud.php" method="POST">
        <h3>
            <a href="pid.php" class="back-button">
            <i class="fas fa-arrow-left"></i>
            </a><br> back
        </h3>
        
        <h2> LOGIN AS ADMIN</h2>
        <img src="img/security.png"  class="center-image" width="40" height="40" >
        <p class="center-text">Please enter your credentials to login.</p>

        <!--get alert "error" from logincrud.php in text box-->
        <?php
                 if(isset($_GET['error'])) {
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <!--close alert-->

        <h3><label> Username</label></h3>
        <input type="text" name="username" placeholder="Please enter your username"> <br>

        <h3><label> Password</label></h3>
        <input type="password" name="password" placeholder="Enter password"><br>

        <button type="submit"> Login </button>

    </form>
</body>
</html>
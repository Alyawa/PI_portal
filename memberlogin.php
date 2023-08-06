<!DOCTYPE html>
<html>
<head>
    <title>Primary Immunodeficiency (PI) Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>



<!--Start CSS-->
<style>
body {
    background: rgb(238,174,202);
    background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

*{
    font-family: sans-serif;
    box-sizing: border-box;
}

form{
    background: #FFFFFF;
    width: 500px;
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

h2{
    text-align: center;
    margin-bottom: 40px;
}

input{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

label{
    color: #000000;
    font-size: 18px;
    padding: 10px;
}

button{
    float: right;
    background: #555;
    padding: 10px 35px;
    color: #FFFFFF;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}

button:hover{
    opacity:.7;
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

<!--CSS End-->

<!--Start HTML-->
</head>

        <form action="membercrud.php" method="POST">
        <h3>
            <a href="register.php" class="back-button">
            <i class="fas fa-arrow-left"></i>
            </a><br> back
        </h3>
        
        <h2> MEMBERSHIP LOGIN</h2>
        <img src="img/security.png"  class="center-image" width="40" height="40" >
        <p class="center-text">Please enter your credentials to login.</p>

        <!--get alert "error" from membercrud.php in text box-->
        <?php
                 if(isset($_GET['error'])) {
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <!--close alert-->

        <h3><label> Email</label></h3>
        <input type="email" name="email" placeholder="Please enter your email"> <br>

        <h3><label> Password</label></h3>
        <input type="password" name="password" placeholder="Enter password"><br>

        <input type="hidden" name="login" value="1">
        <button type="submit" name="submit">Login</button>



  

    </form>
</body>
</html>
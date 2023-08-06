<?php session_start();
include('header.php');
if(empty($_SESSION['id'])):
    header('');
endif;
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">


<body>
    <div style="width:160px;margin:auto;height:500px;margin-top:300px">
<!--add loading icon from bootstrap-->
    <div class="d-flex justify-content-center">
        <div class="spinner-border" role="status">  
        </div>
    </div> <br> <br>

<!--add progress icon-->
    <?php
     include('db.php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=index.php">';
     echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
     echo '<span class="itext"><h4>Logging out</h4><br> please wait....</span>';

    ?>
    </div>

</body>
</html>
          
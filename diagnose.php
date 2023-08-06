<?php require("db.php"); ?>
<?php include('header.php'); ?>
<?php include('navlink.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
  
    .custom-header {
  background: linear-gradient(156deg, rgba(0, 27, 56, 0.1) 25%, rgba(255, 0, 0, 0.1) 70%), url("img/background(4).jpg");
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply; 
}
  .custom-header h1, .custom-header h4 {
    color: white; 
  }
    /* box thumbnails */
    .thumbnail-container {
        margin-top: 20px;
    }

    .thumbnail-card {
        border-radius: 4px;
        height: 100%;
        padding: 3rem;
        text-align: center;
        padding: 1rem;
        background: rgb(173,207,255);
        background: linear-gradient(6deg, rgba(173,207,255,1) 0%, rgba(255,255,255,1) 100%);
        box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.025);
    }

    .thumbnail-card:hover {
        transform: scale(1.05);
    }

    .thumbnail-img {
        width: auto;
        height: 200px;
        object-fit: cover;
    }

    .thumbnail-content {
        padding: 20px;
    }

    .thumbnail-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .thumbnail-description {
        font-size: 14px;
        color: #666;
    }

    .thumbnail-patient {
        font-style: italic;
        font-size: 14px;
        color: #666;
    }
    /* Footer */
  #footer {
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%);
    color: rgba(255, 255, 255, 0.5);
    padding: 0.2rem 0;
    text-align: center;
  }

  #footer .content {
    display: flex;
    justify-content: flex-end;
    flex-wrap: wrap;
  }

  #footer .content section {
    flex: 1 1 50%;
    text-align: left;
    padding: 0 2rem;
  }

  #footer a {
    color: #ce1b28;
  }

  #footer a:hover {
    color: #ce1b28;
  }

  #footer h3,
  #footer h4 {
    color: #ffffff;
  }
  /* Copyright */
  #copyright {
    background: black;
    color: white;
    text-align: center;
    padding: 2rem 0;
    font-size: 0.8rem;
    opacity: 0.5;
  }
  .copyright {
  border-top: 1px solid;
  font-size: 0.8rem;
  padding: 2rem 0;
  text-align: center;
  background-color: #111111;
  color: rgba(255, 255, 255, 0.5);
  text-decoration: none;
}
</style>

<!--Start HTML-->

 <!-- Header -->
 <header class="w3-container w3-center custom-header" style="padding: 128px;">
    <h1 class="w3-xxxlarge"><b>Types of Primary Immunodeficiency</b></h1><br>
    <h4>Get to know PI Diagnose types</h4>
  </header>





<!-- Thumbnails container to show data attributes from the server -->
<div class="container mt-4 thumbnail-container">
    <div class="row">
        <?php
            $query = "SELECT * FROM pid";
            $result = mysqli_query($conn, $query);
            $fetch_src = "http://127.0.0.1/piportal/uploads/";

            while($fetch = mysqli_fetch_assoc($result)) {
                echo <<<pid
                <div class="col">
                    <div class="thumbnail-card">
                        <img src="$fetch_src$fetch[pid_photo]" class="thumbnail-img" alt="PID Image">
                        <div class="thumbnail-content">
                            <h5 class="thumbnail-title">$fetch[pid_name]</h5>
                            <h6 class="thumbnail-patient">Total Patients: $fetch[pid_patientno] persons</h6>
                            <p class="thumbnail-description">$fetch[pid_desc]</p>
                            
                        </div>
                    </div>
                </div>
                pid;
            }
        ?>
    </div>
</div>



<!--FOOTER-->
<footer>
<a href="#" class="w3-button w3-white w3-padding-large w3-margin-bottom w3-opacity w3-hover-opacity-off " style="border-radius:10px"><i class="fa fa-arrow-up w3-margin-right"></i>Back to top</a>
					</div>
				</div>
  <div id="copyright " class="copyright">
		<a> This Portal Website is for Educational Purpose only &nbsp.&nbsp Degree Final Year Project </a> <ul>
		<i class="fa fa-copyright" aria-hidden="true"></i> &nbsp Design by &nbsp . &nbsp Alya Wawa &nbsp. &nbsp2023</a>.
		</div>
</footer>
</body>
</html>

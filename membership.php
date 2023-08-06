<?php require("db.php");
      require("membershipcrud.php"); ?>

<meta charset="UTF=8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Primary Immunodeficiency (PI) Portal </title>
	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        

<!--START CSS STYLES-->       
<style>
@charset "UTF-8";
@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Passion+One:400");

/* Banner */

#banner {
	position: relative;
    
}
#banner .logout-btn {
    position: absolute;
    top: 1em;
    right: 1em;
    background-color: transparent;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    color: black;
    text-decoration: none;
    border-bottom: 1px dotted;
}

#banner .logout-btn img {
    display: block;
    width: auto; 
    height: auto;
    margin-bottom: 0.25em; 
}

#banner .logout-btn span {
    font-size: 18px;
    font-family: serif;
    line-height: 1;
}
		#banner .inner {
            padding: 6em 4em 1em 4em;
			text-align: center;
			position: relative;
			z-index: 2;
		}

		#banner h1 {
			color: black;
			font-size: 5em;
			font-weight: 400;
			font-family: 'Passion One', cursive;
			margin: 0;
		}


		#banner a {
			color: black;
			text-decoration: none;
			border-bottom: 1px dotted;
		}

			#banner a:hover {
				color: maroon;
				border: none ;
			}

		#banner:before {
			-moz-transition: opacity 3s ease;
			-webkit-transition: opacity 3s ease;
			-ms-transition: opacity 3s ease;
			transition: opacity 3s ease;
			-moz-transition-delay: 1s;
			-webkit-transition-delay: 1s;
			-ms-transition-delay: 1s;
			transition-delay: 1s;
			content: '';
            background: rgb(173,207,255);
            background: linear-gradient(6deg, rgba(173,207,255,1) 0%, rgba(255,255,255,1) 100%);
            color: rgba(255, 255, 255, 0.5);
			display: block;
			height: 100%;
			left: 0;
			opacity: 0.9;
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 1;
		}


		@media screen and (max-width: 980px) {

			#banner br {
				display: none;
			}

		}

		@media screen and (max-width: 736px) {

			#banner {
				min-height: 0;
				padding: 6em 2em 4em 2em;
			}

				#banner br {
					display: none;
				}

		}
    </style>

<!--START HTML-->
<body id="top">
	<section id="banner" >
		<div class="inner">
		<header>
			<h1> Welcome, New Members!</h1>
            <p>We appreciate your interest in being a MYPOPI member.</p>
		</header>
        <a class="logout-btn" href="logout.php">
                <img src="img/logout.png" alt="Logout">
                <span>Log out</span>
            </a>
		</div>
	</section>
<!--Notification alert-->
<?php

    if(isset($_GET['alert']))
    {
        if($_GET['alert']=='img_upload')
        {
            echo<<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Image Failed to Upload! </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

//notification alert image remove failed
        if($_GET['alert']=='img_rem_fail')
        {
            echo<<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Image Removal Failed to Upload! </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

//notification alert add pid failed
        if($_GET['alert']=='add_failed')
        {
            echo<<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot add the files </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

//notification alert remove pid failed
        if($_GET['alert']=='remove_failed')
        {
            echo<<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot remove the files </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

//notification alert update/edit pid failed
        if($_GET['alert']=='updated_failed')
        {
            echo<<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot update the files </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

    }
//notification alert  success
    else if(isset($_GET['success']))
    {
        if($_GET['success']=='updated')
        {
            echo<<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
                <strong>Files updated</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }
        //notification alert  add pid success
        if($_GET['success']=='added')
        {
            echo<<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
                <strong>Files has been added.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

        //notification alert  remove pid success
        if($_GET['success']=='removed')
        {
            echo<<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
                <strong>Files has been removed.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

    }


?>

<!--end notification-->
 
    <body class="bg-light">
<div class="container mt-4 p-0 border border-2">

    <h1 class="text-center">
        <a href="membership.php#profile" class="page-header text-black text-decoration-none">Membership Profile</a>
    </h1>
    <div class="d-flex align-items-center justify-content-between px-3">
        <h2>
            <a href="membership.php#profile" class="text-white text-decoration-none"></a>
        </h2>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#register">
            <i class="bi bi-gear"></i> Update Profile
        </button>
    </div>
</div>






<!--Notification alert-->
<?php

    if(isset($_GET['alert']))
    {



//notification alert update/edit pid failed
        if($_GET['alert']=='updated_failed')
        {
            echo<<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot update the profile </strong> Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }

    }
//notification alert  success
    else if(isset($_GET['success']))
    {
        if($_GET['success']=='update')
        {
            echo<<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
                <strong>Profile updated!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }
       
    }


?>

 <!-- Form to show data from the database UPDATE PROFILE-->
 <div class="container mt-4 p-0 border border-2 ">
 <form action="updateprofile.php" method="POST"> 
    <div class="form-group row ">
        <label for="staticname" class="col-sm-2 col-form-label fs-5 text-center"><strong>Name</strong></label>
        <div class="col-sm-10  "> 
            <input type="text" readonly class="form-control-plaintext fs-5 " id="staticname" value="<?php echo $name; ?>">
        </div>
    </div>

        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label fs-5 text-center"><strong>Email</strong></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext fs-5" id="staticEmail" value="<?php echo $email; ?>">
                </div>
            </div>

            <form>
                <div class="form-group row">
                    <label for="staticmobile" class="col-sm-2 col-form-label fs-5 text-center"><strong>Mobile</strong></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext fs-5" id="staticmobile" value="<?php echo $mobile; ?>">
                    </div>
                </div>

                <form>
                    <div class="form-group row">
                        <label for="staticstate" class="col-sm-2 col-form-label fs-5 text-center"><strong>State</strong></label>
                        <div class="col-sm-10 ">
                            <input type="text" readonly class="form-control-plaintext fs-5" id="staticstate" value="<?php echo $state; ?>">
                        </div>
                    </div>
</div>
                    <!-- End Form -->

<!--  backdrop after click button 'Update Profile'-->
<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="updateprofile.php" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Update Profile</h5>
        </div>
        <div class="modal-body">
            
            <!-- Input attribute profile name-->
            <div class="input-group mb-3">
                <span class="input-group-text" >Name</span> 
                 <input type="text" class="form-control"name="name"   required >
            </div>
             <!-- Input attribute profile email-->
             <div class="input-group mb-3">
                <span class="input-group-text" >Email</span> 
                 <input type="email" class="form-control"name="email"  required >
            </div>
            <!-- Input attribute profile mobile number-->
            <div class="input-group mb-3">
                <span class="input-group-text" >Mobile Number</span> 
                 <input type="text" class="form-control"name="mobile" value="<?php echo $mobile; ?>" required >
            </div>
            <!-- Input attribute profile state-->
        <div class="input-group mb-3 dropdown">
             <span class="input-group-text">State</span>
                <select class="form-control form-control-sm" name="state" required>
                    <option selected disabled >Select a State</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Sabah">Sabah</option>    
                </select>
                <span class="input-group-text">
        <a href="#" id="stateDropdownButton"><i class="bi bi-chevron-down"></i></a>
    </span>
</div>      
 <!-- Hidden input field to store user ID -->
 <input type="hidden" name="reg_id" value="<?php echo $reg_id; ?>">     
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="register">Update</button>
        </div>
        </div>
    </form>
  </div>
</div>


<!--Insert Statistic Data picture-->
<div class="container mt-4 p-3 border border-2 border-dark" style="display: flex; justify-content: center; align-items: center;">
        <img src="img/PIDstatistic.png" alt="PIDstatistic" width="1100" height="auto">
    
</div>


<!--START  SECTION FOR TYPES OF PID-->
<body class="bg-light">
<div class="container bg-dark text-light p-3 rounded my-4">
   
    <h1 class="text-center">
        <a href="pid.php#diagnosis" class="page-header text-white text-decoration-none">Types of PID Diagnosis</a>
    </h1>
    <p class="text-center">If you are a new member and have been diagnosed with PID, kindly please update the types of PID diagnosis below
        
    </p>
    <div class="d-flex align-items-center justify-content-between px-3">
        <h2>
            <a href="pid.php#diagnosis" class="text-white text-decoration-none"></a>
        </h2>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pid">
            <i class="bi bi-plus-lg"></i> Add New Type
        </button>
    </div>
</div>





<!--add table container to show data attribute from server-->
<div class="container mt-4 p-0">
    <table class="table table-hover text-center">
        <thead class="bg-dark text-light">
            <tr>
            <th width="10%" scope="col" class="rounded-start">No</th>
            <th width="15%" scope="col">Image</th>
            <th width="10%" scope="col">Name</th>
            <th width="15%" scope="col">Number of Patient</th>
            <th width="35%" scope="col">Description</th>
            <th width="20%" scope="col"class="rounded-end">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <?php

                $query="SELECT * FROM pid";
                $result=mysqli_query($conn,$query);
                $i=1;
                define("FETCH_SRC","http://127.0.0.1/piportal/uploads/");
                $fetch_src=FETCH_SRC;


// edit and delete button
                while($fetch=mysqli_fetch_assoc($result))
                {
                    echo<<<pid
                    <tr class="align-middle">
                        <th scope="row">$i</th>
                        <td><img src="$fetch_src$fetch[pid_photo]" width="150px"></td> 
                                        
                        <td>$fetch[pid_name]</td>
                        <td>$fetch[pid_patientno]</td>
                        <td>$fetch[pid_desc]</td>
                        <td>
                            <a href="?edit=$fetch[pid_id]" class="btn btn-warning me-2"><i class="bi bi-pencil-square"></i></a>
                            <button onclick="confirm_rem($fetch[pid_id])" class="btn btn-danger"> <i class="bi bi-trash3"></i> </button>
                        </td>
                    </tr>
                    pid;
                    $i++;

                }

            ?>
            
            
        </tbody>
    </table> 
</div>



<!-- Modal static backdrop after click button '+add new type'-->
<div class="modal fade" id="pid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="membershipcrud.php" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Add New Type of PID</h5>
        </div>
        <div class="modal-body">
            
            <!-- Input attribute pid.name-->
            <div class="input-group mb-3">
                <span class="input-group-text" >Name</span> 
                 <input type="text" class="form-control"name="name"  required >
            </div>
            <!-- Input attribute pid.patient number-->
            <div class="input-group mb-3">
                <span class="input-group-text" >Patient Number</span> 
                 <input type="number" class="form-control"name="patientno"  min="1"required >
            </div>
            <!-- Input attribute pid.desc-->
            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="desc"  required></textarea>
            </div>
            <!-- Input attribute pid.photo-->
            <em>Please Upload a photo for preview images</em>                
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pid_photo" accept=".jpg,.png,.svg" required >
                <label class="input-group-text" >Image</label>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="pid">Add </button>
        </div>
        </div>
    </form>
  </div>
</div>

<!--copy table '+add new type'-->
<div class="modal fade" id="editpid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="membershipcrud.php" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Edit PID Type</h5>
        </div>
        <div class="modal-body">
            
            <!-- Input attribute edit pid.name-->
            <div class="input-group mb-3">
                <span class="input-group-text" >Name</span> 
                 <input type="text" class="form-control"name="name" id="editname" required >
            </div>
            <!-- Input attribute edit pid.patient number-->
            <div class="input-group mb-3">
                <span class="input-group-text" >Patient Number</span> 
                 <input type="number" class="form-control"name="patientno" id="editpatientno" min="1"required >
            </div>
            <!-- Input attribute edit pid.desc-->
            <div class="input-group mb-3">
                <span class="input-group-text">Description</span>
                <textarea class="form-control" name="desc" id="editdesc" required></textarea>
            </div>
            <!-- Input attribute edit pid.photo-->
            <em>Change Photo (option) </em> </p>
            
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="pid_photo" accept=".jpg,.png,.svg" >
                <label class="input-group-text" >Image</label>
            </div>
            <img src="" id="editpid_photo" width="30%"  class="mb-3"><br>  
            <input type="hidden" name="editpid_id" id="editpid_id" >
        </div>

        <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="editpid">Update</button>
        </div>
        </div>
    </form>
  </div>
</div>

<!--php CRUD edit button section:minutes 50:30 on youtube tutorial-->
<?php
    if(isset($_GET['edit']) && $_GET['edit']>0)
    {
        $query="SELECT * FROM pid WHERE pid_id ='$_GET[edit]'";
        $result=mysqli_query($conn,$query);
        $fetch=mysqli_fetch_assoc($result);
        echo"
        <script>
            var editpid = new bootstrap.Modal(document.getElementById('editpid'), {
                keyboard: false
            });
            document.querySelector('#editname').value='$fetch[pid_name]';
            document.querySelector('#editpatientno').value='$fetch[pid_patientno]';
            document.querySelector('#editdesc').value='$fetch[pid_desc]';
            document.querySelector('#editpid_photo').src='$fetch_src$fetch[pid_photo]';
            document.querySelector('#editpid_id').value='$_GET[edit]'; // Add this line
            editpid.show();
        </script>
    ";
    }
?>


<script>
    function confirm_rem(pid_id) {
       if (confirm("Are you sure want to delete this item?")){
        window.location.href="membershipcrud.php?rem="+pid_id
       }
    }

</script>

<!--END SECTION FOR TYPES OF PID-->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(document).ready(function () {
        $("#stateDropdownButton").on("click", function () {
            $("select[name='state']").parent().toggleClass("show");
        });

        $(".dropdown-item").on("click", function () {
            var selectedValue = $(this).text();
            $("select[name='state']").val(selectedValue);
            $("select[name='state']").parent().removeClass("show");
        });
    });
</script>






</body>
</html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Header -->
<header id="header">
				<a class="logo" href="index.php">Portal Primary Immunodeficiency (PI)</a>
				<nav>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="info.php">Info</a>
                    <a href="diagnose.php">Types of PI</a>
                    <div class="dropdown">
                    <button class="dropbtn" onclick="toggleDropdown()">Login &nbsp;<i class="bi bi-caret-down-square"></i></button>
                    <div class="dropdown-content" id="myDropdown">
                    <br>
                    <p onclick="window.location.href='login.php';">Login as Admin</p>
                    <p onclick="window.location.href='register.php';">Register as Member</p>
                </div>
                    </div>
                        </div> 
				</nav>
			</header>

<!-- Close Header -->

<!--CSS-->
<style>
    /* Header */
  #header {
  width:100%; 
  position:fixed; 
   
	display:flex;
  background-color: white;
	justify-content:space-between;
	align-items:center;
	height: 70px;
	box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.8);
	padding:0px 25px;
	}



#header .logo {
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  color: #000000;
}

#header nav {
  display:flex;
  border-radius: 15px;
  
}

#header nav a {
  color: #000000;
  margin-right: 20px;
  padding: 16px;
  text-decoration: none;
  font-size: 20px;
  width: auto;
  border-radius: 10px;
  
}

#header nav a:hover {
  text-decoration: underline;
  background: rgb(145,190,255);
  background: linear-gradient(90deg, rgba(145,190,255,1) 0%, rgba(178,210,255,1) 41%);
}

/* Dropdown */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown .dropbtn {
  font-size: 20px;
  border: none;
  outline: none;
  color: black;
  padding: 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  width: 100%;
  text-align: center;
  border-radius: 5px;
}

.dropdown-content {
  display: none;
  position: fixed;
  top: 15%;
  right: 0;
  width: 300px;
  background: #d7e1ec;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  border-radius: 5px;
}

.dropdown-content p {
  color: #333;
  padding: 5px;
  text-decoration: none;
  display: block; 
  font-size: 16px;
  font-family: inherit;
}

.dropdown:hover .dropdown-content,
.dropdown-content:hover {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: rgb(145, 190, 255);
  background: linear-gradient(90deg, rgba(145, 190, 255, 1) 0%, rgba(178, 210, 255, 1) 41%);
}

.dropdown-content p:hover {
  text-decoration: underline;
  background: rgb(145, 190, 255);
  background: linear-gradient(90deg, rgba(145, 190, 255, 1) 0%, rgba(178, 210, 255, 1) 41%);
}

/* Additional Styles */
body {
  margin: 0;
  padding: 0;
}

</style>

<script>
function toggleDropdown() {
  var dropdown = document.getElementById("myDropdown");
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
  }
}

// Close the dropdown when clicking outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    }
  }
};
</script>

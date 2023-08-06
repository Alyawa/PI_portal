<!DOCTYPE html>
<html>
<head>
<title>PORTAL PI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h2,h3,h4,h5,h6 {font-family: "Oswald"}
h1{font-family:inherit}
body {font-family: "Open Sans"}
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation bar  -->
<?php include('navlink.php'); ?>

<!--CSS Style-->
<style>
  .custom-header {
  background: linear-gradient(156deg, rgba(0, 27, 56, 0.1) 25%, rgba(255, 0, 0, 0.1) 70%), url("images/banner.gif");
  background-position: center;
  background-size: cover;
  background-blend-mode: multiply; /* Helps blend the image and gradient */
}
  .custom-header h1, .custom-header h4 {
    color: white; /* Set text color to white for better contrast */
  }

  .w3-white {
  background: rgb(160,199,255);
  background: linear-gradient(6deg, rgba(160,199,255,1) 0%, rgba(255,255,255,1) 100%);
}

#demo3,#demo2 {
  background: rgb(2,0,36);
  background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(1,9,121,1) 35%);
  color: white;
  padding: 20px;
  border-radius: 3px;
  }
  a {
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
    color: red;
  }
.download-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
  }
  
   /* Tag Styles */
   .w3-tag {
    display: inline-block;
    padding: 6px 10px;
    margin: 3px;
  
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s ease;
  }

  .w3-tag:hover {
    background-color: #fbb034;
background-image: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%);
    text-decoration: underline;
    text-decoration-color: red; /* Added red underline */
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


<!--Close CSS Style -->

<!--HTML Start-->

<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center custom-header" style="padding: 128px;">
    <h1 class="w3-xxxlarge"><b>PRIMARY IMMUNODEFICIENCY</b></h1>
    <h4>Info</h4>
  </header>





  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>About PI</h3>
          <h5>What are Primary Immunodeficiency (PI)? </h5>
        </div>

        <div class="w3-justify">
          <p><strong>Primary immunodeficiencies,</strong>commonly referred to as inborn errors of immunity (IEI), are a class of more than 450 uncommon, chronic diseases in which a component of the immune system is absent or does not work properly. 
          Anyone, regardless of age, gender, or race, can get these diseases because of hereditary genetic flaws.
          </p>
          <p>While PIs differ, they all share one common feature: disruption of the body’s immune system. 
          Because the most important function of the immune system is to protect against infection, people with PI commonly experience increased susceptibility to infection. 
          The infections may be in the skin, sinuses, throat, ears, lungs, brain, or spinal cord, or in the urinary or intestinal tracts. 
          Increased susceptibility to infection may show up as repeated infections, infections that won’t clear up, or unusually severe infections.
          </p>
          
          
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Signs and Symptomps of PI</h3>
          <h5>Is Primary Immunodeficiency (PI) just an infection?</h5>
        </div>

        <div class="w3-justify">
          <center><img src="img/1.png" alt="infection" width="50%" height="auto"class="w3-padding-16"></center>
          <p> A person who have an infection that is having in the list below are  possibility of a primary immunodeficiency (PI).
            <ul>
              <li>Recurrent (keeps coming back)</li>
              <li>Sever</li>
              <li>Persistent</li>
              <li>Unusual</li>
              <li>Shared by family members</li>
            </ul>
          </p>
          <p>Overall, the majority of PIDs are caused by genetic defects of the immune system which are hereditary for most of them. 
            The immune system normally helps the body fight off infections caused by germs (or ‘micro-organisms’) such as bacteria, viruses, fungi and protozoa. 
            Because their immune systems do not work properly, people with PIDs are more prone than other people to infections.</p>
          <p class="w3-right"><button class="w3-button w3-sand" style="border-radius:2px" onclick="myFunction('demo2')"><i class="fa fa-sort-desc"><b>&nbsp More Info  </b> <span class="w3-tag w3-khaki">2</span></i></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l10 m9">
                <h4>10 Warning signs of PI</span></h4>
                <p>Get to know the signs of infection Primary Immunodeficiency. If you or someone you know is affected by two or more of the following Warning Signs, 
                  speak to a physician about the possible presence of an underlying Primary Immunodeficiency.</p><br>
                  <div style="display: flex; justify-content: center center;">
                   <img src="img/warning10signs.jpg" alt="infection" style="width: 50%; height: auto;">  &nbsp 
                    <img src="img/infection.jpg" alt="infection" style="width: 50%; height: auto;">
                  </div>

                  

              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              
              <div class="w3-col l10 m9">
                <h4>Download the infographics <br> <span class="w3-opacity w3-medium">Download available here:</span></h4>
                <a href="files/warningsigns.pdf" download>
                    <button class="download-button">Download 10 warning signs PDF</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Diagnosis of PI -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Diagnosis</h3>
          <h5>How is Primary Immunodeficiency (PI) diagnosed?</h5>
        </div>

        <div class="w3-justify">
        <center><img src="img/3.png" alt="infection" width="50%" height="auto"class="w3-padding-16"></center>

          <p> It is estimated that around 60% of PIDs can be easily diagnosed with simple and inexpensive blood tests,
              many PIDs remain underdiagnosed on a global scale. 
              Hopefully, as the technical ability to identify gene defects improves, 
              more and more genetic causes of PID are being identified.</p>

          <p>There are various ways to diagnose the 450+ types of primary immunodeficiencies (PI). 
            You can learn about a few of the different types of diagnosis here:</p>
          <p class="w3-right"><button class="w3-button w3-sand" style="border-radius:2px" onclick="myFunction('demo3')"><i class="fa fa-sort-desc"><b>&nbsp More Info.. </b> <span class="w3-tag w3-khaki">3</span></i></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
            <center><h3 style="color:white:">How to diagnose if you have Primary Immunodeficiency (PI):</h3><br></center>

              <div class="w3-col l2 m3">
                <img src="img/DNAtesting.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>1) Genetic Testing </h4>
                <p>A genetic diagnosis may impact the way your doctor manages your disease. <br>
                According to a recent Jeffrey Modell Foundation study of patients with underlying PI (n=119),
                following a genetic test:
                  <ul> 
                    <li>45% of patients received an updated clinical diagnosis</li>
                    <li> Disease management was altered in 40% of patients </li>
                    <li> 36% of patients had their treatment changed by theid medical doctors</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="img/newborn.png" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>2) Newborn Screening</h4>
                <p>Screening for some of the most severe forms of immunodeficiency, such as Severe Combined Immunodeficiencies (SCID),
                   will also diagnose more individuals at an earlier stage, thus improving treatment outcomes.</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="img/laboratory.jpeg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>3) Laboratory Test</h4>
                <p>Laboratory studies are necessary to determine the presence of a primary immunodeficiency.<br>
                The most common laboratory tests used to evaluate immune disorders are used to identify:
                    <ul>1. Antibody deficiencies</ul>
                    <ul>2. Cellular (T cell) defects</ul>
                    <ul>3. Neutrophil disorders</ul>
                    <ul>4. Complement deficiencies</ul>
                </p>
                <p>These four major categories of tests for PI are described hereafter. 
                   Another emerging laboratory test for the diagnosis of PI is genetic testing.
                   In the past, genetic tests were available mainly in research settings, 
                   but now, several commercial labs offer genetic sequencing for the identification of known mutations causing various types of PI.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-black">
        <h5 > <i class="fa fa-info-circle" > &nbsp  Info </i></h5>
          <p> The treatment of primary immunodeficiency diseases (PIDs) involves different doctors working together :  </p>
          <p>
            <ul><li><strong>Immunologists: </strong>These doctors specialize in immune system disorders and are central in diagnosing and treating PIDs. They order tests and prescribe treatments.</li>
            <br>
            <li><strong>Pediatricians:</strong> They are primary care doctors who coordinate overall patient care and address general health issues.</li>
            <br>
            <li><strong>Geneticists: </strong> They help diagnose PIDs with a genetic basis and offer genetic counseling and testing.</li>
            <br>
            <li><strong>Allergists/Immunologists: </strong>They manage allergies and related conditions that can occur alongside PIDs.</li> </ul>

          </p>
        </div>
      </div>
      <hr>

      <!-- News and Recent Events -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4><i class="fa fa-newspaper-o"> &nbsp News and Recent Events</i></h4>
        </div>
        <ul class="w3-container  w3-section">
          
          <a href="https://shorturl.at/fuIMU"><p><strong>IPOPI:</strong> PIDetect:Enhancing PID Diagnosis</p></a>
									
          <a href="https://mypopi.org/home#News-and-Events"><p><strong>MYPOPI:</strong> NACLIS symposium 12th PPU 2023</p></a>
					
          <a href="https://shorturl.at/nsuOT"><p><strong>WORLD PI WEEK:</strong> 2023 highlights: The report campaign</p></a>
								
          <a href="https://shorturl.at/cQSZ5"><p><strong>IDF:</strong> Teach teens with PI how to transition their healthcare</p></a>
					
          <a href="https://ipopi.org/ipic2023-congress-video/"><p><strong>IPOPI:</strong> Join IPOPI at IPIC2023 in Rotterdam, 8-10 November!</p></a>

        </ul>
      </div>
      <hr>
     

      <!-- PID Facts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4><i class="fa fa-question-circle-o" > &nbsp Did you know?</i></h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container  w3-light-grey w3-section" style="height:auto; ">       
            <h3 style="text-decoration:underline;">Classfication of PI</h3>
            <p style="text-align:right"><span class="w3-opacity w3-medium">source: IPOPI</span></p>
            <p>PIDs are currently classified by the IUIS PID/IEI expert committee into 10 groups:
              <ul> 1. predominantly antibody deficiencies </ul>
              <ul>  2. combined immunodeficiencies; </ul>
              <ul>  3. combined immunodeficiencies with associated or syndromic features; </ul>
              <ul>  4. diseases of immune regulation; </ul>
              <ul>  5. congenital defects of phagocyte number or function, or both;  </ul>
              <ul>  6. defects of innate immunity; </ul>
              <ul>  7. auto-inflammatory disorders;  </ul>
              <ul>  8. complement deficiencies, based on the main immunological defects;  </ul>
              <ul>  9. phenocopies of Primary Immunodeficiencies </ul>
              <ul>  10. inherited bone marrow failures. </ul>
           </p>
          </div>
        </div>
      </div>
      <hr>

      <!-- Tags -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <a href="https://ipopi.org/" class="w3-tag w3-pale-yellow w3-small w3-margin-bottom">IPOPI</a>
            <a href="https://primaryimmune.org/" class="w3-tag w3-pale-yellow w3-small w3-margin-bottom">Immune Deficiency Foundation (IDF)</a>
            <a href="https://mypopi.org/" class="w3-tag w3-pale-yellow w3-small w3-margin-bottom">MYPOPI</a>
            <a href="diagnose.php" class="w3-tag w3-pale-yellow w3-small w3-margin-bottom">Types of PI</a>
            <a href="http://www.worldpiweek.org/" class="w3-tag w3-pale-yellow w3-small w3-margin-bottom">World PI Week</a>
            <a href="http://www.worldpiweek.org/" class="w3-tag w3-pale-yellow w3-small w3-margin-bottom">Donate blood: Be a plasma hero</a>
          </p>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Why Primary Immunodeficiency Disease (PID) should raise advocacy generally?</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col ">
            <p>Primary Immunodeficiency Disease (PID) should raise advocacy generally because it is a group of rare disorders caused by genetic defects or immune system abnormalities, leading to a weakened immune response. Advocacy can increase awareness, improve access to specialized care, drive research funding, and provide crucial support for individuals and families living with PID, ultimately enhancing their quality of life and advancing medical knowledge in the field.</p>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Social Media </h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding  ">
          <h6>IPOPI :</h6>
          <a href="https://www.facebook.com/ipopipid" target="_blank">
            <i class="fa fa-facebook-official w3-hover-opacity"></i></a>

          <a href="https://www.instagram.com/ipopi_pid" target="_blank">
            <i class="fa fa-instagram w3-hover-opacity"></i> </a>

            <a href="https://twitter.com/ipopi_info" target="_blank">
              <i class="fa fa-twitter w3-hover-opacity"></i></a>
          

          <H6>MYPOPI :</H6>
          <a href="https://www.facebook.com/MyIpopi" target="_blank"> 
            <i class="fa fa-facebook-official w3-hover-opacity"></i></a>

          <a href="https://www.instagram.com/mypopi_malaysia/" target="_blank"> 
              <i class="fa fa-instagram w3-hover-opacity"></i></a>

          <a href="https://www.linkedin.com/company/mypopi/" target="_blank"> 
                <i class="fa fa-linkedin w3-hover-opacity"></i></a>

          <H6>IDF :</H6>
          <a href="https://www.facebook.com/ImmuneDeficiencyFoundation" target="_blank"> 
            <i class="fa fa-facebook-official w3-hover-opacity"></i></a>

          <a href="https://www.instagram.com/idfcommunity/" target="_blank"> 
              <i class="fa fa-instagram w3-hover-opacity"></i></a>

          <a href="https://www.instagram.com/idfcommunity/" target="_blank"> 
                <i class="fa fa-linkedin w3-hover-opacity"></i></a>

          <a href="https://twitter.com/idfcommunity" target="_blank">
              <i class="fa fa-twitter w3-hover-opacity"></i></a>
        </div>
      </div>
      <hr>
      
    
    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer id="footer">
				<div class="inner" >
        <div class="w3-container  w3-margin w3-padding-small">

					<div class="content">
						<section>
							<h3>Disclaimer</h3>
							<p style=text-align:justify>The information provided on this website portal is for general purposes only and should not be considered as medical advice. 
								While we strive to ensure the accuracy and relevance of the content, we cannot guarantee its completeness or reliability. 
								We do not endorse or take responsibility for the content, policies, or practices of external websites linked to or referenced from this portal. 
								It is recommended to consult with qualified healthcare professionals for personalized diagnosis and treatment. 
								<br>By using this website, you agree to the terms and conditions of this disclaimer.</p>
						</section>
						<section>
							<h4>Main Menu</h4>
							<ul class="alt">
								<li><a href="index.php">Home.</a></li>
								<li><a href="info.php">Info about PI.</a></li>
								<li><a href="diagnose.php">Type of PI diagnose.</a></li>
								<li><a href="login.php">PI CRUD.</a></li>
							</ul>
						</section>
            <a href="#" class="w3-button w3-white w3-padding-large w3-margin-bottom w3-opacity w3-hover-opacity-off " style="border-radius:10px"><i class="fa fa-arrow-up w3-margin-right"></i>Back to top</a>
					</div>
				</div>
  <div id="copyright " class="copyright">
		<a> This Portal Website is for Educational Purpose only &nbsp.&nbsp Degree Final Year Project </a> <ul>
		<i class="fa fa-copyright" aria-hidden="true"></i> &nbsp Design by &nbsp . &nbsp Alya Wawa &nbsp. &nbsp2023</a>.
		</div>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>

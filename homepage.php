<?php
session_start();
?>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 50;
  padding: 0;
  width: 15%;
  background-color: #f1f1f1;
  position: fixed;
  height: 80%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4d79ff;
  color: white;
}

li a:hover:not(.active) {
  background-color: #4d79ff;
  color: white;
}
</style>
</head>
<body>



<!DOCTYPE html>
<html lang="en">
<title>College Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:20px;margin-left:20px; opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>/

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-20"><b><h2>Profile</h2></b></h3>
    <img src="sample.jpg.png" style="width:75%;" class="w3-round"><br><br>
  </div>
  <div class="w3-bar-block">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dashboard</a> 
    <a href="student.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Student</a> 
    <a href="faculty.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Faculty</a> 
    <a href="course.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Course</a> 
    <a href="result.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Result</a> 
    <a href="fee0.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Fee</a>
     <a href="login_student.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:320px;margin-right:20px margin-top:10px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <font color="w3-191970"><h1 class="w3-xxxlarge"><b>COLLEGE MANAGEMENT SYSTEM</b></h1></font>
    <h1 class="w3-xxlarge w3-text-blue"><b>B.N.M.Institute of Technology</b></h1>
  
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class= "w3-half">
     <a href="student.php"><img src="pf.jpg" alt="HTML5 Icon" style="width:350px;height:250px; box-shadow: 5px 5px #999;" onclick="w3_close()" alt="Concrete meets bricks"></a>
      <a href="faculty.php"><img src="fac.jpg" alt="HTML5 Icon" style="width:350px;height:250px;box-shadow: 5px 5px #999;" onclick="w3_close()" alt="Concrete meets bricks"></a>
      <!-- <img src="/w3images/diningroom.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs"> -->
    </div>


    <div class="w3-half">
      <a href="course.php"><img src="cour.jpg" alt="HTML5 Icon" style="width:350px;height:250px;box-shadow: 5px 5px #999;" onclick="w3_close()" alt="Concrete meets bricks"></a>
      <a href="result.php"><img src="res1.jpg" alt="HTML5 Icon" style="width:350px;height:250px;box-shadow: 5px 5px #999;" onclick="w3_close()" alt="Concrete meets bricks"></a>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-blue"><b>Notifications</b></h1>
   <hr style="box-shadow: 0px 2px #999;">
   <iframe  src="sc.html" width="1000" height="300" scrolling="auto" style="background-color:  #e6e6ff">
    

</iframe>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
   <h1 class="w3-xxlarge w3-text-blue"><b>Recent Events</b></h1>
   <hr style="box-shadow: 0px 2px #999;">
   
    
    <font color="w3-191970"><p><b>Students taking part in various events</b>:</p></font>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="ar.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Aarohan</h3>
          <!-- <p class="w3-opacity">CEO & Founder</p> -->
          <p>“AAROHAN” is title of the inter-collegiate management fest organized by BNMIT. With the objective of giving a platform for students to exhibit the management skills and abilities, Aarohan brings in the pool of competing talents across different colleges nationally. Every year BNMIT comes up with a new theme and enables students to participate and perform.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="vtu.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>VTU Youth Fest</h3>
         <!--  <p class="w3-opacity">Designer</p> -->
          <p> KALA BHAGEERATHI, the cultural forum of BNMIT identifies and nurtures inherent talent among students and provides a platform to exhibit their skills in various fields like ABHINAYA, NAATYA, SANGEETHA, FINEARTS and LITERARY EVENTS.

The cultural team under the guidance of Prof N Sheshaprasad,with ample support from the management.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="tat.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Tatva</h3>
          <!-- <p class="w3-opacity">Architect</p> -->
          <p>Tatva is the annual technical fest of BNMIT which was first organized in the year 2009.
Tatva has progressed and evolved to new heights over the last five years, and is now
an eagerly awaited event not just at BNMIT but also at colleges across Bengaluru.
Tatva 2019 will be the continued endeavor towards reaching a ne w milestone.Tatva is a technical fest having over 30 event.</p>
        </div>
      </div>
    </div>
  </div>

  
  
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>

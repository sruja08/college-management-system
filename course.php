<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>COLLEGE MANAGEMENT SYSTEM</title>
  <style>

  table tr,td
  {
    color: white;
    background-color: #2e2eb8;
    text-align: center;
    align-items: center;
    padding: 5px;
    margin: 3px solid;
    align-items: center;
    width: 500px;
    font-size: 1.2em;
  }

  .con
  {
    text-align: center;
    align:left;
  }
.c3
{
  height: 200px;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #4d79ff;
  color: black;
}

.topnav a.active {
  background-color: #4d79ff;
  color: white;
}      
  </style>

</head>

<body>
 
<div class="topnav">
  <a  href="faculty.php">Faculty</a>
  <a  href="student.php">Student</a>
  <a class="active" href="course.php">Course</a>
  <a href="fee.html">Fee</a>
  <a href="result.php">Result</a>
  <a href="homepage.php">Home</a>
<li><a href="login_student.html">Logout</a></li>    
</div>


  <div class="card bg-white">



<?php
session_start();
$connection = mysqli_connect("localhost","root","","cms");

$usn = $_SESSION["USN"];
$entry_database = "stud WHERE ROLL_NO = $usn";

$query="SELECT * FROM $entry_database";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run)) {
  $sem = $row["SEM"];

}


$entry_database = "course WHERE sem = $sem";

$query="SELECT * FROM $entry_database";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run)) {
  ?>

      <div class="card-title my-5">
        <div class="container con">
        <h3 class="display-4 ml-5"><?php echo $row['c_name'];?></h3>
  <table class="table table-respnsive ml-4">
                  <tr>
                    <td>Course code</td>
                     <td>:</td>
                     <td><?php echo $row['c_code'];?></td>
                  </tr>
                  <tr>
                    <td>Sem</td>
                     <td>:</td>
                     <td><?php echo $row['sem'];?></td>
                  </tr>
        <tr>
                    <td>Department</td>
                     <td>:</td>
                     <td><?php echo $row['dept'];?></td>
                  </tr>
        
       
        
                </table>
  <?php

}


?>

</div>
</div>
    

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
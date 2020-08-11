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
    align:center;
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

</head><!--
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


</style>
</head>
-->

<body>

<div class="topnav">
  <a class="active" href="faculty.php">Faculty</a>
  <a href="student.php">Student</a>
  <a href="course.php">Course</a>
  <a href="fee.html">Fee</a>
  <a href="result.php">Result</a>
  <a href="homepage.php">Home</a>
<li><a href="login_student.html">Logout</a></li>    
    
</div>


  <div class="card bg-white">



<?php

$connection = mysqli_connect("localhost","root","","cms");


$entry_database = "faculty";

$query="SELECT * FROM $entry_database";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run)) {
  ?>
    <div class="container con">

      <div class="card-title my-5">
                <h3 class="display-4 ml-5"><?php echo $row['name'];?></h3>
  <table class="table table-respnsive ml-4">
                  <tr>
                    <td>branch</td>
                     <td>:</td>
                     <td><?php echo $row['branch'];?></td>
                  </tr>
                  <tr>
                    <td >dob</td>
                     <td>:</td>
                     <td><?php echo $row['dob'];?></td>
                  </tr>
        <tr>
                    <td >facid</td>
                     <td>:</td>
                     <td><?php echo $row['facid'];?></td>
                  </tr>
        <tr>
                    <td>mobile no</td>
                     <td>:</td>
                     <td><?php echo $row['mno'];?></td>
                  </tr>
        <tr>
                    <td>gender</td>
                     <td>:</td>
                     <td><?php echo $row['gender'];?></td>
                  </tr>
        <tr>
                    <td >adress</td>
                     <td>:</td>
                     <td><?php echo $row['adress'];?></td>
                  </tr>
        <tr>
                    <td  >Qualification</td>
                     <td>:</td>
                     <td><?php echo $row['qualify'];?></td>
                  </tr>
                </table>
  <?php

}


?>
</div>
</div>
</div>
    

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
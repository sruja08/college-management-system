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
  <div class="card bg-white">



<?php
session_start();
$connection = mysqli_connect("localhost","root","","cms");


$entry_database = "fee_status";
$y=$_SESSION['USN']; 
$query="SELECT * FROM fee_status  where ROLL_NO='$y';";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run)) {
  ?>

      <div class="card-title my-5">
        <div class="container con">
        <h6 class=" ml-5"><?php echo 'Bill Id ' .$row['id'];?></h6>
  <table class="table table-respnsive ml-4">
                  <tr>
                    <td  >Total Amount</td>
                     <td>:</td>
                     <td><?php echo $row['tot_amt'];?></td>
                  </tr>
                  <tr>
                    <td>Amount Paid</td>
                     <td>:</td>
                     <td><?php echo $row['amt_paid'];?></td>
                  </tr>
                  <tr>
                    <td>Fee Status</td>
                     <td>:</td>
                     <td><?php echo $row['status1'];?></td>
                  </tr>
       <!--  <tr>
                    <td  class="text-muted">Mode</td>
                     <td>:</td>
                     <td><?php echo $row['mode'];?></td>
                  </tr>
        
        <tr>
                    <td  class="text-muted">Rec_id</td>
                     <td>:</td>
                     <td><?php echo $row['rec_id'];?></td>
                  </tr> -->
        
                </table>
  <?php

}
?>

<!-- Trigger Data Display -->

<!-- <?php

$y=$_SESSION['USN']; 
$query="SELECT * FROM status  where ROLL_NO='$y';";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run)) {
  ?>

      <div class="card-title my-5">
        <div class="container con">
        <h3 class="display-4 ml-5"><?php echo $row['ROLL_NO'];?></h3>
  <table class="table table-respnsive ml-4">
                  <tr>
                    <td  class="text-muted">Total Amount</td>
                     <td>:</td>
                     <td><?php echo $row['status'];?></td>
                  </tr>
        
                </table>
                <?php
              }
?> -->

<!-- Trigger Data Display End -->


</div>
</div>
    

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
<?php
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
  //echo 'Not connected to server';
}
else
{
  //echo 'Connected to server';
}
if(!mysqli_select_db($conn,'cms'))
{
  //echo 'Database not connected';
}


$Roll_no = $_POST['Roll_no'];
$tot_amt= $_POST['tot_amt'];



$sql1 = "INSERT INTO fee_status(Roll_no,tot_amt,remaining) VALUES ('$Roll_no','$tot_amt','$tot_amt')";


if(mysqli_query($conn,$sql1))
  {
  //echo '1';
  echo 'Added Successfully!';
  // header("Location:staff_homepage.html");
  ?> <meta http-equiv="refresh" content="2;staff_homepage.html">
  <?php    
  }
else 
{
  echo 'Id already taken';
  ?> <meta http-equiv="refresh" content="2;staff_homepage.html">
  <?php    
  
  //echo 'Registration Unsuccessful!';
}
  
?>
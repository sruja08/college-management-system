<?php

session_start();
$con=mysqli_connect("localhost","root","","cms");

$name=$_POST['name'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];
$facid=$_POST['facid'];
$mno=$_POST['mno'];
$gender=$_POST['gender'];
$adress=$_POST['adress'];
$qualify=$_POST['qualify'];


$s = "select * from faculty where facid= '$facid'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "faculty id already taken";
  ?> <meta http-equiv="refresh" content="2;register.html">
	<?php    
	
}else {
   $reg= "insert into faculty(name,branch,dob,facid,mno,gender,adress,qualify) values('$name','$branch','$dob','$facid','$mno','$gender','$adress','$qualify');";
   mysqli_query($con,$reg);
   echo "registration successfull!";
   ?> <meta http-equiv="refresh" content="2;admin_homepage.html">
	<?php    
	
}

 ?> 
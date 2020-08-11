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


$c_code = $_POST['c_code'];
$c_name = $_POST['c_name'];
$dept = $_POST['dept'];
$sem = $_POST['sem'];



$sql1 = "INSERT INTO course(c_code,c_name,dept,sem) VALUES ('$c_code','$c_name','$dept','$sem')";


if(mysqli_query($conn,$sql1))
	{
	//echo '1';
	echo 'Course added Successfully!';
	?> <meta http-equiv="refresh" content="2;staff_homepage.html">
	<?php 
	}
else 
{
	//echo '2';
	echo 'Unsuccessful!';
	?> <meta http-equiv="refresh" content="2;cou.html">
	<?php 
}
	
?>
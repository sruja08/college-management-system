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
$Name = $_POST['Name'];
$Sem = $_POST['Sem'];
$Gender = $_POST['Gender'];
$Branch = $_POST['Branch'];
$Password = $_POST['Password'];


$sql1 = "INSERT INTO stud(Roll_no,Name,Sem,Gender,Branch,Password) VALUES ('$Roll_no','$Name','$Sem','$Gender','$Branch','$Password')";


if(mysqli_query($conn,$sql1))
	{
	//echo '1';
	echo 'Registration Successful!';
	// header("Location:staff_homepage.html");
	?> <meta http-equiv="refresh" content="2;staff_homepage.html">
	<?php    
	}
else 
{
	echo 'Id already taken';
	?> <meta http-equiv="refresh" content="2;reg2.html">
	<?php    
	
	//echo 'Registration Unsuccessful!';
}
	
?>
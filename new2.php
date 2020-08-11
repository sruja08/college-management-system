
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


$ROLL_NO = $_POST['ROLL_NO'];
$dept = $_POST['dept'];
$c_code = $_POST['c_code'];
$sem = $_POST['sem'];
$ia1 = $_POST['ia1'];
$ia2 = $_POST['ia2'];
$ia3 = $_POST['ia3'];
//$finalia = ($ia1 + $ia2 +$ia3)/3;



$sql1 = "INSERT INTO result1(ROLL_NO,dept,c_code,sem,ia1,ia2,ia3) VALUES ('$ROLL_NO','$dept','$c_code','$sem','$ia1','$ia2','$ia3')";


if(mysqli_query($conn,$sql1))
	{
	//echo '1';
	echo 'Result Uploaded!';
	?> <meta http-equiv="refresh" content="2;staff_homepage.html">
	<?php 
	}
else 
{
	//echo '2';
	echo 'Invalid Usn';
	?> <meta http-equiv="refresh" content="2;reg3.html">
	<?php 
}
	
?>
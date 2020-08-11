<?php
$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	echo 'Not connected to server';
}
else
{
	echo 'Connected to server'."<br>";
}
if(!mysqli_select_db($conn,'cms'))
{
	echo 'Database not connected';
}

$usn=$_POST['usn'];
$sname=$_POST['sname'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
//$dob=$_POST['dob'];
$gender=$_POST['gender'];

$s = "select * from student1 where usn = '$usn'";

$result = mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "student id already taken";
}else {
   $reg= "insert into student1 (usn,sname,branch,sem,gender) values('$usn' '$sname','$branch','$sem','$gender');";
   $result = mysqli_query($conn,$reg);
   echo 'Success';
	

}
 ?> 



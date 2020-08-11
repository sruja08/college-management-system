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
session_start();
$Roll_no = $_SESSION['USN'];


$amt_paid = $_POST['amt_paid'];
$mode= $_POST['mode'];
$id=$_POST['id'];
//echo $id;

$total="SELECT rema from fee_status where ROLL_NO='$Roll_no'";
$sql1 = "UPDATE fee_status set amt_paid = '$amt_paid' where ROLL_NO = '$Roll_no' AND id ='$id'";


if(mysqli_query($conn,$sql1))
	{
	//echo '1';
	//echo 'Registration Successful!';
	$sql2 = "UPDATE fee_status set  remaining=(remaining-amt_paid) where ROLL_NO = '$Roll_no' AND id ='$id'";
	if(mysqli_query($conn,$sql2))
	{
		$sql1 = "SELECT remaining FROM fee_status where ROLL_NO = '$Roll_no' AND id ='$id'";
		$ret = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_array($ret);
		if($row['remaining']==0){
			$sql11 = "UPDATE fee_status set status1 = 'PAID' where ROLL_NO = '$Roll_no' AND id ='$id'";
			if(mysqli_query($conn,$sql11))
			{
						//echo 'done status updated';

			}
		}

		echo 'Payment Successful!!';
	}



	}
else 
{
	//echo '2';
	echo 'Payment Unsuccessful!';
}

	
?><br><a href="fee.php">click</a><br>
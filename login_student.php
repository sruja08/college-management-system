  
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
$Roll_no = $_POST['Roll_no'];
$Password = ($_POST['Password']);
$Roll_no = stripslashes($Roll_no);
$Password = stripslashes($Password);

		$ret=mysqli_query( $conn, "SELECT * FROM stud WHERE Roll_no='$Roll_no' AND Password='$Password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);

		if(!$row ) {
			echo 'Login Failed !';
		}

		else {
			        session_start();

							$_SESSION['USN']=$Roll_no;    
   	 				header('Location: homepage.php');
					
			
			   
		}
		
?>


<?php

$conn = mysqli_connect('localhost', 'root','');

if(!$conn)
{
	echo 'Not connected to server';
}
else
{
	//echo 'Connected to server'."<br>";
}
if(!mysqli_select_db($conn,'cms'))
{
	echo 'Database not connected';
}
$Username = $_POST['Username'];
$Password = ($_POST['Password']);
$Username = stripslashes($Username);
$Password = stripslashes($Password);


		$ret=mysqli_query( $conn, "SELECT * FROM Login WHERE Username='$Username' AND Password='$Password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);

		if(!$row ) {
			echo 'Login Failed !';
			//header('Location: login_admin.html'.$_GET['previouspage']);
			?><meta http-equiv="refresh" content="2;login_admin.html"><?php
		}

		else {
	        echo 'Login Successful !'."<br>";
				
					echo 'Visitor'."<br>";
					$_SESSION['username']=$username;    
   	 				header('Location: admin_homepage.html'.$_GET['previouspage']);
					
			
			
		}
		
?>

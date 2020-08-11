<?php
session_start();
$Roll_no = $_SESSION['USN'];
$conn = mysqli_connect('localhost', 'root','');
mysqli_select_db($conn,'cms');
$sql1 = "SELECT * FROM fee_status where ROLL_NO = '$Roll_no' AND status1='NOT PAID'";
$ret = mysqli_query($conn, $sql1);
if(($row = mysqli_fetch_array($ret))>0){ ?>
  
  <form action="new3.php" method="post">
  
    Total Amt : <?php echo $row['tot_amt'] ?>  <br>
    Remaining Amt : <?php echo $row['remaining'] ?>  <br>
    Amt paid : <input type="text" name="amt_paid" > <br>
    Mode : <input type="text" name="mode"><br>
    <input type="hidden"  name="id" value="<?php echo $row['id']; ?>">

          

  <input type="submit" name="Submit">
</form>

<?php }else{
  echo "NO FEE PENDING";
}
?>						
<html>
<head>
  <title>student reg</title>
</head>
<body>
  

</body>
</html>
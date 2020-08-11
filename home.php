<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>PRO KABBADI LEAGUE</title>
  <style>

  table tr,td
  {
    color: white;
    background-color: #ffa31a;
    text-align: center;
    align-items: center;
    padding: 5px;
    margin: 3px solid;
    align-items: center;
    width: 500px;
    font-size: 1.2em;
  }
  .con
  {
    text-align: center;
    align:center;
  }
.c3
{
  height: 200px;
}
  </style>

</head>
<body data-spy="scroll" data-target=".navbar">
<div id="Header">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container">
    <button data-toggle="collapse" data-target="#Navbar" class="navbar-toggler">
    <span class="navbar-toggler-icon>"</span>
    </button>
 <a href="#" class="navbar-brand"><h3>Pro Kabbadi League</h3></a>
 <div class="collapse navbar-collapse" id="navbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item"><a href="#About" name="About" class="nav-link">Player</a></li>
     <li class="nav-item"><a href="#" class="nav-link">Team</a></li>
     <li class="nav-item"><a href="#" class="nav-link">Tickets</a></li>
     <li class="nav-item"><a href="#" class="nav-link">Stats</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Fixtures</a></li>
       <li class="nav-item"><a href="#" class="nav-link">Latest Updates</a></li>
   </ul>
 </div>
  </div>
</nav>
</div>
</div>
<br><br><br><br>

 <br>
<div class="container con">

  <div class="card bg-white">



<?php

$connection = mysqli_connect("localhost","root","","cms");


$entry_database = "faculty";

$query="SELECT * FROM $entry_database";
$query_run=mysqli_query($connection,$query);

while($row=mysqli_fetch_assoc($query_run)) {
  ?>

      <div class="card-title my-5">
        <h3 class="display-4 ml-5"><?php echo $row['name'];?></h3>
  <table class="table table-respnsive ml-4">
                  <tr>
                    <td  class="text-muted">branch</td>
                     <td>:</td>
                     <td><?php echo $row['branch'];?></td>
                  </tr>
                  <tr>
                    <td  class="text-muted">dob</td>
                     <td>:</td>
                     <td><?php echo $row['dob'];?></td>
                  </tr>
        <tr>
                    <td  class="text-muted">facid</td>
                     <td>:</td>
                     <td><?php echo $row['facid'];?></td>
                  </tr>
        <tr>
                    <td  class="text-muted">mobile no</td>
                     <td>:</td>
                     <td><?php echo $row['mno'];?></td>
                  </tr>
        <tr>
                    <td  class="text-muted">gender</td>
                     <td>:</td>
                     <td><?php echo $row['gender'];?></td>
                  </tr>
        <tr>
                    <td  class="text-muted">adress</td>
                     <td>:</td>
                     <td><?php echo $row['adress'];?></td>
                  </tr>
        <tr>
                    <td  class="text-muted">Qualification</td>
                     <td>:</td>
                     <td><?php echo $row['qualify'];?></td>
                  </tr>
                </table>
  <?php

}


?>

</div>
</div>
</div>
<?php
if(isset($_POST['search']))
   {
     header("Location:../index.php?error=Fillallthedetails");
   }
 ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

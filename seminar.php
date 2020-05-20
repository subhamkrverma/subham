<?php
session_start();
if($_SESSION['username']=="")
{
  echo "<script>location.href='start.php'</script>";
}
include("config.php");
?>

<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
  .main{
  background:url(15.jpg);
  }
  .sub1{
  height:70;
  background:transparent;
  border:2px solid black;
  
  
 }
  .sub2{
  height:70;
  background:transparent;
    border:2px solid black;
 }
 .sub3{
  height:70;
  background:transparent;
    border:2px solid black;
 }
 .sub4{
  height:150;
  background:url(2.jpg);
    border:1px solid black;
 }
 .sub5{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub6{
  height:150;
  background:transparent; 
  border:1px solid black;
 }
 .sub7{
  height:150;
  background:url(2.jpg);
    border:1px solid black;
 }
 .sub8{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub9{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub10{
  height:150;
  background:url(3.jpg);
    border:1px solid black;
 }
 .sub11{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub12{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub13{
  height:150;
  background:url(4.jpg);
    border:1px solid black;
 }
 .sub14{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub15{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub16{
  height:150;
  background:url(5.jpg);
    border:1px solid black;
 }
 .sub17{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub18{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub19{
  height:150;
  background:url(6.jpg);
    border:1px solid black;
 }
 .sub20{
  height:150;
  background:transparent;
    border:1px solid black;
 }
 .sub21{
  height:150;
  background:transparent;
    border:1px solid black;
 }
  
  </style>
  <body>
  
  <?php
$select="select * from seminar_details";
$res=mysqli_query($conn,$select);

?>
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">

     <div class="main"> 
        <div class="row">
    <div class="col-md-4 sub1"><center><h3>Seminar hall</h3></center></div>
    <div class="col-md-4 sub2"><center><h3>Building name</h3></center></div>
    <div class="col-md-4 sub3"><center><h3>Room no</h3></center></div>
   
     
    </div>
   

            <?php
            while($row=mysqli_fetch_array($res))
            {
            ?>


                   <div class="row">
    <div class="col-md-4 sub4"></div>
    <div class="col-md-4 sub5"><center><h3><?php echo $row['Building name']; ?> </h3></center></div>
    <div class="col-md-4 sub6"><center><h3><?php echo $row['Room no']; ?></h3></center></div>

    
    
    </div>

   
            <?php
             }
             ?>
      

</div>
</div>






<script>
$(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 10
    });
    
} );
</script>
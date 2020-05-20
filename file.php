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

<style>
.main{
width:1200px;
height:800px;


float:left;
}
.sub1{
width:1200px;
height:800px;


float:left;
}
.sub11{
width:1200px;
height:400px;

float:left;

}
.sub12{
width:1200px;
height:50px;

float:left;

}

.sub11 a{
	
	text-decoration:none;
}
.bt1{
	
	background:gray;
	color:#fff;
	border-radius:20px;
	margin:20px 0px 0px 20px;
}
.bt1 h1{
	color:#fff;

}

.sub12 a{

	text-decoration:none;
}
.bt2{
	
	background:gray;
	color:#fff;
	border-radius:20px;
	margin:20px 0px 0px 20px;
}
.bt2 h1{
	color:#fff;
}
.bt3{
	
	background:gray;
	color:#fff;
	border-radius:20px;
	float: right;
	margin:20px 0px 0px 20px;

}

</style>
</head>
<body style="background: url(sem.jpg);">

<div class="main"><!--main div open-->

<div class="sub1">
	<a href="logout.php"><button class="bt3"><h1>LOGOUT</h1></button></a>
<div class="sub11">
<a href="seminar.php"><button class="bt1"><h1>SEMINAR HALL DETAIL</h1></button></a>
<p>
<h3>

</div>
<div class="sub12">
<a href="date.php"><button class="bt1"><h1>SEMINAR HALL AVAILIBILITY</h1></button></a>

</div>
</div>
</div>

<!--main div close-->




</body>
</html>


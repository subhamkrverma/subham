<?php
session_start();
include("config.php");
     ?>
<html>
<head>
<style>
.sub1{
width:400px;
height:700px;
background:seminar.jpg;
float:left;
}


.sub2{
width:600px;
height:700px;
background:seminarhall.jpg;
float:right;

}
</style>
<div class="main"><!--main div open-->
  <h3 class="text-center text-white pt-5"><B><I>ADITYA ENGINEERING COLLEGES</B><I></h3>  
<h3 class="text-center text-white pt-5"><B>Seminar Hall Allocation</B></h3>
<div class="sub1"> <html>
<head>
<title>Login Form </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" style.css">
<body>
	<div id="login">
    
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-12">
                <div class="login-box col-md-6 ">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info"><font color="black"><B>Admin Login</B></font></h3>
                        <div class="form-group">
                            <label for="username" class="text-info"><font color="black">Username:</font></label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info"><font color="black">Password:</font></label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</head>
</html></div>
<?php
if(isset($_POST['submit']))
{
    
     {
         $user=$_POST['username'];
         $pass=$_POST['password'];
        $select="select *from seminar where username='$user'and password='$pass'";
        $res=mysqli_query($conn,$select);
        $rc=mysqli_num_rows($res);
            if($rc==1)
            {
                $_SESSION['username']=$user;

                echo"<script> alert('login success'); </script>";
                
                echo"<script>location.href='file.php'</script>";
            }
            else
            { 
                echo"<script> alert('invalid login'); </script>";
                echo"<script>location.href='start.php'</script>";

            }

     }

 }

?>

<div class="sub2">

<?php
 $server="localhost";
     $username="root";
     $password="";
     $dbname="project";
     $conn=mysqli_connect($server,$username,$password,$dbname);
     ?>
<html>
<head>
<title>Login Form </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" style.css">
<body>
	<div id="login">
   
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-12">
                <div class="login-box col-md-6 ">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info"><font color="black"><B>Faculty Login</B></font></h3>
                        <div class="form-group">
                            <label for="username" class="text-info"><font color="black">Username:</font></label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info"><font color="black">Password:</font></label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit_faculty" class="btn btn-info btn-md" value="Login">
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</head>
</html>
</div>

</div>
</head>
</html>
<?php
if(isset($_POST['submit_faculty']))
{
    
     {
         $user=$_POST['username'];
         $pass=$_POST['password'];
        $select="select * from seminar1 where username='".$user."'and password='".$pass."'";
        $res=mysqli_query($conn,$select);
        $rc=mysqli_num_rows($res);
            if($rc==1)
            {
                $_SESSION['username']=$user;

                echo"<script> alert('login success'); </script>";
                
                echo"<script>location.href='file.php'</script>";
            }
            else
            { 
                echo"<script> alert('invalid login'); </script>";
                echo"<script>location.href='start.php'</script>";

            }

     }

 }

?>
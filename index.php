 <?php
session_start();
?>
<?php
  $server="localhost";
  $username="root";
  $password="";
  $dbname="seminarallocation";
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
    <h3 class="text-center text-white pt-5">Seminar Hall Allocation</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-12">
                <div class="login-box col-md-6 ">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info"><font color="black">Login</font></h3>
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
</html>

 <?php
if(isset($_POST['submit']))
{
  
  

   $user=$_POST['username'];
   $pass=$_POST['password'];
   $select="select *from faculty where faculty_id='".$user."' and password='".$pass."'";
   $res=mysqli_query($conn,$select);
   $rc=mysqli_num_rows($res);
  if($rc==1)
  { 
    $_SESSION['username']=$user;
    echo "<script> alert(' Login Success'); </script>";
         echo "<script>location.href='dashboard.php'</script>";
  }
  else
  {   echo "<script> alert('Invalid login'); </script>";
        echo "<script>location.href='index.php'</script>";
  }


}
?>
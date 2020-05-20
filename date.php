
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Website CSS style -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
		<style>
		/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body, html{
     height: 100%;
 
 	font-family: 'Oxygen', sans-serif;
	
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: transparent;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 550px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}






















</style>
	</head>
	<body>
	<img src="semi.jpg" style="position:fixed;width:100%;z-index:-55;top:-100px">
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">BOOKING DATE</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">FROM</label>
							<div class="cols-sm-10">
							
							
							
							<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-calendar-check" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="fromdate" id="date"  placeholder="Enter date"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">TO</label>
							<div class="cols-sm-10">
							
							
							
							<div class="input-group">
									<span class="input-group-addon"><i class="fas fa-calendar-check" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="todate" id="date"  placeholder="Enter date"/>
								</div>
							</div>
						</div>
						
						
						
						<div class="form-group">
							<input type="submit" class="btn btn-danger btn-lg btn-block login-button" value="done" name="done">
						</div>		
					</form>
				</div>
			</div>
		</div>	
	</body>
</html>
		



 <table class="table bg-primary table-striped table-bordered" style="color:#000">
            <thead style="background: #55a;color: #fff">
               <tr>
                  <th><center><b>S.No</b></center></th>
                  <th><center><b>Seminarhall Name</b></center></th>
                  <!-- <th><center>/b>Picture</<b><center></th> -->
                    
                     <th><center><b>Date On</b></center></th>
                     <th><center><b>Comments</b></center></th>
                     <th><center><b>Details</b></center></th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                  if (isset($_POST['done'])) {
					  
					  include "config.php";
                     $x=1;
                     $_SESSION['start_date'] = $_POST['fromdate'];
                     $_SESSION['end_date'] = $_POST['todate'];


                     $date1=date_create($_SESSION['start_date']);
                     $date2=date_create($_SESSION['end_date']);
                     $diff=date_diff($date1,$date2);
                     $days =  $diff->format("%a");
                     $current_date = $_SESSION['start_date'];
                  
                        $query3 = "SELECT * FROM `seminarhall`";
                     
                     $result3 = mysqli_query($conn, $query3);
                     while ($fetch3 = mysqli_fetch_array($result3)) {
                        for ($i=0; $i <=$days ; $i++) { 
                           if ($i==0) {
                              $current_date = $_POST['fromdate'];
                           }
                           else{
                              $date = strtotime("+1 day", strtotime($current_date));
                              $current_date = date("Y-m-d", $date);
                           }
                           $query = "SELECT * FROM `bookings` where status='1' and seminar_id='".$fetch3['id']."' and (start_date='$current_date' or end_date='$current_date')";
                           $result = mysqli_query($conn, $query);
                           $count = mysqli_num_rows($result);
                           if ($count>0) {
							   continue;
                              $fetch = mysqli_fetch_array($result);
                              ?>
                              <tr>
                                 <td><?php echo $x; ?></td>
                                 <td><?php echo $fetch3['seminar_name'] ?></td>
                                 <!-- <td><i class="glyphicon glyphicon-user" ></i></td> -->
                              
                                 <td> <?php echo $current_date ?></td>
                                 <td>
                                    <b class="text-danger">Not Avaliable</b>
                                 </td>
                                 <td>
                                    <b class="text-danger">
                                       <a target="_blank" href="?sid=<?php echo $fetch['seminar_id'] ?>">
                                          <button class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                       </a>
                                    </b>
                                 </td>
                              </tr>
                              <?php
                              $x++;
                           }
                           else{
                              ?> 

                              <tr>
                                 <td><?php echo $x; ?></td>
                                 <td><?php echo $fetch3['seminar_name'] ?></td>

                                 <td> <?php echo $current_date ?></td>
                                 <td>
                                    <b class="text-success">Avaliable</b>
                                 </td>
                                 <td>
                                    <b class="text-danger">
                                       <a  target="_blank" href="details.php?sid=<?php echo $fetch3['id'] ?>">
                                          <button class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                       </a>
                                    </b>
                                 </td>
                              </tr>
                              <?php
                              $x++;
                           }
                        }
                     }

                  }

                  ?>
               </tbody>
            </table>
		
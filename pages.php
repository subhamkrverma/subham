<?php
@$page=$_GET['p'];

switch($page)
{
	

	case 'faculty':include('includes/faculty_id.php');break;
	
	case 'delete':include('includes/delete.php');break;
					
	
	
	default:include('includes/faculty_id.php');
}


?>
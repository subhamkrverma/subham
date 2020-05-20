<?php

if($_GET['id']!="")
{
	

	
	
	$del= "DELETE FROM faculty where faculty_id='".$_GET['id']."'";
	
	$exe=mysqli_query($conn,$del);
	
	
	
	if($exe)
	{
		echo "<script>alert('deleted');location.href='?p=faculty'</script>";
	}
}


?>
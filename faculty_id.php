<?php
$select="select *from seminar1";
$res=mysqli_query($conn,$select);

?>
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
			<th>UserName</th>
                <th>Password</th>
				 <th>Action</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($res))
            {
            ?>

            <tr>
                <td><?php echo $row['username']; ?> </td>
                <td><?php echo $row['password']; ?> </td>
				<td><a href="?p=delete&id=<?php echo $row['password']; ?>"><button>Deleted</button></a></td>
                
               
               
            </tr>
            <?php
             }
             ?>
      
    </tbody>        
</table>
</div>






<script>
$(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 10
    });
    
} );
</script>
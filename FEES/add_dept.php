  <META HTTP-EQUIV="REFRESH" CONTENT="5">


        
        
        
         <a href=javascript:popcontact('adding_dept.php') style="color:#fff; text-decoration:blink">        											<button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Add A New Department</button></a>


<?php 
if(isset($_GET['delete'])){
	$gh=$dbcon->query("delete from classes12 where id='".$_GET['delete']."' ") or die(mysqli_error($dbcon));
	$message='<div class="alert alert-danger">
  <strong>Message:</strong> Item Successfully Deleted
</div>';
}
	
$dn=$dbcon->query("SELECT * FROM classes12 order by class   ") or die(mysqli_error($dbcon));
$i=1;
?>
       <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Department</th>
        <th>Fees for Cameroonians</th>
        <th>Fees for Foreigners</th>
         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bun=$dn->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bun['amountpaid']; ?></td>  
                                            <td><?php echo $bun['fees']; ?></td>  
                                            <td><?php echo $bun['depf']; ?></td>  
                                              <td><a href=javascript:popcontact('editing_dept.php?id=<?php echo $bun['id']; ?>') style="color:#06F; " onclick="return confirm('Are you sure you wish to update this Department')"><strong>Update</strong></a>| <a href="?dept&link=Adding/Changing Department&delete=<?php echo $bun['id']; ?>" style="font-weight:bold; color:#f00" onclick="return confirm('Are you sure you wish to delete <?php echo $bun['amountpaid']; ?>')">Delete</a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
    </table>
   


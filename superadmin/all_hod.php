<?php
 $id;
   $dm=$conn->query("SELECT * FROM hods,special   ") or die(mysqli_error($conn));
while($bum=$dm->fetch_assoc()){
	 $dept_name=$bum['name'];
}

?>



<h3>All Head of Departments </h3>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		
		 $d=$conn->query("SELECT * FROM hods   ") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                <th> Name</th>
                                <th>Department</th>
                     
                                    <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php   $dm=$con->query("SELECT * FROM users where id='".$bu['user_id']."'  ") or die(mysqli_error($con));
						while($bum=$dm->fetch_assoc()){
							 echo $bum['full_name'];
						} ?>
             </td>
             <td><?php   $dm=$conn->query("SELECT * FROM special where id='".$bu['dept_id']."'  ") or die(mysqli_error($conn));
						while($bum=$dm->fetch_assoc()){
							 echo $bum['prog_name'];
						} ?></td>
              <td><a href="?all_hod&id=<?php  echo $bu['id']; ?>"> <button  class="btn btn-danger" onClick="return confirm('Are you Sure About that')" >Remove from this Office</button></a></td>       
                                            
                                            
                                            </td>
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
     
     
											                               <?php
if(isset($_GET['id'])){
			$id=$_GET['id'];
		 $d=$conn->query("DELETE FROM hods where id='$id' ") or die(mysqli_error($conn));
		 echo "<script>alert('Delete Successfull')</script>";
		 echo '<meta http-equiv="Refresh" content="0; url=?all_hod ">';
}

?>
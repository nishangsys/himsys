
  
  <div class="row">
        <div class="col-sm-10">
          <div class="well">
		 <?php $dd=$con->query("SELECT * FROM requisitions  where status>=2 GROUP BY ids order by id DESC ") or die(mysqli_error($con));
$i=1;
?>
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Name</th>
        <th>Requisition Date</th>
                <th>Department</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    
      <?php while($bus=$dd->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Moccasin">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bus['agent']; ?></td>
                                           
                                            
                                           <td><?php echo $bus['date']; ?></td>
                                           <td><?php echo $bus['section']; ?></td>
                                           <td>
                                            <a href="?prepare_it=<?php echo $bus['ids']; ?>&uname=<?php echo $bus['agent']; ?>&date=<?php echo $bus['date']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-success"  > <i class="icon-key icon-white"></i> Prepare Requisition</button>
                                           
                                           </td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
                            </div>
          <?php 
		  
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$id=$_GET['id'];
	$dept=$_GET['dept'];
	 $uname=$_GET['uname'];
	 
	 $del=$con->query("DELETE FROM requisitions WHERE id='$code' ") or die(mysqli_error($con));
	 echo '<meta http-equiv="Refresh" content="0; url=?prepare&id='.$id.'&uname='.$uname.'&dept='.$dept.'">';
	 
		  }
		  
		  
		  if(isset($_GET['ok'])){
	$idss=$_GET['id'];
		$dept=$_GET['dept'];
	 $uname=$_GET['uname'];
	
	 $fj=$con->query("UPDATE requisitions set status='1' where ids='$idss'  ") or die(mysqli_error($con));
	 echo "<script>alert('Requisition Finally Submittd for Processing')</script>";
	  echo '<meta http-equiv="Refresh" content="0; url=?prepare&id='.$_GET['id'].'&uname='.$uname.'&dept='.$dept.'">';
		  }
; ?>
            </div>
          </div>
     </div>
          </div>
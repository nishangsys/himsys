 <?php  $d=$dbcon->query("SELECT * from years where id='".$_GET['from']."' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $from=$df['year_name'];
		   $froms=$df['id'];
	   }
	   $tos=$_GET['from']+1;
$d=$dbcon->query("SELECT * from years where id='".$tos."' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $to=$df['year_name'];
	   }
	   
	   $d=$dbcon->query("SELECT * from levels  where next='1' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $level_concern=$df['id'];
		   $new_level=$level_concern+1;
	   }
	   
	      $d=$dbcon->query("SELECT * from special  where id='".$_GET['dept_id']."' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $dept_name=$df['prog_name'];
		   $dept_id=$df['id'];
	   }	
	   
	   
	      $d=$dbcon->query("SELECT * from promotions  where  froms='$froms' and tos='$tos' and dept_id='$dept_id' ") or die(mysqli_error($dbcon));
		  $counts=$d->num_rows;
		  	if($counts>0){
			}
			else {
				$d=$dbcon->query("INSERT INTO promotions  SET  froms='$froms',tos='$tos',dept_id='$dept_id' ") or die(mysqli_error($dbcon));
	  
	   }			   
	   
	   ?>
<div class="alert alert-danger">
  <strong>Promoting <span style="color:#000"><?php  echo $dept_name; ?>  Level 200 </span> Students of <span style="color:#000"><?php echo $from;  ?></span> Academic Year to <span style="color:#000"> Level 300 of <?php echo $to; ?></span> Academic Year </strong> 
</div>



  
	<table class="table table-condensed table-hover table-striped bootgrid-table">
		<thead>
		  <tr>
          <th>S/N</th>			
			<th>Name</th>
			<th>Matricule</th>
            <th>Status</th>
					
		  </tr>
		</thead>
		<tbody>
		 <?php
		 	 $ac=$dbcon->query("SELECT * FROM  students  WHERE year_id='$froms' and dept_id='$dept_id' and level_id='$level_concern' ") or die(mysqli_error($dbcon));
	$i=1;
		 while($rows=$ac->fetch_assoc()){
			
		 ?>
			  <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $rows['fname']; ?></td>
              <td><?php echo $rows['matricule']; ?></td>
              	  
			<td><?php  $acm=$dbcon->query("SELECT * FROM students where matricule='".$rows['matricule']."'   AND level_id='".$new_level."' AND year_id='$tos'") or die(mysqli_error($dbcon));
	     $hmm=$acm->num_rows;
		 	if($hmm>0){
				echo "already Promoted";
			}
			else {
					 $ok=$dbcon->query("INSERT INTO students SET level_id='$new_level',year_id='$tos',dept_id='$dept_id',fname='".$rows['fname']."', matricule='".$rows['matricule']."',sex='".$rows['sex']."'  ") or die(mysqli_error($dbcon));
			} ?></td>			  
                 
			  </tr>
		<?php
		}
		?>
		</tbody>
	</table>		  


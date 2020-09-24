<div class="alert alert-info">
<?php $ayear=$_POST['ayear']; ?>
  <strong style="font-size:24px">Generate Ca Marks for <?php echo $ayear; ?> Resits Results </strong> 
</div>

 <table class="table table-bordered">
    <thead>
      <tr>
      <th>s/n</th>
        <th>Name</th>
        <th>Matricule</th>
        <th>Course Code</th>
        <th>Resits Marks</th>
      </tr>
    </thead>
    <tbody>
      <?php
		echo $ayear;		 
	   $ds=$conn->query("SELECT * from  my_marks where  ayear='$ayear' and sem='3' and ca='0' and exam!=''  ") or die(mysqli_error($conn));
	     
	   $i=1;
while($bus=$ds->fetch_assoc()){
	?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php
	 	 
	   $aa=$conn->query("SELECT * from courses where  matricule='".$bus['matric']."' LIMIT 1  ") or die(mysqli_error($conn));
	   while($bb=$aa->fetch_assoc()){
		   echo $bb['fname'];
	   }
	?></td>
        <td><?php echo $bus['matric']; ?></td>
        <td><?php echo $bus['code']; ?></td>
         <td style="color:#06C; font-weight:bold"><?php echo $bus['exam']; ?></td>
         
           <td style="color:#900"><?php
	 	 
	   $aa=$conn->query("SELECT ca from  my_marks where  matric='".$bus['matric']."' and code='".$bus['code']."' and  sem!='3' AND ca!='' order by roll DESC LIMIT 1  ") or die(mysqli_error($conn));
	   while($bb=$aa->fetch_assoc()){
		   echo $ca=$bb['ca'];
	   }
	   
	    $aas=$conn->query("update  my_marks set ca='".$ca."' where  matric='".$bus['matric']."' and code='".$bus['code']."' and  sem='3' AND ca!='' AND ayear='$ayear'  ") or die(mysqli_error($conn));
	   while($bb=$aa->fetch_assoc()){
		   echo $bb['ca'];
	   }
	?></td>
      </tr>
      <tr>
       <?php } ?>
    </tbody>
  </table>

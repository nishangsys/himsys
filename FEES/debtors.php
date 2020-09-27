<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = (((parseInt(form.feeamt.value)+parseInt(form.reg.value))-parseInt(form.part.value)-parseInt(form.disc.value)));

}
</script>
  
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form">
    <div class="form-group">
    <!--
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" >
      </div>
    </div>
    
  ------->  
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Matricule:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Matricule" name="matricule" value="<?php echo $ad['matricule']; ?>">
      </div>
    </div>
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" >
  <option></option>
   <?php
$an= $con ->query("SELECT * FROM  levels") or die(mysqli_error( $con ));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['levels']; ?></option>
    <?php } ?>
  </select>
</div>
</div>
      
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Department:</label>
      <div class="col-sm-10">
  <select class="form-control" name="class" style="width:300px" required>
<?php
$an= $con ->query("SELECT * FROM special order by prog_name") or die(mysqli_error( $con ));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['prog_name']; ?></option>
    <?php } ?>
    
  </select>
</div>
</div>
      
    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year::</label>
      <div class="col-sm-10">
  <select class="form-control" name="ayear" style="width:300px" required>
  		<option></option>
<?php
$an= $con ->query("SELECT * FROM years,students where years.id=students.year_id GROUP BY students.year_id") or die(mysqli_error( $con ));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['year_id']; ?>"><?php echo $rows['year_name']; ?></option>
    <?php } ?>

 
  </select>
</div>
</div>

 
 
 
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $ad['balance']; ?>" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
    
   
        <input type="hidden" class="form-control" id="pwd" name="reg"  value="0" required="required"   >
     
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Sholarship :</label>
      <div class="col-sm-10">
    
        <input type="text" class="form-control" id="pwd" name="disc" value="0" onBlur="doCalc(this.form)" >
     
      </div>
    </div>
    
       
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Owed:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance"  required="required" >
      </div>
    </div>
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php
 if(isset($_POST['doLogin'])){
	 $name=$_POST['first_nam'];
	 $matricule=$_POST['matricule'];
	 $level=$_POST['level'];
	 $dept_id=$_POST['class'];
	 $ayear=$_POST['ayear'];
	 $feeamt=$_POST['feeamt'];
	 $paid=$_POST['part'];
	 $scholar=$_POST['disc'];
	 $date=date('d-m-Y G:i');
	 $owed=$feeamt-($paid+$scholar);
	  $query551=$conn->query("SELECT * FROM fee_paymts  WHERE matric='$matricule' and yearid='$ayear' " ) or die(mysqli_error($conn));
	  $counts=$query551->num_rows;
		
	 
	 if($owed<1){
		 
echo "<script>alert('This person is not a Debtor!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?debtors">';	
	 }
	 else if($counts>0){
		 
echo "<script>alert('This records already Exists'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?debtors">';
	 }
	 else {
		
		
		

 $query55=$conn->query("insert into fee_paymts  set  
matric='$matricule',scholar='$scholar',program_id='$dept_id',
fee_amt='$paid',expected_amount='$feeamt',balance='$owed',created_at='$date' ,yearid='$ayear',level_id='$level' " )or die(mysqli_error($conn));

	 
echo "<script>alert('Record Success'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?debtors">';
	 

 }


 }


?>
<h2>Last Record Transactions</h2>


	<table class="table table-condensed table-hover table-striped bootgrid-table">
		<thead>
		  <tr>
          <th>S/N</th>			
			<th>Name</th>
			<th>Matricule</th>
            <th>Academic Year </th>
            
            <th>Fee Amount</th>
            <th>Amount Paid</th>
            <th>Amount Owedd </th>
					
		  </tr>
		</thead>
		<tbody>
		 <?php
		 	 $ac=$dbcon->query("SELECT * FROM  years,students,fee_paymts   WHERE students.matricule=fee_paymts.matric AND years.id=students.year_id  order by fee_paymts.id DESC LIMIT 10 ") or die(mysqli_error($dbcon));
	$i=1;
		 while($rows=$ac->fetch_assoc()){
			
		 ?>
			  <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $rows['fname']; ?></td>
              <td><?php echo $rows['matricule']; ?></td>
              <td><?php echo $rows['year_name']; ?></td>
              <td><?php echo $rows['expected_amount']; ?></td>
               <td><?php echo $rows['fee_amt']; ?></td>
              <td><?php echo $rows['balance']; ?></td>
            
			  </tr>
		<?php
		}
		?>
		</tbody>
	</table>		  



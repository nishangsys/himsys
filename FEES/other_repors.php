<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  
  <div class="col-sm-12">
  <div class="alert alert-warning">

  <strong>Info!</strong> View Our Records
</div> 

      <div class="well">
 <form class="form-horizontal" action="?my_records" method="post" name="form">
 
 
 <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Sector:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="sex" >
       <option></option>
       <?php
	$result= $con->query("select * from income_classes order by name" ) or die (mysql_error());
					
								while ($row=$result->fetch_assoc()){
	?>
    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
   <?php } ?>
  </select>
      </div>
    </div>
      
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="ok" >Submit</button> |    <button type="submit" class="btn btn-success" name="do" >Excel Download</button> |    <a href="?all_records"><button type="submit" class="btn btn-warning" name="do" >View All</button></a>
      </div>
    </div>
  </form>
    
</div></div>




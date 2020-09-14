<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>
  
  <div class="col-sm-12">
  
  <div class="alert alert-info">
  <strong>Info!</strong> Viewing Fees Situation by Department
</div> 

      <div class="well">
 <form class="form-horizontal" action="a4.php?ayer=<?php echo $ayear; ?>" method="post" name="form" target="new">
  
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Choose a Department:</label>
      <div class="col-sm-10">
  <select class="form-control" name="level" style="width:300px" required>
<?php
$an=$dbcon->query("SELECT * FROM historic where year_id='$ayear' GROUP BY class order by class") or die(mysqli_error($dbcon));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['amountpaid']; ?>"><?php echo $rows['amountpaid']; ?></option>
    <?php } ?>
    
  </select>
</div>
</div>
      
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>




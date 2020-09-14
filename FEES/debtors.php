<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = (((parseInt(form.feeamt.value)+parseInt(form.reg.value))-parseInt(form.part.value)));

}
</script>
  
  
  <div class="col-sm-12">
      <div class="well">
 <form class="form-horizontal" action="debts.php" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name" value="<?php echo $ad['student_name']; ?>" required="required">
      </div>
    </div>
    
    
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
   
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
    <option value="500">500</option>
    <option value="600">600</option>
    <option value="700">700</option>
  </select>
</div>
</div>
      
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Department:</label>
      <div class="col-sm-10">
  <select class="form-control" name="class" style="width:300px" required>
<?php
$an= $con ->query("SELECT * FROM special order by certi") or die(mysqli_error( $con ));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['prog_name']; ?>"><?php echo $rows['prog_name']; ?></option>
    <?php } ?>
    
  </select>
</div>
</div>
      
    
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year::</label>
      <div class="col-sm-10">
  <select class="form-control" name="ayear" style="width:300px" required>

    <option value="2013/2014"> 2013/2014</option>
        <option value="2015/2016"> 2015/2016</option> 
                <option value="2016/2017"> 2016/2017</option> 
           <option value="2017/2018"> 2017/2018</option>
           <option value="2018/2019"> 2018/2019</option>
           <option value="2020/2021"> 2020/2021</option> 


 
  </select>
</div>
</div>

 
 
 
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $ad['balance']; ?>" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Registration</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="reg"  value="0" required="required"   >
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" onBlur="doCalc(this.form)" required="required" >
      </div>
    </div>
    
	   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Discount:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="disc" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>
 
   
    
    
       
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Owed:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance"  required="required" >
      </div>
    </div>
    
    
    
    <input type="hidden" name="as" value="<?php echo $ad['id'] ?>" />
    
      <input type="hidden" name="ass" value="<?php echo $ass ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>




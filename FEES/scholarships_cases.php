
<script type="text/javascript">
function doCalc(form) {
		 

  form.balance.value = ((parseInt(form.feeamt.value)-(parseInt(form.schamt.value))-parseInt(form.part.value)));

}
</script>

<script src="jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>

  <?php
 
	   $a=mysql_query("SELECT * from classes WHERE class='".$_GET['yprogram']."' GROUP BY class ") or die(mysql_error());
	 while($ad=mysql_fetch_assoc($a)){
 
	 $fee=$ad['fees'];
  }
  
 
  
  ?>
  
  <div class="col-sm-12">
  <h3 style="background:#f00; color:#FFF; padding:5px 5px">Receiving Scholarships From <?php echo $_GET['ydept']; ?></h3>
      <div class="well">
 <form class="form-horizontal" action="actions.php" method="post" name="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%" value="<?php echo $_GET['ydept'];?>" /><span id="user-availability-status"></span>    

     
      </div>
    </div>
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="matric" value="" required />
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $_GET['yprogram'];?>" readonly />
      </div>
    </div>
    
    
    
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
  <select class="form-control" name="lev" style="width:300px">
    <option value="<?php echo $_GET['ylevel'];?>"><?php echo $_GET['ylevel'];?></option>

    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
        <option value="500">500</option>

  </select>
</div>
</div>
      
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $current; ?>" readonly />
      </div>
    </div>
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php echo $fee; ?>" onBlur="doCalc(this.form)"  readonly />
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Scholarship Amount:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="schamt"  onBlur="doCalc(this.form)" required="required" value="0" />
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fee Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" />
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Registration Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="reg" value="0" readonly="readonly" />
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance Due:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif" />
      </div>
    </div>
    
    
    
    <input type="hidden" name="as" value="<?php echo $as ?>" />
    
      <input type="hidden" name="scholar" value="<?php echo $name ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin">Submit</button>
      </div>
    </div>
  </form>
    
</div></div>




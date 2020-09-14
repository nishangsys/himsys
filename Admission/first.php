
<form class="form-horizontal" role="form" action="" method="post" style="background:#fff; ">
 
 
    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Full Names:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Full Names" name="names" required="required"  >
    </div>
  </div>
  
  
 
    <div class="form-group">
    <label class="control-label col-sm-2" for="email" required> DEPT OF CHOICE One:</label>
    <div class="col-sm-10">
   
  <select class="form-control" name="school" id="sel1">
       <option></option>

	<?php
	
	$f1=$con->query("SELECT * FROM special GROUP BY certi order by certi");
	while($one=$f1->fetch_assoc()){
    ?>
    
      <option value="<?php echo $one['prog_name']; ?>" required="required"><?php echo $one['prog_name']; ?> (<?php echo $one['gh']; ?>)</option>
     
     <?php } ?> 
  </select>
</div>
  </div>
  
  
  
  
 <div class="form-group">
      <label class="control-label col-sm-2" for="email">
     
    </label>
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="two">Next Step</button>
   </div>

	</div>
  </form>

<?php
  if(isset($_POST['two'])){
	
	$_POST = array_map("ucwords", $_POST);
	
	  
	$date=$_POST['day'];
	$month=$_POST['month'];
	$dyear=$_POST['year'];
	$dob="$date/"."$month/"."$dyear";


	$padrees=$_POST['padrees'];
	$gender=$_POST['gender'];
	$pob=$_POST['pob'];
	$tel=$_POST['tel'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	
	 $first=$_POST['school'];
	 $SCHOOL2=$_POST['school2'];
	  $level=$_POST['level'];
	  
	
	$name=$_POST['names'];
	$nation=$_POST['cob'];
	$nationality=$_POST['nationality'];
	  $year=date('Y');	
	  
	 $cv=$con->query("SELECT * FROM gen_info where names='$name' ") or die(mysqli_error($con));
	  if(mysqli_num_rows($cv)>0){
		  echo "<script>alert('$name with code $code already exists')</script>";
	  }
	   else {
			 $FG=$con->query("INSERT INTO gen_info SET matric='$code',choiceone='$first',names='$name',date='$date',month='$month',year='$year',fax='man'") or die(mysqli_error($con));
	 
	  echo "<script>alert('Step successful thank you')</script>";
	   
	  echo '<meta http-equiv="Refresh" content="0; url=?first">';
	   }
	   
  }
  
 
  ?>
  
  
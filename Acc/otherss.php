<?php
//include '../includes/dbc.php';

$bb =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$bb->fetch_array()){
 
 $active=$userRow['full_name'];
 $level=$userRow['banned'];
 
 }
 $y=date('Y');

	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}


	 
	
	?>
 
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />


<script type="text/javascript">
function doCalc(form) {

  form.balance.value = ((parseInt(form.feeamt.value)-parseInt(form.part.value)));

}
</script>

<script src="../Fees/jquery-2.1.1.min.js" type="text/javascript"></script>
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
$am=$con->query("SELECT * FROM modes") or die(mysqli_error($con));

 while($us=$am->fetch_array()){ 

 ?>
 <a href="?otherss&link=New Students Payments&mo=<?php echo $us['name']; ?>" style="color:#000; border:1px solid#00; padding:5px 50px; width:400px; color:#F00; font-weight:bold; font-family:'Arial Black', Gadget, sans-serif">
   <?php echo $us['name']; ?> TRANSACTION
         
    </a>
 
 <?php } ?>
  
  
  <div style="clear:both"></div>
  <div class="col-sm-12">
  <?PHP
 /////check if transaction type is checked and open the form
 if(isset($_GET['mo'])){ 
  ?>
  
  
  
  
      <div class="well">
 <form class="form-horizontal" action="" method="post" name="form" style="line-height:normal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      
  <input name="username" type="text" value="<?php echo $rows['fname'];; ?>" id="username" class="demoInputBox" onBlur="checkAvailability()" style="width:65%; border:2px solid#f00" required="required"><span id="user-availability-status" style="color:#f00" > </span>    

     
      </div>
    </div>
    
     
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Bank/Method:</label>
      <div class="col-sm-10">
       <select  class="form-control" required id="sel1" name="bank" >
     <option></option>
       
        <option value="CASH"  >CASH </option>  
       
        <option value="<?php echo $bank; ?>"  ><?php echo $bank; ?> </option>  
        <?php
							
								$result = $con->query("SELECT * FROM our_accounts") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['name']; ?>"  ><?php echo $bu['name']; ?> </option>
    <?php } ?> 
        
      </select>
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
     <select  class="form-control" required id="sel1" name="dept" >
     <option></option>
       
       
     
                              
        <option value="I.C.E.L.P"  > I.C.E.L.P </option>
     <option value="ICAN"  > ICAN </option>
    
        
      </select>
      </div>
    </div>
    
   
 
   
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Fees:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="feeamt" value="<?php
		 echo $fees+$bal;
			 
		
						 
				  ?>" onBlur="doCalc(this.form)" required="required"  >
      </div>
    </div>
  
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"> Fee Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="part" value="0" onBlur="doCalc(this.form)" >
      </div>
    </div>
    
   
     
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Balance:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="balance" readonly="readonly" required="required" style="background:#FFC; color:#000; font-family:'Arial Black', Gadget, sans-serif">
      </div>
    </div>
    <table style="margin-left:120px">
    <tr><td>Day Paid</td><td> 
        <select class="form-control" id="sel1" name="day" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=1;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
      </td><td>Month Paid</td><td><select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
      <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				
  </select></td><td>Year Paid</td><td><select class="form-control" id="sel1" name="year" onBlur="doCalc(this.form)" required>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2016;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td></tr>
    </table>
    
   
    
    <input type="hidden" name="matric" value="<?php echo $rows['matricule'];
	 ?>" />
    
      <input type="hidden" name="disc" value="0" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" class="btn btn-danger">Save</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php }?>

<?php

$err = array();
if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];

 $first_name=$_POST['username'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];

$fname="$first_name $middle_name $last_name";

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['year_id'];
$dbirth=$_POST['month'];

$matric=$_POST['matric'];

$feeamt=$_POST['feeamt'];
$part=$_POST['part'];

echo $all=$feeamt+$reg;
// $bbm=($_POST['feeamt']-($_POST['part']+$_POST['reg']+$_POST['disc']));
 $bbm=$all-($_POST['part']+$_POST['disc']);


$l=$_POST['dept'];

$as=$_POST['as'];
$paid=$_POST['part'];
$class1=$_POST['dept'];


$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
$bank=$_POST['bank'];;
$debts=$_POST['debts'];
$mmm=$_GET['mo'];
	if($mmm=='CASH'){
		$r='CASH';
		$cash=$paid;
		$bankk=0;
	}
	else {
		echo $r=$bank;
		$cash=0;
		$bankk=$paid;
	}
	
$bal=$_POST['balance'];;
$waver=$_POST['waver'];;
	$date=$day."-".$month."-".$year;
	$dd=date('d-m-Y');
/************************ SERVER SIDE VALIDATION **************************************/
/********** This validation is useful if javascript is disabled in the browswer ***/


$d=$conn->query("SELECT * from students where fname='$fname' AND 
levels='$l' AND year_id='$year_id'") or die(mysqli_error($conn));
$count=$d->num_rows;
if($count>0){
	echo "<script>alert('ERROR. $fname is already registered in $class this year')</script>";
}

else if ($bbm<0) {
echo "<script>alert('Negative Balance please of $bbm')</script>";
//header("Location: register.php?msg=$err");
exit();
} 

else if ($part<1) {
echo "<script>alert('Nothing has been inputed')</script>";
//header("Location: register.php?msg=$err");
exit();
} 
else {



$dates=date('d-m-Y');
$time=date('d-m-Y G:i:s');

		
 

 $query55=$conn->query("insert into historic  set  
matricule='$matriculex',student_name='$fname',
class='$l',amountpaid='$class1',amount_paid='$part',expected_amount='$feeamt',balance='$bal',id='16',date='$date' ,year_id='$year_id',photo='$matric' ,time='$l',olddebt='$reg',c111='$waver'" ) or die(mysqli_error($conn));


 $query55=$conn->query("insert into students  set  
matricule='$matriculex',fname='$fname',
levels='$l',year_id='$year_id',c101='$year',c102='$year2',c110='16',cxx6='others',departmet='$class1'" ) or die(mysqli_error($conn));



 $daily=$con->query("INSERT INTO daily set cust_id='$matriculex',room='$room',day='$day',staffname='$fname',discount=' $regfee',amt='$part',date='$date',month='$month',year='$year_id',reason='fees',qty='1',area='1',price='$paid',total='$part',owed='$bal',company='$r',paidto='$active',time='$time',
			purpose='".$l."',rec='$cash',bank='$bankk',sunion='$sunion',adminp='$adminp',tshirt='$tshirt' ,levels='$l',session='$sessionss',waver='$waver'") or die(mysqli_error($con));


echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?receipts">';	
	
}
}
 ?>



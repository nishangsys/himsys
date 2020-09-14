<?php

include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
		
?>
    
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {

   form.bal.value = ((parseInt(form.paidout.value) - parseInt(form.paid.value)));
   form.consumed.value = ((parseInt(form.added.value) * parseInt(form.cost.value)));
  form.exp.value = ((parseInt(form.otherbills.value) + parseInt(form.consumed.value)));
}
</script>


<body>
<?php
if(isset($_GET['out'])){	
	    $cust_id=$_GET['out'];
	  $cus="SELECT * from reports,daily where reports.yourid='".$cust_id."' and daily.reason='Lodging' and daily.rec>0 and reports.yourid=daily.cust_id and reports.reason='checkout'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		 $totpai=$row['howlong'];
		 
		 
		 		/*
			$update_finances=mysql_query("UPDATE finances set bal='0',status='1' where yourid='".$id."'") or die(mysql_error());
		//daily records
		$update_client=mysql_query("UPDATE ourclients set bal='0' where yourid='".$id."'") or die(mysql_error());
		
		//daily records
		 $update_histo=mysql_query("UPDATE historique set bal='0' where yourid='".$id."'") or die(mysql_error()) ;
		//update room status to empty
		//$update_finances=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
			echo "<script>alert('SUCCESS. ".$name." has checked out from Room ".$room."')</script>";
		 
		 */
	
	
?>
    
    
    
    
    
    <h1 class="he">Paying Back <span style="color:#Ff0"><?php echo $row['name']; ?> from Room <?php echo  $row['room']; ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['yourid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
           <tr><td></td><td><input type="hidden" name="otherbal" value="<?php echo  $row['otherbal']; ?>" style="width:300px" readonly="readonly" /></td></tr>

          
               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
             <tr><td></td><td><input type="hidden" name="dailyid" value="<?php echo  $row['daily.id']; ?>"  /></td></tr>
          <tr><td></td><td><input type="hidden" name="dailypaid" value="<?php echo  $row['rec']; ?>"  /></td></tr>

   
                   
                   <tr><td></td><td><input type="hidden" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Date Checked In</td><td><input type="text" name="loggged" value="<?php echo  $row['date'];; ?>" readonly="readonly" style="width:300px" /></td></tr>
                 
               
               <tr><td> Date Checked Out</td><td><input type="text" name="suppo" value="<?php echo $row['cout']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   /></td></tr>
              
              

  <tr>
                  <td>Amount to be paid to you</td><td><input type="text" name="paidout" style="width:300px; background:#9F3" onBlur="doCalc(this.form)" required="required"
                   value="<?php echo $first=($row['paidout']);
				  ?>"  />
                </td></tr>


<tr>
                  <td>Amount Paid Out </td><td><input type="text" name="paid" onBlur="doCalc(this.form)"  style="width:300px; " onBlur="doCalc(this.form)" 
                  required="required"  
				  
				  />
                </td></tr>


                
                <tr>
                  <td>Balance </td><td><input type="number" name="bal" style="width:300px; background:#f00;  color:#fff" required="required" readonly="readonly"   /></td></tr>
                <tr><td><input type="hidden" name="code" value="<?php echo $deptcode; ?>" /></td></tr>
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> SAVE PAYMENTS</button></td></tr>
            </table>
    
    </form><br /><br />
    
    </div>
 
	
  		
           <div class="clear"></div>
		
	<div class="foot"></div>  
   
			
	<?php } } } ?>	 	
</body>
</html>

 <?php if(isset($_POST['saves'])){
	  
				
		 $name=$_POST['name'];		
		$id=$_POST['id'];
		 $days_consumed=$_POST['added'];
		$room=$_POST['mat'];
		$exp=$_POST['exp'];		
		$dailypaid=$_POST['dailypaid'];	
	   $paid=$_POST['paid'];	   
		$bal=$_POST['bal'];		
		$in=$_POST['loggged'];
		$out=$_POST['suppo'];
	$paidold=$_POST['oldpa'];
	 $diff=$dailypaid-$paid;
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');

		   if($bal<0){ 
		   echo "<script>alert('ERROR. You are paying ".number_format(abs($bal))." FCFA more than the normal amount')</script>";
			   exit;
		   }
		
		else{
	
		//daily records
		$who=$_SESSION['user_name'];
            $daily_reports=mysql_query("UPDATE reports set paidout='$bal' where yourid='$id' ") or die(mysql_error());
			      $dail=mysql_query("INSERT INTO reports set paidby='$who',year='$year',name='$name',checkin='$in',month='$month',cout='$out',date='$date',howmuch='$paid',yourid='$id',reason='payback' ") or die(mysql_error());

			$daily_finance=mysql_query("UPDATE finances set paid='$diff' where yourid='$id' ") or die(mysql_error());

			echo "<script>alert('SUCCESS. ".$name." has been paidout  ".number_format($paid)." Frs')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=../restau/thank.php">';
			
			
		
			
		}
 }
	 ?>
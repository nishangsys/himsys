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

        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  form.exp.value = ((parseInt(form.added.value) * parseInt(form.cost.value))-parseInt(form.bala.value));
   form.bal.value = ((parseInt(form.exp.value) - parseInt(form.paid.value)));
      form.bals.value = ((parseInt(form.oldpa.value) - parseInt(form.exp.value))-parseInt(form.bala.value));
  
}
</script>


<body>
<?php
if(isset($_GET['out'])){	
	    $cust_id=$_GET['out'];
	  $cus="SELECT * from finances where yourid='".$cust_id."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		 $totpai=$row['howlong'];
		 
		 	//SELECT DATEDIFF(CURDATE(),STR_TO_DATE(mysql field, 'date-format-------%d-%m-%Y'))
		$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(duedate, '%m/%d/%Y')) AS DAYS
FROM finances where yourid='".$row['id']."'");
while($rows=mysql_fetch_assoc($rusn)){
	echo $rows['DAYS'];
}
	
		 
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
    
    
    
    
    
    <h1 class="he">Check Out Details for <span style="color:#Ff0"><?php echo $row['name']; ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['yourid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
          
               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
             <tr><td></td><td><input type="hidden" name="bala" value="<?php echo  $row['bal']; ?>"  /></td></tr>
                          <tr><td></td><td><input type="hidden" name="oldpa" value="<?php echo  $row['paid']; ?>"  /></td></tr>

   
                   
                   <tr><td>Room No</td><td><input type="text" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Date Logged In</td><td><input type="text" name="loggged" value="<?php echo  $row['date'];; ?>" readonly="readonly" style="width:300px" /></td></tr>
                 
               
               <tr><td> Suppose to Depart On</td><td><input type="text" name="suppo" value="<?php echo $row['duedate']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   style="width:300px; background:#9F3"/></td></tr>
              
                <tr><td> Cost of Room</td><td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"   readonly="readonly" style="width:300px;"/></td></tr>
              
                 <tr><td> Days Not Used</td><td><input type="text" name="added" 
                 value="<?php 
				 //SELECT DATEDIFF(CURDATE(),STR_TO_DATE(mysql field, 'date-format-------%d-%m-%Y'))
		$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(duedate, '%m/%d/%Y')) AS DAYS
FROM finances where id='".$row['id']."'");

while($row=mysql_fetch_assoc($rusn)){
	echo abs($row['DAYS']);
}/*$ad=$row['newadd']; 
				 if($ad>0){
					 echo $ad;
				 }
				 else {
					 echo "0";
				 }
				 
				 */
				 ?>"   readonly="readonly" required="required" style="width:300px;"/></td><td><input type="text" value="DAYS" /></td></tr>

                
                 <tr><td> Amount We will Pay You</td><td><input type="text" name="exp"  style="width:300px; background:red;color:white;" onBlur="doCalc(this.form)" required="required"  /></td></tr>

                <tr><td>Amount Paid Out</td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" required="required"  />
                </td><td>Balance<input type="text" name="bals" value="" onBlur="doCalc(this.form)" style="width:120px; background:red;color:white;"  /></td></tr>

                
                <tr><td>Balance Owed</td><td><input type="number" name="bal" style="width:300px; background:#ff6" required="required" readonly="readonly"   /></td></tr>
                <tr><td><input type="hidden" name="code" value="<?php echo $deptcode; ?>" /></td></tr>
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Check Out</button></td></tr>
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
		$added=$_POST['added'];
		$room=$_POST['mat'];
		$exp=$_POST['exp'];
		$paid=$_POST['paid'];
		$bal=$_POST['bal'];
		$ours=$_POST['bals'];
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		if(($exp)<=0){
				//
			$update_finances=mysql_query("UPDATE finances set bal='0',status='2' where yourid='".$id."'") or die(mysql_error());
		//daily records
		$update_client=mysql_query("UPDATE ourclients set bal='0' where yourid='".$id."'") or die(mysql_error());
		
		//daily records
		 $update_histo=mysql_query("UPDATE historique set bal='0' where yourid='".$id."'") or die(mysql_error()) ;
		//update room status to empty
		//$update_finances=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
			echo "<script>alert('SUCCESS. ".$name." has checked out from Room ".$room."')</script>";
			
		}
		
		else{
			
			$update_finances=mysql_query("UPDATE finances set bal='".$bal."',paid='$paid',status='2' where yourid='".$id."'") or die(mysql_error());
		//daily records
		$update_client=mysql_query("UPDATE ourclients set bal='".$bal."',paid='$paid' where yourid='".$id."'") or die(mysql_error());
		//update room status to empty
		$update_finances=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
		$histo=mysql_query("INSERT INTO historique set yourid='$id',room='$room',
			paid='$paid',added='$added',bal='$bal',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());	
		
		
		$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',
			rec='$paid',date='$date',month='$month',year='$year'") or die(mysql_error());	
			
			
			echo "<script>alert('SUCCESS. ".$name." has checked out  owing ".number_format($bal)." Frs')</script>";
			
			
		}
	} ?>
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
  form.exp.value = (((parseInt(form.used.value)) * parseInt(form.cost.value)));
   
      form.bals.value = ((parseInt(form.amtpaid.value) - parseInt(form.exp.value)));
	  form.bal.value = ((parseInt(form.bals.value) - parseInt(form.paid.value)));
  
}
</script>


<body>
<?php
if(isset($_GET['out'])){	
	  $cust_id=$_GET['out'];
	  $cus="SELECT * from finances where id='".$cust_id."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		 $totpai=$row['paid'];
		 //check if client pays nothing then just check him out
		 
		 
	
	
?>
    
    
    
    
    
    <h1 class="he" style="margin:0px">Check Out Details for <span style="color:#Ff0"><?php echo $row['name']; ?> </span><br />
    <i>N.B:If balance to client is Negative go to Update Bills and update before checking him out</i></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data" >
    
    <table style="line-height:1.3">
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['yourid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
                    <tr><td></td><td><input type="hidden" name="ids" value="<?php echo  $cust_id; ?>"  /></td></tr>

               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
             <tr><td></td><td><input type="hidden" name="bala" value="<?php echo  $row['bal']; ?>"  /></td></tr>
                          <tr><td></td><td><input type="hidden" name="oldpa" value="<?php echo  $row['paid']; ?>"  /></td></tr>

   
                   
                   <tr><td>Room No</td><td><input type="text" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Date Logged In</td><td><input type="text" name="date" value="<?php echo  $row['date'];; ?>" readonly="readonly" style="width:300px" /></td></tr>
                 
               
               <tr><td> Suppose to Depart On</td><td><input type="text" name="suppo" value="<?php echo $row['duedate']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   style="width:300px; background:#9F3"/></td></tr>
              
                <tr><td> Cost of Room</td><td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"   readonly="readonly" style="width:300px;"/></td></tr>
                            <tr><td> </td><td><input type="hidden" name="howlong" value="<?php echo $row['howlong']; ?>"  /></td></tr>
                                <tr><td> </td><td><input type="hidden" name="amtpaid" value="<?php echo $row['paid']; ?>"  /></td></tr>

              <tr><td> Days Consumed</td><td><input type="text" name="used" 
              value="<?php $totpai=$row['howlong']; 
			  
			  	$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(date, '%d-%m-%Y')) AS DAYS
FROM finances where id='".$row['id']."'");
while($rows=mysql_fetch_assoc($rusn)){
	  $not=abs($rows['DAYS']);
	 $diff=$totpai-$not;
	 if($diff==$totpai){
		 echo 0;
	 }
	 elseif($diff<=$not) {
		  echo  $diff=$not;
	 }
	 
}   ?>"   readonly="readonly" onBlur="doCalc(this.form)" style="width:300px;"/></td></tr>    

	

               
               
               
                 <tr><td> Days Not Used</td><td><input type="text" name="added" 
                 value="<?php 
				 //SELECT DATEDIFF(CURDATE(),STR_TO_DATE(mysql field, 'date-format-------%d-%m-%Y'))
		$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(duedate, '%m/%d/%Y')) AS DAYS
FROM finances where id='".$row['id']."'");

while($row=mysql_fetch_assoc($rusn)){
	echo abs($row['DAYS']);
}
				 ?>"   readonly="readonly" required="required" style="width:300px;"/></td><td><input type="text" value="DAYS" /></td></tr>

                
                 <tr><td> Amount You Consumed</td><td><input type="text" name="exp"  style="width:200px; background:red;color:white;" onBlur="doCalc(this.form)" required="required"  />
                 </td><td style="text-decoration:blink">Balance to Client<input type="text" name="bals" value="" onBlur="doCalc(this.form)" style="width:120px; background:red;color:white;"  /></td></tr>

                <tr><td>Amount Paid Out to you</td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" required="required"  />
                </td></tr>

                
                <tr><td>Amount Kept by Us</td><td><input type="number" name="bal" onBlur="doCalc(this.form)" style="width:300px; background:#ff6" required="required" readonly="readonly"   /></td></tr>
                

               
              
            
                        
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
		$ind=$_POST['date'];
		$exp=$_POST['exp'];
		$paid=$_POST['paid'];
		$bal=$_POST['bal'];
	   	
		$paidold=$_POST['oldpa'];		
		$ours=$_POST['bals'];
		$used=$_POST['used'];
		$final=$exp+$bal;
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   if($ours<0){
			    echo "<script>alert('ERROR. Please ".$name." is owing us ".number_format(abs($ours))." FCFA . Go to Update Bills and Update before Checking out')</script>";
			   exit;
		   }
		
		elseif($bal<0){ 
		   echo "<script>alert('ERROR. You are paying ".number_format(abs($bal))." FCFA more than the normal amount')</script>";
			   exit;
		   }
		   
		
		else{
			
		
	 $update_finances=mysql_query("UPDATE finances set paid='".$final."' , status='2',level='$date' where yourid='".$id."'") or die(mysql_error()); 
		//daily records
		$update_client=mysql_query("UPDATE ourclients set paid='".$final."'  where yourid='".$id."'") or die(mysql_error());
		//update room status to empty
		
			$update_histo=mysql_query("UPDATE historique set paid='".$final."'  where yourid='".$id."'") or die(mysql_error());
		//update room status to empty	
		
		$update_daily=mysql_query("UPDATE daily set rec='".$final."'  where cust_id='".$id."'") or die(mysql_error());
		//update room status to empty	
		
		$update_rooms=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
		
	    $insert_report=mysql_query("INSERT INTO reports set checkin='$ind',date='$date',month='$month',year='$year',days_uesd='$used',withus='$final',paidin='$paidold',paidout='$paid',cout='$date',name='$name',room='$room'")or die(mysql_error());
		
		
			
			echo "<script>alert('SUCCESS. ".$name." has checked out  and we have paid him back  ".number_format($paid)." Frs')</script>";
			
			
		
			
		}
	} ?>
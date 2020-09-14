<?php

include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
	@session_start();
	
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
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

   form.bal.value = ((parseInt(form.youwillpay.value) - parseInt(form.paid.value)));
   form.consumed.value = ((parseInt(form.added.value) * parseInt(form.cost.value)));
  form.exp.value = ((parseInt(form.otherbills.value) + parseInt(form.totlog.value)));
  
}
</script>


<body>
<?php
if(isset($_GET['out'])){	
	    $cust_id=$_GET['out'];
	  $cus="SELECT * from finances where finances.yourid='".$cust_id."'  ";
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
    
    
    
    
    
    <h1 class="he">Check Out Details for <span style="color:#Ff0"><?php echo $row['name']; ?> from Room <?php echo  $row['room']; ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data" >
    
    <table style="line-height:1.5">
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['yourid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
           <tr><td></td><td><input type="hidden" name="otherbal" value="<?php echo  $row['otherbal']; ?>" style="width:300px" readonly="readonly" /></td></tr>

          
               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
             <tr><td></td><td><input type="hidden" name="bala" value="<?php echo  $row['bal']+$row['otherbal']; ?>"  /></td></tr>
                          <tr><td></td><td><input type="hidden" name="oldpa" value="<?php 
						   $upd=mysql_query("SELECT SUM(rec) as totpaid,SUM(owed) from daily where cust_id='".$row['yourid']."' ") or die(mysql_error()); 
						    while($ro=mysql_fetch_assoc($upd)){
			 $paidsofar=$ro['totpaid'];
			 $owing=$ro['SUM(owed)'];
		 }
						  
						  
						   ?>"  /></td></tr>
          <tr><td></td><td><input type="hidden" name="checkin" value="<?php echo  $row['date']; ?>"  /></td></tr>
          <tr><td></td><td><input type="hidden" name="ovtpay" value="<?PHP 
				 $today=date('d-m-Y');
				  $time=date('G');	
		 $update=mysql_query("SELECT * from overtime WHERE id='1'") or die(mysql_error()); 
		 while($ro=mysql_fetch_assoc($update)){
			 $overtime=$ro['time'];
		 }
		 
				  $checkin=$row['date'];
				  if($checkin==$today){
					  echo $ovtm='0';
				  }
				  else if($time>=$overtime) {
					 echo $ovtm=1;
					  
				  }
				  else {
					  echo $ovtm='0';
				  }
				 
				 ; ?> "  /></td></tr>

   
                   
                   <tr><td></td><td><input type="hidden" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Checkin</td><td><input type="text" name="loggged" value="<?php echo  $row['date'];; ?>" readonly="readonly"  /></td>
                 
                 <td> Cost from R Change</td><td><input type="text" name="fcost" value="<?PHP 
				 $up=mysql_query("SELECT SUM(owed) from daily where cust_id='".$row['yourid']."' and  reason='Room Change' ") or die(mysql_error()); 
						    while($rof=mysql_fetch_assoc($up)){
			
			 $froom=$rof['SUM(owed)'];
			if(empty($froom)){
				echo 0;
			}
			else {
				echo $froom;
			}
							}
				 
				 ; ?> "  readonly="readonly" style="width:100px;"/></td>
                  </tr>
               
               <tr><td> Departure</td><td><input type="text" name="suppo" value="<?php echo $row['duedate']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   /></td>
               <td>
                 Time</td> <td ><input type="text" name="time" value="<?PHP 
				  echo date('G:i'); ?> " onBlur="doCalc(this.form)"   style="color:#f00; text-decoration:blink" /></td></tr>
               </tr>
                   
              
                <tr><td> Cost of Room</td><td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"   readonly="readonly" style="width:300px;"/></td>
                

                <td>
                 Over time</td> <td ><input type="text" name="overtime" value="<?PHP 
				 $today=date('d-m-Y');
				  $time=date('G');	
		 $update=mysql_query("SELECT * from overtime WHERE id='1'") or die(mysql_error()); 
		 while($ro=mysql_fetch_assoc($update)){
			 $overtime=$ro['time'];
		 }
		 
				  $checkin=$row['date'];
				  if($checkin==$today){
					  echo $ovtm='NO';
				  }
				  else if($time>=$overtime) {
					 echo $ovtm='YES';
					  
				  }
				  else {
					  echo $ovtm='NO';
				  }
				 
				 ; ?> " onBlur="doCalc(this.form)"   style="color:#fF0; background:#F00; text-decoration:blink" /></td></tr>
                 
                 
                 <tr><td> Days Used</td><td><input type="text" name="added" 
                 value="<?php    	//SELECT DATEDIFF(CURDATE(),STR_TO_DATE(mysql field, 'date-format-------%d-%m-%Y'))
	$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(date, '%d-%m-%Y')) AS DAYS
FROM finances where yourid='".$row['yourid']."'");
while($rows=mysql_fetch_assoc($rusn)){
	    $not=abs($rows['DAYS']);
		 $time=date('G');	
		 $update=mysql_query("SELECT * from overtime WHERE id='1'") or die(mysql_error()); 
		 while($ro=mysql_fetch_assoc($update)){
			 $overtime=$ro['time'];
		 }
	  if($not<=0){
		  echo $not=0;
	  }
	  
	  //if days used is 1 and the time is above the overtime, give it 2 days
	   else if($not==1 && $time>=$overtime){
				 
		   echo $not=2;
	  }
	  //if days used is 1 and the time is below the overtime, give it 1 days
	   else if($not==1 && $time<$overtime){
		 
		   echo $not=1;
	  }
	  //if days used more than 1 and the time is above the overtime, give it add 2 days
	  else if($not>1 && $time>$overtime){
		 
		   echo $not=abs($rows['DAYS'])+1;
	  }
	  
	  else {	
	   //if days used more than 1 and the time is below the overtime, give it add 1 days	 
		   echo $not=abs($rows['DAYS']);
	  }
	  
	
	 
}
	
			
				 ?>"    required="required" style="width:300px;" onBlur="doCalc(this.form)"/></td><td >Amt Paid </td><td><input type="text" value="<?PHP echo number_format($paidsofar); ?> Frs"  style="color:#f00; text-decoration:blink" /></td></tr>

                 <tr><td>Current Lodging Cost</td><td><input type="text" name="consumed"  style="width:300px;color:red;" onBlur="doCalc(this.form)" required="required" readonly  /></td><td>
                 Tot Lodging Cost</td> <td ><input type="text" name="totlog" value="<?PHP 
				 $upd=mysql_query("SELECT SUM(owed) from daily where cust_id='".$row['yourid']."' and reason!='Lodging' and reason!='Room Change' ") or die(mysql_error()); 
						    while($ro=mysql_fetch_assoc($upd)){
			
			echo $totlog=$not*$row['cost']+$froom;
							}
				 
				 ; ?> " onBlur="doCalc(this.form)"   /></td></tr>
                

  <tr><td> Others Bills</td><td><input type="text" name="otherbills"  style="width:300px;color:red;" onBlur="doCalc(this.form)"
            required="required" readonly value="<?php
			//echo $row['otherbal'];
		
			 $upd=mysql_query("SELECT SUM(total) from daily where cust_id='".$row['yourid']."' and reason!='Lodging' and reason!='Room Change' ") or die(mysql_error()); 
						    while($ro=mysql_fetch_assoc($upd)){
			
			 $owing=$ro['SUM(total)'];
							}
			 $ot= $owing;
			 if( $ot<=0){
				 echo "0";
			 }
			
			 else {
			 echo $ot;
			 }
			
			
			 ?>"   /></td></tr>

                 <tr><td> Total Bills </td><td><input type="text" name="exp"  style="width:300px; background:#39C;color:white;" onBlur="doCalc(this.form)" required="required"  /></td></tr>


  <tr>
                  <td>Amount to be refunded</td><td><input type="text" name="paidu" style="width:300px; background:#9F3" onBlur="doCalc(this.form)" required="required"
                   value="<?php 
				   
				   
				   
				  $first=($paidsofar-($totlog+$owing)); 
				  if($first<=0){
					  echo "0";
				  }
				  else {
					  echo $first;
				  }
				  ?>"  />
                </td></tr>


<tr>
                  <td>Balance Due</td><td><input type="text" name="youwillpay" style="width:300px; background:#f00; text-decoration:blink; color:#fff" onBlur="doCalc(this.form)" 
                  required="required"  value="<?php 
				   
				   
				   
				  $first=($paidsofar-($totlog+$owing)); 
				  if($first<=0){
					  echo abs($first);
				  }
				  else {
					  echo "0";
				  }
				  ?>"/>
                </td></tr>


                <tr>
                  <td>Amount Paid </td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" 
                  required="required"  />
                </td></tr>

                
                <tr>
                  <td>Balance </td><td><input type="number" name="bal" style="width:300px; background:#ff6" required="required" readonly="readonly"   /></td></tr>
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
		 $days_consumed=$_POST['added'];
		$room=$_POST['mat'];
		$exp=$_POST['exp'];		
		$paidtou=$_POST['paidu'];//to be paid to u
	   $youwillpay=$_POST['youwillpay'];//to be paid to us
	   $paid=$_POST['paid'];	   
		$bal=$_POST['youwillpay']-$_POST['paid'];		
		$ind=$_POST['checkin'];
		$overtim=$_POST['ovtpay'];
	$paidold=$_POST['oldpa'];
	@session_start();
	  $paidto=$_SESSION['user_name'];
		   
	$diff=$paidold-$paidtou;
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   
   $sem=mysql_query("SELECT * from finances where yourid='$id' and allow='2' ") or die (mysql_error());
   $count=mysql_num_rows($sem);

		   if($bal<0){ 
		   echo "<script>alert('ERROR. You are paying ".number_format(abs($bal))." FCFA more than the normal amount')</script>";
			   echo '<meta http-equiv="Refresh" content="0; url=../401.php">';
		   }
		   else if($bal>0 && $count<1){
			    echo "<script>alert('ERROR. This Client is not allowed to owe us. Call the administrator')</script>";
							   echo '<meta http-equiv="Refresh" content="0; url=../401.php">';

		   }
		   
		
		else{
			
			
	 $update_finances=mysql_query("UPDATE finances set otherbal='$bal', status='2',level='$date',mydebt='$bal' where yourid='".$id."'") or die(mysql_error()); 
		//daily records
		$update_client=mysql_query("UPDATE ourclients set paid='".$paid."' ,bal='$bal' where yourid='".$id."'") or die(mysql_error());
		//update room status to empty
		
			$update_histo=mysql_query("UPDATE historique set paid='".$paid."' ,bal='$bal' where yourid='".$id."'") or die(mysql_error());
		//update room status to empty	
		
		//$update_daily=mysql_query("UPDATE daily set rec='".$paid."',qty='$days_consumed'  where cust_id='".$id."' and reason='Lodging'") or die(mysql_error());
		
		
		$update_finance_days=mysql_query("UPDATE finances set howlong='$days_consumed'  where  yourid='".$id."'") or die(mysql_error());
			
		
		
		//update room status to empty	
		
		$update_rooms=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
		
	   $insert_report=mysql_query("INSERT INTO reports set checkin='$ind',yourid='".$id."',date='$date',month='$month',year='$year',days_uesd='$days_consumed',withus='$bal',paidin='$paid',paidout='".$paidtou."',cout='$date',name='$name',room='$room',reason='checkout'") or die(mysql_error()) ;
		
		//daily records
			$daily_income=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',paidto='$paidto',
			rec='$paid',date='$date',month='$month',year='$year',reason='Lodging',qty='',price='$cost',total='$cost*$howlong'") or die(mysql_error());
			
			
			echo "<script>alert('SUCCESS. ".$name." has checked out  and we have paid him back  ".number_format($paidtou)." Frs')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=../restau/thank.php">';
			
			
		
			
		}
	}
}
?>
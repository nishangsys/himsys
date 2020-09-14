<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';
echo 111111111;
}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		
			
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
  
}
</script>


<body>

    
    


<?php
if(isset($_GET['out'])){
	  $cust_id=$_GET['out'];
	
 $cus="SELECT * from finances where id='".$cust_id."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		;
		 
		 
?>
    
    
    
    
    <h1 class="he">Updating the Financial Situation of   <span style="color:#Ff0"><?php echo $row['name']; ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?roll=<?php echo $row['stu_id']; ?>" enctype="multipart/form-data" >
    
    <table>
         
       
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['yourid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
          
               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
             <tr><td></td><td><input type="hidden" name="bala" value="<?php echo  $row['bal']; ?>"  /></td></tr>
                            <tr><td></td><td><input type="hidden" name="oldpa" value="<?php 
						   $upd=mysql_query("SELECT SUM(rec) as totpaid,SUM(owed) from daily where cust_id='".$row['yourid']."' ") or die(mysql_error()); 
						    while($ro=mysql_fetch_assoc($upd)){
			echo  $paidsofar=$ro['totpaid'];
			 $owing=$ro['SUM(owed)'];
							}
						   ?>"  /></td></tr>
          <tr><td></td><td><input type="hidden" name="checkin" value="<?php echo  $row['date']; ?>"  /></td></tr>
          
          <tr><td><input type="hidden" name="others" value="<?PHP 
				 $upd=mysql_query("SELECT SUM(rec) from daily where cust_id='".$row['yourid']."' and reason!='Lodging' ") or die(mysql_error()); 
						    while($ro=mysql_fetch_assoc($upd)){
			
			echo  $paidother=$ro['SUM(rec)'];
							}
				 
				 ; ?> " onBlur="doCalc(this.form)"   /></td></tr>

   
                   
                   <tr><td>Room No</td><td><input type="text" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Date Logged In</td><td><input type="text" name="loggged" value="<?php echo  $row['date'];; ?>" readonly="readonly" style="width:300px" /></td></tr>
                 
               
               <tr><td> Suppose to Depart On</td><td><input type="text" name="suppo" value="<?php echo $row['duedate']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   style="width:300px; background:#9F3"/></td></tr>
              
                <tr><td> Cost of Room</td><td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"   readonly="readonly" style="width:300px;"/></td></tr>
              
              
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
		  echo $not=1;
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
		 
		   echo $not=abs($rows['DAYS'])+2;
	  }
	  
	  else {	
	   //if days used more than 1 and the time is below the overtime, give it add 1 days	 
		   echo $not=abs($rows['DAYS'])+1;
	  }
	  
	
	 
}
	
				 ?>"   readonly="readonly" required="required" style="width:300px;"/></td><td ><input type="text" value="<?PHP echo number_format($paidsofar); ?> Frs"  style="color:#f00; text-decoration:blink" /></td></tr>

                 <tr><td> Amount Consumed In Lodging</td><td><input type="text" name="consumed"  style="width:300px;color:red;" onBlur="doCalc(this.form)" required="required" readonly value="<?php echo $row['cost']*$not; ?>"  /></td></tr>

             <tr><td> Other BILLS</td><td><input type="text" name="otherbills"  onBlur="doCalc(this.form)" required="required" readonly value="<?php
			 $upd=mysql_query("SELECT SUM(owed) from daily where cust_id='".$row['yourid']."' and reason!='Lodging' ") or die(mysql_error()); 
						    while($ro=mysql_fetch_assoc($upd)){
			
			 $owing=$ro['SUM(owed)'];
							}
			 $ot= $owing;
			 if( $ot<=0){
				 echo "0";
			 }
			
			 else {
			 echo $ot;
			 }?>"  /></td></tr>

              
              
                
              
                 <tr><td> Amount Paid</td><td><input type="text" name="paid"    onBlur="doCalc(this.form)" style="width:300px; background:#f00; color:#fff"/></td></tr>


                

                
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Save</button></td></tr>
            </table>
    
    </form><br /><br /><br /><br />
    
    </div>
  
	
  		
           <div class="clear"></div>
		
	<div class="foot"></div>  
   
			
	<?php } }  }}?>	 	
</body>
</html>

<?php if(isset($_POST['saves'])){
	  
				
		 $name=$_POST['name'];		
		$id=$_POST['id'];
		$added=$_POST['added'];
		$otherbills=$_POST['otherbills'];	
		$room=$_POST['mat'];
		$exp=$_POST['exp'];
		$paid=$_POST['paid'];
		$bal=$_POST['bal'];		
		$oldpaid=$_POST['oldpa'];
		 $totpaid=$oldpaid+$paid;
		$diff=$otherbills-$paid;
		@session_start();
	  $paidto=$_SESSION['user_name'];
		 
	
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
	
		
			 $update_finances=mysql_query("UPDATE finances set paid='$totpaid' where yourid='".$id."'") or die(mysql_error()) ;
		//daily records
		//$update_client=mysql_query("UPDATE ourclients set bal='".$exp."',paid='$totpaid' where yourid='".$id."'") or die(mysql_error());
		
		$histo=mysql_query("INSERT INTO historique set yourid='$id',room='$room',
			paid='$paid',added='$added',bal='$exp',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());	
		
		
		$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',
			rec='$paid',date='$date',month='$month',year='$year',reason='loging',paidto='$paidto'") or die(mysql_error());	
			
			
			echo "<script>alert('SUCCESS. ".$name." has paid in ".number_format($paid)." Frs')</script>";
						echo '<meta http-equiv="Refresh" content="0; url=../restau/thank.php">';

			
			
		
	} ?>
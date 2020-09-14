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

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>


<script type="text/javascript">
function doCalc(form) {

   form.bal.value = ((parseInt(form.youwillpay.value) - parseInt(form.paid.value)));
   form.consumed.value = ((parseInt(form.added.value) * parseInt(form.cost.value)));
  form.exp.value = ((parseInt(form.otherbills.value) + parseInt(form.consumed.value)));
}
</script>


<body>
<?php
if(isset($_GET['id'])){	
	    $cust_id=$_GET['id'];
		$rooms=$_GET['cat'];
		$floors=$_GET['floor'];
		$oldid=$_GET['oldroom'];
	  $cus="SELECT * from finances where yourid='".$cust_id."'  ";
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
    
    
    
    
    
    <h1 class="he">Changing <span style="color:#Ff0"><?php echo $row['name']; ?> from Room <?php echo  $row['room']; ?> </span></h1>
     <form method="post" action="" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['yourid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
           <tr><td></td><td><input type="hidden" name="otherbal" value="<?php echo  $row['otherbal']; ?>" style="width:300px" readonly="readonly" /></td></tr>

          
               
                <tr><td></td><td><input type="hidden" name="name" value="<?php echo  $row['name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
             <tr><td></td><td><input type="hidden" name="bala" value="<?php echo  $row['bal']; ?>"  /></td></tr>
                          <tr><td></td><td><input type="hidden" name="oldpa" value="<?php echo  $row['paid']; ?>"  /></td></tr>
          <tr><td></td><td><input type="hidden" name="checkin" value="<?php echo  $row['date']; ?>"  /></td></tr>

   
                   
                   <tr><td></td><td><input type="hidden" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 
               
               <tr><td> Suppose to Depart On</td><td><input type="text" name="suppo" value="<?php echo $row['duedate']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   /></td></tr>
              
                <tr><td> Cost of Room</td><td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"   readonly="readonly" style="width:300px;"/></td></tr>
              
                 <tr><td> Days Used</td><td><input type="text" name="daysused" 
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
		 @ session_start();
 @ session_start();

 $u=$_SESSION['banned'];
	  
	  if($not<=0 &&$u==20 ){
		  echo $not=0;
	  }
	  else if($not<=0 &&$u==5 ){
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
		 
		   echo $not=abs($rows['DAYS'])+1;
	  }
	  
	  else {	
	   //if days used more than 1 and the time is below the overtime, give it add 1 days	 
		   echo $not=abs($rows['DAYS']);
	  }
	  
	
	 
}
	
			
				 ?>"   readonly="readonly" required="required" style="width:300px;"/></td><td ><input type="text" value="<?PHP echo number_format($row['paid']); ?> Frs"  style="color:#f00; text-decoration:blink" /></td></tr>

                 <tr><td> Amt Consumed In Former Room</td><td><input type="text" name="consumed"  style="width:300px;color:red;" onBlur="doCalc(this.form)" required="required" readonly value="<?php echo ($not*($row['cost'])) ?>"  /></td></tr>

                <tr><td>Formal Room</td><td><input type="text" name="room"  style="width:300px;color:red;"  required="required" readonly value=" <?php echo (($row['room'])) ?>"  /></td></tr>

     <tr><td></td><td><input type="HIDDEN" name="roomid"    value=" <?php  echo $oldid;
	 					   
	  ?>"  /></td></tr>

              
                <tr><td>New Room Choosen</td><td><input type="text" name="room"  style="width:300px;background:#6CF"  required="required" readonly value=" <?php echo $rooms; ?>"   /></td></tr>
             
             <tr><td>Category</td><td><input type="text" name="newrid"  style="width:300px;background:#6CF"  
             required="required" readonly value=" <?php 
			 		$check_amt=mysql_query("SELECT * from rooms where num='".$rooms."' and floor='".$floors."' ") or die(mysql_error());
					while($all=mysql_fetch_assoc($check_amt)){
						 $nrid=$all['id'];
						echo  $cates=$all['cateogry'];
					}
					
					
					$check_amt1=mysql_query("SELECT * from categories where cat='$cates' ") or die(mysql_error());
					while($alls=mysql_fetch_assoc($check_amt1)){
						 $max=$alls['amt'];
							 $min=$alls['lastprice'];

					}
					
					

			 
			 ?>"   /></td></tr>
   


                <tr>
                  <td>Least Price</td><td><input type="text" name="min" style="color:#f00"  value="<?php echo $min; ?>" onBlur="doCalc(this.form)" 
                  required="required"  />
                </td><td>Maximum Price</td><td><input type="text" name="max" style="color:#f00"  value="<?php echo $max; ?>"  onBlur="doCalc(this.form)" 
                  required="required"  /></td></tr>

             <tr><td> Room Cost</td><td><input type="text" name="charge"  style="width:300px;color:red;"  required="required"    /></td></tr>

               
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Save Changes</button></td></tr>
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
		$nid=$nrid;
		 $consumed=$_POST['consumed'];
		$daysused=$_POST['daysused'];
		$cost=$_POST['cost'];
		$tota=$daysused*$cost;
		 $cate=$_POST['newrid'];
		 $otherbal=$_POST['otherbal']+$consumed;
		 $roomid=$_POST['roomid'];
		 $room=$_POST['sub_cat'];
		$oldroom=$_POST['room'];
        $charge=$_POST['charge'];
		$min=$_POST['min'];
		 $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
	
		if($charge<$min){
			echo "<script>alert('ERROR. Your Cannot Give out Room ".$room."  for less than ".number_format($min)." FCFA ')</script>";
						echo '<meta http-equiv="Refresh" content="1; url=changingrooms.php?roll='.$cust_id.'&cat='.$rooms.'&floor='.$floors.'&oldroom='.$oldid.'">';

			  
		}
		else {
			
					    $updad=mysql_query("UPDATE rooms set status='1' where id='$roomid' ") or die(mysql_error()) ;

		   		   $updaterooms2=mysql_query("UPDATE rooms set status='2' where id='$nid' ")or die(mysql_error()) ;
				 
				  
				  //daily records
			 $daily_ups=mysql_query("INSERT INTO daily set cust_id='$id',room='$oldroom',
			rec='',date='$date',month='$month',year='$year',reason='Room Change',qty='$daysused',price='$cost',total='$tota',owed='$tota'") or die(mysql_error());
			
			
				 $update_daily=mysql_query("UPDATE daily set room='$rooms',price='$charge' where cust_id='$id' and reason='Room Change' ")or die(mysql_error()) ;
				 $update_finance=mysql_query("UPDATE finances set room='$rooms',cat='$cate',otherbal='$otherbal',cost='$charge',date='$date' where yourid='$id' ")or die(mysql_error()) ;
$one=("UPDATE ourclients set  room='$room',cat='$cates',cost='$charge',date='$date' where yourid='$id' order by id ASC LIMIT 1 ") or die(mysql_error());


			echo "<script>alert('SUCCESS. ".$name." room has been changed from Room ".$oldroom." to room ".$room." ')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=../restau/thank.php">';
			
			
		
			
		}
	} ?>
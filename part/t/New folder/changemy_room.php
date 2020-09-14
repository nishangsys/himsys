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
if(isset($_GET['out'])){	
	    $cust_id=$_GET['out'];
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
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data" >
    
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
              
                 <tr><td> Days Used</td><td><input type="text" name="added" 
                 value="<?php    	//SELECT DATEDIFF(CURDATE(),STR_TO_DATE(mysql field, 'date-format-------%d-%m-%Y'))
	$rusn=mysql_query("SELECT DATEDIFF(CURDATE(),STR_TO_DATE(date, '%d-%m-%Y')) AS DAYS
FROM finances where yourid='".$row['yourid']."'");
while($rows=mysql_fetch_assoc($rusn)){
	 echo  $not=abs($rows['DAYS']);
	
	 
}
	
			
				 ?>"   readonly="readonly" required="required" style="width:300px;"/></td><td ><input type="text" value="<?PHP echo number_format($row['paid']); ?> Frs"  style="color:#f00; text-decoration:blink" /></td></tr>

                 <tr><td> Amt Consumed In Former Room</td><td><input type="text" name="consumed"  style="width:300px;color:red;" onBlur="doCalc(this.form)" required="required" readonly value="<?php echo ($not*($row['cost'])) ?>"  /></td></tr>

                <tr><td>Formal Room</td><td><input type="text" name="room"  style="width:300px;color:red;"  required="required" readonly value=" <?php echo (($row['room'])) ?>"  /></td></tr>

     <tr><td></td><td><input type="hidden" name="roomid"    value=" <?php 
	 					    $upda=mysql_query("SELECT * FROM rooms where num='".$row['room']."' and status='2'  ") or die(mysql_error());
                             while($rof=mysql_fetch_assoc($upda)){
								 echo $rof['id'];
							 }
	  ?>"  /></td></tr>

              
              <tr><td>New Room  Category</td><td><select name="parent_cat" id="parent_cat" required>
        <?php 
				 $query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

		while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
        <?php endwhile; ?>        
        </td></tr>               
                 <tr><td>New Room Choosen </td><td> <select name="sub_cat" id="sub_cat" required></select></td></tr>              
   

                <tr>
                  <td>Room Cost</td><td><input type="text" name="charge" style="width:300px" onBlur="doCalc(this.form)" 
                  required="required"  />
                </td></tr>

                
               
                
               
              
            
                        
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
		$consumed=$_POST['consumed'];
		 $cate=$_POST['parent_cat'];
		 $otherbal=$_POST['otherbal']+$consumed;
		 $roomid=$_POST['roomid'];
		 $room=$_POST['sub_cat'];
		$oldroom=$_POST['room'];
        $charge=$_POST['charge'];
		 $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
	
		$check_amt=mysql_query("SELECT * from categories where cat='".$cate."'") or die(mysql_error());
		while($r=mysql_fetch_assoc($check_amt)){
			 $max=$r['amt'];
			$min=$r['lastprice'];
		}
		if($charge<$min){
			echo "<script>alert('ERROR. Your Cannot Give out Room ".$room."  for less than ".number_format($min)." FCFA ')</script>";
			   exit;
		}
		else {
			//update rooms
			echo $oldroom;
					    $updad=mysql_query("UPDATE rooms set status='1' where id='$roomid' ") or die(mysql_error());

		   		  $updaterooms2=mysql_query("UPDATE rooms set status='2' where num='$room' ") or die(mysql_error());
				  
				  //daily records
			$daily_ups=mysql_query("INSERT INTO daily set cust_id='$id',room='$oldroom',
			rec='',date='$date',month='$month',year='$year',reason='Old room Used',qty='1',price='$consumed',total='$consumed'") or die(mysql_error());
			
			
				 $update_daily=mysql_query("UPDATE daily set room='$room',price='$charge' where cust_id='$id' and reason='Lodging' ") or die(mysql_error());
				$update_finance=mysql_query("UPDATE finances set room='$room',cat='$cate',otherbal='$otherbal',cost='$charge',date='$date' where yourid='$id' ") or die(mysql_error());
$one=mysql_query("UPDATE ourclients set  room='$room',cat='$cate',cost='$charge',date='$date' where yourid='$id' order by id ASC LIMIT 1 ") or die(mysql_error());


			
		
		
			echo "<script>alert('SUCCESS. ".$name." room has been changed from Room ".$oldroom." to room ".$room." ')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=../restau/thank.php">';
			
			
		
			
		}
	} ?>
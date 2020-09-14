<?php

//include '../dbc.php';
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


<link href="../jss/examples.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.common.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.kendo.min.css" rel="stylesheet"/>
        <script src="../jss/jquery.min.js"></script>
        <script src="../jss/kendo.all.min.js"></script>
<script>
$(document).ready(function() {
 $("#datepicker").kendoDatePicker();
});
</script>
<script type="text/javascript">
function doCalc(form) {
  form.exp.value = ((parseInt(form.oldpa.value) ));
   form.bal.value = ((parseInt(form.exp.value) - parseInt(form.paid.value)));
  
}
</script>


<body>
<?php
if(isset($_GET['res'])){
		
	    $cust_id=$_GET['res'];
	  $cus="SELECT * from customers where client_id='".$cust_id."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		 $totpai=$row['howlong'];
		 
		 $query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

	
	
?>
    
<div class="right">    
    <br /><br />
    
    <h1 class="he" style="padding:10px 10px">Reserving Room for <span style="color:#Ff0"><?php echo $row['stu_name']; ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?res=<?php echo $row['client_id']; ?>" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['client_id']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
               <tr><td>Client's Name</td><td><input type="text" name="name" value="<?php echo  $row['stu_name']; ?>" style="width:300px" readonly="readonly" /></td></tr>

               
           
              <tr><td>Room Category</td><td><select name="parent_cat" id="parent_cat" required>
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
        <?php endwhile; ?>        
        </td></tr>               
                 <tr><td>Room Choosen </td><td> <select name="sub_cat" id="sub_cat"></select></td></tr>              
   
                   
               
                <tr>
                  <td>From</td><td><select name="date<?php echo $i; ?>" class="input" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month<?php echo $i; ?>" class="input" style="width:130px" />
               	  <option value="1">January</option>
              <option value="2">Febuary</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				</select>
                  
                </td><td>Year</td><td><select name="year<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=2015;$floor<=2025;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr>
                
                
                <tr>
                  <td>To</td><td><select name="date1<?php echo $i; ?>" class="input" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month1<?php echo $i; ?>" class="input" style="width:130px" />
                 <option value="1">January</option>
              <option value="2">Febuary</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				</select>
                  
                </td><td>Year</td><td><select name="year1<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=2015;$floor<=2025;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr>

                
                <tr>
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Save Reservation</button></td></tr>
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
		$cat=$_POST['parent_cat'];
		$room=$_POST['sub_cat'];
		if($_POST['date']<10){
		 $date="0".$_POST['date'];	
		}
		else {
		 $date=$_POST['date'];
		}
		if($_POST['month']<10){
		  $month="0".$_POST['month'];	
		}
		else {
		$month=$_POST['month'];
		}
		
		   $year=$_POST['year'];
		   
		  if($_POST['date1']<10){
		 $date1="0".$_POST['date'];	
		}
		else {
		 $date1=$_POST['date1'];
		}
		if($_POST['month1']<10){
		  $month1="0".$_POST['month1'];	
		}
		else {
		$month1=$_POST['month1'];
		}
		   $year1=$_POST['year1'];
		 $day=$month."/".$date."/".$year;
		 $day1=$month1."/".$date1."/".$year1;
		   $thisday=date('m/d/y');
		   $thismonth=date('m');
		   $thisyear=date('Y');
		   
		    $run12=mysql_query("SELECT * from rooms where id='$room'") or die (mysql_error());
 while($r=mysql_fetch_assoc($run12)){
	 $room=$r['num'];
	 $cate=$r['cateogry'];
	 $floo=$r['floor'];
	 $idd=$r['id'];
	 
 }
		   if ($year<$thisyear){
			   echo "<script>alert('ERROR. Your cannot choose a date that is earlier than ".date('Y')."')</script>";
		   }
		   else {
			//echo $upd_rooms=("update rooms set status='3' and rest='$cust_id' where id='$idd' ") ; exit;
	
			
	 $update_finances=mysql_query("INSERT INTO reserves set category='$cate',room='$room',cust_id='$id',date='$date',month='$month',year='$year',day='$day',block='$floo',date1='$date1',month1='$month1',year1='$year1',day1='$day1'") or die(mysql_error()); 
		//daily records
	//$upd_ros=mysql_query("update rooms set rest='$cust_id',due='$day' where id='$idd' ") or die(mysql_error()); 
 //update customers
 			 $update_cust=mysql_query("update customers set status='2' where client_id='".$id."'") or die(mysql_error()); 

			
			echo "<script>alert('SUCCESS.Room ".$room." has been reserved for ".$name." from ".$day." to ".$day1."')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=adminpage.php?see_allreserves">';

		   }
		
			
		}
	 ?>
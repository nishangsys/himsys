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
if(isset($_GET['changedate'])){
		
	    $ids=$_GET['changedate'];
	  $cus="SELECT * from customers,reserves where customers.client_id='$ids' and reserves.cust_id=customers.client_id  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($rows=mysql_fetch_assoc($run)){
		  $name=$rows['stu_name'];
		 $nation=$rows['pof'];
		 $room=$rows['room'];
		 $cat=$rows['category'];
		  $id=$rows['client_id'];
		 
		 $query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

	
	
?>
    
<div class="right">    
    
    <div class="clear"></div>
    
    <h1 class="he" style="padding:10px 10px"> <span style="color:#Ff0">
Extending Reservation date for <?php  echo $name ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?changedate=<?php echo $id; ?>" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $id; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
               <tr><td>Client's Name</td><td><input type="text" name="name" value="<?php echo  $rows['stu_name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
                <tr><td></td><td><input type="hidden" name="cust_id" value="<?php echo  $rows['cust_id']; ?>" style="width:300px" readonly="readonly" /></td></tr>

                    
   
     <tr><td> Room Category</td><td><input type="text" readonly name="fcat" value="<?php echo  $cat; ?>" id="parent_cat">
           
        </td></tr>               
                 <tr><td>Room Chosen </td><td> <input type="text" readonly name="froom"  value="<?php echo  $room; ?>" id="sub_cat"></td></tr>              
              
                   
               
                <tr>
                  <td></td><td><input type="hidden" name="total" value="<?php echo $rows['day']; ?>" style="background:#F9F" onBlur="doCalc(this.form)" required="required"  />
                </td></tr>
                
                 <tr>
                  <td>Change date from</td><td><input type="text" name="toppp" value="<?php echo $rows['date']; ?>/<?php echo $rows['month']; ?>/<?php echo $rows['year']; ?>" style="background:#F9F" onBlur="doCalc(this.form)" required="required"  />
                </td></tr>

                
                <tr>
                
                 <td>To</td><td><select name="date<?php echo $i; ?>" class="input" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month1<?php echo $i; ?>" class="input" style="width:130px" required />
                <option>...Select one-----</option>
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
                  
                </td><td>Year</td><td><select name="year1<?php echo $i; ?>" class="input"  style="width:100px"  />
               	<option value="<?php echo $floor; ?>"   onBlur="doCalc(this.form)" ></option>
					<?php 
					for($floor=2015;$floor<=2025;$floor++)
					{
					echo "<option value='$floor' >$floor</option>";
					}
					?>
				</select></tr>

                
                <tr>
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Change Reserved Room</button></td></tr>
            </table>
    
    </form><br /><br />
    
    </div>
 </tr></tr>
	 </div>
  		
           <div class="clear"></div>
		
  
   
			
	<?php } } } ?>	 	
</body>
</html>

 <?php if(isset($_POST['saves'])){
	  
				
		 $name=$_POST['name'];		
		$id=$_POST['id'];
		$cust_id=$_POST['cust_id'];
		$cat=$_POST['parent_cat'];
		$room=$_POST['sub_cat'];
		$ocat=$_POST['total'];
		$oroom=$_POST['froom'];		
		//$date=$_POST['date1'];
		  if($_POST['date']<10){
		 $date="0".$_POST['date'];	
		}
		else {
		 $date=$_POST['date'];
		}
		if($_POST['month1']<10){
		  $month="0".$_POST['month1'];	
		}
		else {
		$month=$_POST['month1'];
		}
		  
		   $year=$_POST['year1'];
		   echo $day=$month."/".$date."/".$year;
  
			//historique 
		     $histo=mysql_query("UPDATE reserves set day='$day',date='$date',month='$month',year='$year'  where cust_id='$cust_id' ")or die(mysql_error()) ;
	
					   		   $updaterooms2=mysql_query("UPDATE rooms set status='1' where who='$cust_id' and status='3' ")or die(mysql_error()) ;

			 echo "<script>alert('SUCCESS. ".$name." Reservation date has been changed from ".$ocat." to ".$day." . THANK YOU')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=adminpage.php?see_allreserves">';
			
		   

		
			
		}
	 ?>
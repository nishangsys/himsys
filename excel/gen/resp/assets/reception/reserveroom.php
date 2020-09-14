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
    
    
    
    <h1 class="he">Reserving Room for <span style="color:#Ff0"><?php echo $row['stu_name']; ?> </span></h1>
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
                  <td>Today's Date</td><td><input type="text" name="total" value="<?php echo date('d-m-Y'); ?>" style="width:300px" onBlur="doCalc(this.form)" required="required"  />
                </td></tr>

                
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
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		
			
	 $update_finances=mysql_query("INSERT INTO reserves set category='$cat',room='$room',cust_id='$id',date='$date',month='$month',year='$year'") or die(mysql_error()); 
		//daily records
			 $update_rooms=mysql_query("update rooms set status='3' where num='$room' and cateogry='$cat'") or die(mysql_error()); 
 //update customers
 			 $update_cust=mysql_query("update customers set status='2' where client_id='".$id."'") or die(mysql_error()); 

			
			echo "<script>alert('SUCCESS.Room ".$room." has been reserved for ".$name." and so Room ".$room." is no longer available')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?reserving">';

			
		
			
		}
	 ?>
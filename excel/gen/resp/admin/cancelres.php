<?php
//include '../dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
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
	    form.expamt.value = (((parseInt(form.day.value) * parseInt(form.expect.value))+parseInt(form.added.value)-parseInt(form.disc.value)));

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<body>


<?php
if(isset($_GET['cancel'])){
	 $ids=$_GET['cancel'];
	  $cure="SELECT * from customers,reserves where customers.client_id='$ids' and reserves.cust_id=customers.client_id  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $name=$rows['stu_name'];
		 $nation=$rows['pof'];
		 $room=$rows['room'];
		 $cat=$rows['category'];
		  $id=$rows['client_id'];
	}
	
}
$query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

?>


<div class="right">
<h1 style="background:#333; color:#fff; padding:10px 0px"> <span style="color:#ff0"><?php  echo $name ?>
 Reserved a Room and Now he wants to Cancel the Reservation</span></h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?cancel=<?php echo $ids; ?>" enctype="multipart/form-data" >
    
    <table>         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $ids; ?>"   /></td></tr>
          
                    <tr><td>Customer's Names</td><td><input type="text" name="yname" value="<?php echo  $name; ?>"  /></td></tr>               
                   <tr><td>Room Category</td><td><input type="text" readonly name="parent_cat" value="<?php echo  $cat; ?>" id="parent_cat">
           
        </td></tr>               
                 <tr><td>Room Chosen </td><td> <input type="text" readonly name="sub_cat" value="<?php echo  $room; ?>" id="sub_cat"></td></tr>              
              
                
              
            
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">Cancel Reservations</button></td></tr>
            </table>
    
    </form>
       <?php
	   if(isset($_POST['save'])){
		   $id=$_POST['id'];
		   $name=$_POST['yname'];
		  
		   $cat=$_POST['parent_cat'];
		   $room=$_POST['sub_cat'];
		  
		   
		   //check if the minum amount is respected
		   
			   

			   
		    $cust=mysql_query("DELETE from customers where client_id='$id'") or die(mysql_error());
			//historique 
		    $histo=mysql_query("DELETE from reserves where cust_id='$id'") or die(mysql_error());
		  
		  $updaterooms=mysql_query("UPDATE rooms set status='1',who='0' where num='$room' ") or die(mysql_error());

		   
			
			 echo "<script>alert('SUCCESS. ".$name." Resevations have been cancelled. THANK YOU')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=adminpage.php?see_allreserves">';

			
		   
	   
	}
	;
	   
	   ?>
    </div>
    <?php
	
	?>
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>
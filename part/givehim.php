<?php
include '../dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
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
echo "Study " . $_GET['id'] . " at " . $_GET['cat']. " as " . $_GET['n'];;

if(isset($_GET['id'])){
	 $ids=$_GET['id'];
	  $cure="SELECT * from customers where client_id='$ids'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $name=$rows['stu_name'];
		 $nation=$rows['pof'];
	}
	
}
$query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

?>



<h1 style="background:#333; color:#fff; padding:10px 0px">You're Are Giving Out a Room to <span style="color:#ff0"><?php  echo $name ?></span></h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?roll=<?php echo $ids; ?>" enctype="multipart/form-data" >
    
    <table>         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $ids; ?>"   /></td></tr>
                    <tr><td></td><td><input type="hidden" name="nation" value="<?php echo  $nation; ?>"   /></td></tr>          
          
                    <tr><td>Customer's Names</td><td><input type="text" name="yname" value="<?php echo  $name; ?>"  /></td></tr>               
                   <tr><td>Room Category</td><td><select name="parent_cat" id="parent_cat">
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
        <?php endwhile; ?>        
        </td></tr>               
                 <tr><td>Available Rooms </td><td> <select name="sub_cat" id="sub_cat"></select></td></tr>              
               <tr><td> Cost of a Room</td><td><input type="text" name="expect"  onBlur="doCalc(this.form)"   style="width:300px;"/></td></tr>              
                <tr><td>No of Days to Stay</td><td><select name="day" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=01;$day<=41;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td></tr> 
                <tr><td> Additionl Room Amt</td><td><input type="text" name="added" value="0" onBlur="doCalc(this.form)"    style="width:300px;"/></td></tr>
                
                 <tr><td> Discount</td><td><input type="text" name="disc" value="0"    style="width:300px; background:#9CF"/></td></tr>

                <tr><td> Expected Amount</td><td><input type="text" name="expamt"  onBlur="doCalc(this.form)"    style="width:300px; background:#F9C;"/></td></tr>

                <tr><td>Amount Paid</td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" required  /></td></tr>
                      
                <tr><td>Balance</td><td><input type="number" name="bal" style="width:300px; background:red;color:white;" required readonly   /></td></tr>
                <tr><td><input type="hidden" name="code" value="<?php echo $deptcode; ?>" /></td></tr>
                

                
              
            
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">Save</button></td></tr>
            </table>
    
    </form>
       <?php
	  giveout_room();
	   
	   ?>
    </div>
    <?php
	
	?>
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>
<?php
//include '../dbc.php';
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
  form.bal.value = (((parseInt(form.day.value) * parseInt(form.expect.value))-parseInt(form.paid.value)+parseInt(form.added.value)));
  
}
</script>
<body>


<?php
if(isset($_GET['id'])){
	 $ids=$_GET['id'];
	  $cure="SELECT * from customers where client_id='$ids'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $name=$rows['stu_name'];
	}
	
}
$query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

?>



<h1 style="background:#333; color:#fff; padding:10px 0px">You're Are Giving Out a Room to <span style="color:#ff0"><?php  echo $name ?></span></h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?roll=<?php echo $ids; ?>" enctype="multipart/form-data" >
    
    <table>         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $ids; ?>"   /></td></tr>          
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
            
                <tr><td>Amount Paid</td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" required  /></td></tr>
                      
                <tr><td>Balance</td><td><input type="number" name="bal" style="width:300px; background:red;color:white;" required readonly   /></td></tr>
                <tr><td><input type="hidden" name="code" value="<?php echo $deptcode; ?>" /></td></tr>
                
                                 <tr><td>Departure Date</td><td><input type="text" name="duedate" id="datepicker" required  placeholder=" click to choose" size="40" />

                
              
            
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">Save</button></td></tr>
            </table>
    
    </form>
       <?php
	   if(isset($_POST['save'])){
		   $id=$_POST['id'];
		   $name=$_POST['yname'];
		   $cat=$_POST['parent_cat'];
		   $room=$_POST['sub_cat'];
		   $cost=$_POST['expect'];
		   $howlong=$_POST['day'];
		   $paid=$_POST['paid'];
		   $added=$_POST['added'];		   
		   $bal=$_POST['bal'];
		   $duedate=$_POST['duedate'];
		   $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   
		   //check if the minum amount is respected
		   
		    $CHECK=mysql_query("SELECT * FROM categories where cat='$cat' LIMIT 1") or die(mysql_error());
		    while($ro=mysql_fetch_assoc($CHECK)){
		   $last=$ro['lastprice'];
		  
		 
	 }
		   if($cost<$last){
			   echo "<script>alert('ERROR. Your Cannot Give out Room ".$room."  for less than ".number_format($last)." FCFA')</script>";
			   exit;
		   }
		   else if($bal<0){ 
		   echo "<script>alert('ERROR. Your Clients is paying ".number_format(abs($bal))." FCFA more than the normal Price')</script>";
			   exit;
		   }
		   else {
		    $one=mysql_query("INSERT INTO ourclients set yourid='$id',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate'") or die(mysql_error());
			//historique 
		    $histo=mysql_query("INSERT INTO historique set yourid='$id',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());
		  
		   //finance insertion
		    $finance=mysql_query("INSERT INTO finances set yourid='$id',name='$name',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',status='1'") or die(mysql_error());
			
			//finance insertion
		    $updaterooms=mysql_query("UPDATE rooms set status='2' where num='$room' ") or die(mysql_error());
			
			//update customers as room given out
			
			  $customers=mysql_query("UPDATE customers set status='2' where client_id='$id' ") or die(mysql_error());
			
			 echo "<script>alert('SUCCESS. ".$name." is now your client till ".$duedate.". THANK YOU for using our software')</script>";
			
		   }
	   
	}
	
	  $nuda='7 days';           
$newdate = date('Y-m-d', strtotime('"+7 days')) ;
$timestamp = date('Y-m-d H:i:s', strtotime('+1 year'));  
echo $newdate ;
	   
	   ?>
    </div>
    <?php
	
	?>
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>
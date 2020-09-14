<?php
//include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';
echo 111111111;
}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		
			
	}
	else {
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="../reception/style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  form.exp.value = ((parseInt(form.bal.value) - parseInt(form.paid.value)));
  
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
                          <tr><td></td><td><input type="hidden" name="oldpa" value="<?php echo  $row['paid']; ?>"  /></td></tr>
          <tr><td></td><td><input type="hidden" name="checkin" value="<?php echo  $row['date']; ?>"  /></td></tr>

   
                   
                   <tr><td>Room No</td><td><input type="text" name="mat" value="<?php echo  $row['room']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Date Logged In</td><td><input type="text" name="loggged" value="<?php echo  $row['date'];; ?>" readonly="readonly" style="width:300px" /></td></tr>
                 
               
               <tr><td> Suppose to Depart On</td><td><input type="text" name="suppo" value="<?php echo $row['duedate']; ?>" onBlur="doCalc(this.form)" readonly="readonly"   style="width:300px; background:#9F3"/></td></tr>
              
                <tr><td> Cost of Room</td><td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"   readonly="readonly" style="width:300px;"/></td></tr>
              
              <tr><td> Amount Owed</td><td><input type="text" name="bal" value="<?php echo $row['otherbal']; ?>"   readonly="readonly" onBlur="doCalc(this.form)" style="width:300px;"/></td></tr>
              
                
                
               
              
            
                        
                  <tr><td></td><td><tr><td></td><td><button type="submit" name="saves" class="myButton"  onclick="return confirm('Are you Sure that your to cancel <?php echo $row['name']; ?> debts worth <?php echo number_format($row['otherbal']); ?> Frs')" >
				  Cancel Debt</button></td></tr>
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
		$room=$_POST['mat'];
		$exp=0;
		$paid=$_POST['paid'];
		$bal=$_POST['bal'];
		$balp=$_POST['paid'];
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		
			$update_finances=mysql_query("UPDATE finances set otherbal='0' , status='2' where yourid='".$id."'") or die(mysql_error());
		//daily records
		$update_client=mysql_query("UPDATE ourclients set bal='0' where yourid='".$id."'") or die(mysql_error());
		
		
			
			echo "<script>alert('SUCCESS. ".$name." Debts has been canceled and he is owing ".number_format($exp)." Frs')</script>";
						echo '<meta http-equiv="Refresh" content="0; url=../restau/thank.php">';

			
			
		}
	 ?>
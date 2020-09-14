<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

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
     <form method="post" action="" enctype="multipart/form-data" >
    
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
              
                  <tr>
                  <td>Amount Paid </td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" 
                  required="required"  />
                </td></tr>

                
                <tr>
                  <td>Balance </td><td><input type="number" name="exp" style="width:300px; color:#ff0; background:#f00" required="required" readonly="readonly"   /></td></tr>
                
                
                
               
              
            
                        
                  <tr><td></td><td><tr><td></td><td><button type="submit" name="saves" class="myButton"  onclick="return confirm('Are you Sure reduce <?php echo $row['name']; ?> debts ')" >
				  Save Payments</button></td></tr>
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
		$bal=$_POST['exp'];
		
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   @session_start();
	  $paidto=$_SESSION['user_name'];
		 
		
		 if($bal<0){ 
		   echo "<script>alert('ERROR. You are paying ".number_format(abs($bal))." FCFA more than the normal amount')</script>";
			  			echo '<meta http-equiv="Refresh" content="0; url=../401.php">';

		   }
		
		else{
			
			
	 $update_finances=mysql_query("UPDATE finances set otherbal='$bal' where yourid='".$id."'") or die(mysql_error()); 
	
		//daily records
	$daily_income=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',
			rec='$paid',date='$date',month='$month',year='$year',reason='Lodging debt repayments',qty='',price='$paid',total='$paid',paidto='$paidto'") or die(mysql_error());
			
			
			echo "<script>alert('SUCCESS. ".$name." has paid some of his debts and he/she is owing  ".number_format($bal)." Frs')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=../restau/thank.php">';
			
			
			
			
		}
			
		}
	 ?>
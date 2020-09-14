<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';
echo 111111111;
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

        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  form.bal.value = ((parseInt(form.suppo.value) - parseInt(form.paid.value)));
  
}
</script>


<body>

    
    


<?php
if(isset($_GET['debt'])){
	  $cust_id=$_GET['debt'];
	 
	
	
	
	 $cus="SELECT * from members_times where matricule='".$cust_id."'  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($row=mysql_fetch_assoc($run)){
		
		 
		 
		 
?>
    
    
   
    <h1 class="he">Receiving  <span style="color:#Ff0"><?php echo $row['name']; ?>'s Contribution </span></h1>
   
     <form method="post" action="" enctype="multipart/form-data" >
    
    <table style="float:left; position:relative">
         
       
          <tr><td></td><td><input type="hidden" name="sofar" value="<?php echo  $row['paid']; ?>" style="width:300px" readonly="readonly" /></td></tr>
 
          
               
          
                      <tr><td>Your Matricule</td><td><input type="text" name="mat" value="<?php echo  $row['matricule']; ?>" style="width:300px; color:#f00" readonly="readonly" /></td></tr>

                   
                   <tr><td>Category</td><td><input type="text" name="cat" value="<?php echo  $row['disc']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 
               
               <tr><td> Amount OWED</td><td><input type="text" name="suppo" value="<?php echo $row['owed']; ?>"  onBlur="doCalc(this.form)" readonly="readonly"   style="width:300px; background:#9F3"/></td></tr>
                          
              
                 <tr><td> Amount Paid</td><td><input type="text" name="paid"  onBlur="doCalc(this.form)" style="width:300px;"/></td></tr>


                
                 <tr><td> Balance</td><td><input type="text" name="bal"  style="width:300px; background:red;color:white;" required="required" readonly="readonly"  /></td></tr>

                
               
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Save Payments</button></td></tr>
            </table>
    
    </form>
    
      
    </div>
  
	
  		
           <div class="clear"></div>
           <div style="width:200px; height:200px; border:1px solid#000">
         
           </div>
           <?php
		 
		   
		   ?>
		
	
			
	<?php } } 


}}?>	 	
</body>
</html>

<?php if(isset($_POST['saves'])){		
		 $name=$_POST['name'];		
		$id=$_POST['id'];
		$mat=$_POST['mat'];
		$cat=$_POST['cat'];
		$facil=$_POST['facil'];
		$suppo=$_POST['suppo'];
		$paidsofar=$_POST['sofar'];
		
		$paid=$_POST['paid'];
		 $totpai=$paidsofar+$paid;
		$bal=$_POST['bal'];
		
		$date=date('d-m-Y');
		//$duedate=date("m/d/Y", strtotime("$startDate +".$howlong." days"));
		//$duedate2=date("d/m/Y", strtotime("$startDate +".$howlong." days"));
		
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		if(($bal)<0){
			echo "<script>alert('ERROR. The Balance is Negative')</script>";
			
		}
		
		else{
			//
			
			 $one=mysql_query("UPDATE members_times set owed='$bal',paid='$totpai' where matricule='$mat'") or die(mysql_error());
			//memberexi
			
			
			
		$histo=mysql_query("INSERT INTO historique set yourid='members',cat='$cat',
			paid='$paid',bal='$bal',date='$date',area='4', month='$month',year='$year',day='$day'") or die(mysql_error());	
		
		
		$daily=mysql_query("INSERT INTO daily set cust_id='members',room='$cat',
			rec='$paid',date='$date',month='$month',year='$year',area='4',time='$mat'") or die(mysql_error());

		/*daily records
		$update_client=mysql_query("UPDATE ourclients set bal='".$exp."',paid='$paid' where yourid='".$id."'") or die(mysql_error());
		//update room status to empty
		$update_finances=mysql_query("UPDATE rooms set status='1' where num='".$room."'") or die(mysql_error());
		
		$histo=mysql_query("INSERT INTO historique set yourid='$id',room='$room',
			paid='$paid',added='$added',bal='$exp',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());	
		
		
		$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',
			rec='$paid',date='$date',month='$month',year='$year'") or die(mysql_error());	
			*/
			
			echo "<script>alert('SUCCESS. ".$name." Payments is Receive and is owing ".number_format($bal)." Frs')</script>";
echo '<meta http-equiv="Refresh" content="0; url=../restau/thank.php">';

		}
}
		?>
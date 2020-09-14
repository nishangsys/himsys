<?PHP
include '../functions/functions.php';

session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
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
  form.total.value = parseInt(form.quantity.value) * parseInt(form.price.value);
}

</script>
<script language="JavaScript" src="js/pop-up.js"></script>

<script>
$(document).ready(function(){
    $(".input").keyup(function(){
          var value = +$(".value1").val();
          var amount = +$(".value2").val();
          $("expect").val(val1*val2);
    });
});

</script>
<body>

<?php include 'adminhead.php'; ?>

	<div class="contain">
   	<div class="subcontain">
   <?php include 'adminsidebar.php'; ?>
    
    <div class="right">


<!-------------------------BOX WITH THE FORM===BOX1----------------->
				  
                   

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <table>
        
       
         <tr>
        <td>Purpose</td><td><input name="purpose"  type="text" style="width:300px"> </td></tr>
             
                   
      <tr>
      <td>Quantity</td><td><input type="text" name="quantity" onBlur="doCalc(this.form)" style="width:130px" /></td>
      </tr>
        
        <tr>
        <td>Unit Price</td>
        <td><input type="text" name="price"  onBlur="doCalc(this.form)" style="width:120px" ></td></tr>      
       
        <tr>        
        <td>Total Cost</td>
        <td><input type="text" name="total" style="background:red;color:white; width:120px;" required="required" ></td></tr>
       
       
       
        <tr>
        <td></td>
        <td><button type="submit" name="spend" >SAVE</button></td></tr> 
        
        </table>
        </form>
          <?php
		    $cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
		  if(isset($_POST['spend'])){
		  $what=nl2br($_POST['purpose']);
		  $qty=$_POST['quantity'];
		  $price=$_POST['price'];
		  $total=$_POST['total'];
		  $date=date('d-m-Y');
		  $month=date('m');
		  $year=date('Y');
		  $time=date('h:i:s');
		  $you=$_SESSION['user_name'];
	 $daily="INSERT INTO dailyspendings set quantity='$qty',		  reason='$what',amount='$price',total='$total',date='$date',spender='$you',month='$month', year='$year',time='$ac_year' ";
	 $run=mysql_query($daily) or die(mysql_error());
	 
	 $expense="INSERT INTO historique set date='$date',month='$month', year='$year',newdebt='$total',year_id='$ac_year',stu_id='spend' ";
	 $runs=mysql_query($expense) or die(mysql_error());
	 
	 
	 if($run){
			
			$message= " $names has been Successfully registered. Thank You";
			echo "<script>alert(' Successfully registered. Thank You')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=spend2.php">';
		}
		  }
		  
	 ?>
        
   
    </div>
	</div>
  		
           <div class="clear"></div>
		
	<div class="foot"></div>  
   
			
	<?php } ?>	 	
</body>
</html>
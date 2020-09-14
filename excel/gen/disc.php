

<?PHP
include '../dbc.php'; // include the database and server connection file

@session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';


}
@session_start();
$who=$_GET['id'];	

$level=$_SESSION['banned'];

$section=$_GET['area'];
if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	$folder="bar";
	
}
else if($section==20 or $section==10){
		 $dashbd;
		$section;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	$folder="restau";
	
}

else if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	$folder="bauca";
	
}
else if($section=='20' or $section=='18'){
		 echo $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	
	
	
}

 $area=$_GET['area'];
 
    $query= mysql_query("SELECT SUM(total),tab FROM ".$db_basket." where tab='$who' and status='3' GROUP BY tab") or die(mysql_error()); // Select from the table
 
	 while($rt=mysql_fetch_assoc($query)){
		  $tot_amt=$rt['SUM(total)'];
	 }
		
?>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
function doCalc(form) {
		  
  form.bal.value = ((parseInt(form.paid.value)-parseInt(form.disc.value)));

}
</script>

<h1 style="background:#333; color:#fff; padding:10px 0px">You're Are Givinga discount to <span style="color:#ff0">TABLE <?php  echo $_GET['id']; ?></h1>

<form method="post" action="" enctype="multipart/form-data" >
    
    <table>         
          

              
               
                <tr><td>Amount Paid</td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" value="<?php echo $tot_amt; ?>" readonly  /></td></tr>
      
                  
                             
                                                 <tr><td> Discount</td><td><input type="text" name="disc"   onBlur="doCalc(this.form)"    /></td></tr>

                <tr><td>Balance</td><td><input type="number" name="bal" style="width:300px; background:red;color:white;" required readonly   /></td></tr>
              
                
            
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">Save</button></td></tr>
            </table>
    
    </form>
 
      
     
    </div>
    <?php
	if(isset($_POST['save'])){
		
		
		$tot_bill=$_POST['paid'];
		$tot_disc=$_POST['disc'];
		$tot_pay=$tot_bill-$tot_disc;
		if($tot_pay<0){
			echo "<script>lert('ERROR.Negative value after discounting')</script>";
		}
		else {
			$d=$con->query("UPDATE ".$db_basket." SET sub='$tot_disc' WHERE tab='$who' and status='3' order by id DESC LIMIT 1 ") or die(mysqli_error($con));
			echo "<script>lert('SUCESS.Discounting uupdated and saved')</script>";
			echo "<script>window.open('thank.php','_self')</script>";
		}
		
	}
   ?>
   </div></div></div>
   
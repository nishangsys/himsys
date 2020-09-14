

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
 
    $query= mysql_query("SELECT SUM(total),tab FROM ".$db_basket." where tab='$who' and status='1'  GROUP BY tab") or die(mysql_error()); // Select from the table
 
	 while($rt=mysql_fetch_assoc($query)){
		  $tot_amt=$rt['SUM(total)'];
	 }
		
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANG SOFTWARES PRODUCTS</title>
		<meta charset="utf-8">
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" type="text/css" />
       

        
		<!--//webfonts-->
</head>

<script type="text/javascript">
function doCalc(form) {
		   form.bal.value = ((parseInt(form.bill.value)-parseInt(form.disc.value)));

}
</script>
<body>




<h1 style="background:#333; color:#fff; padding:10px 0px">You're Are Giving Out a Room to <span style="color:#ff0"><?php  echo $name ?> </h1>

<form method="post" action="" enctype="multipart/form-data" >
    
    <table>         
        
            <tr><td>Total Bill</td><td><input type="text" name="bill" value="<?php echo $tot_amt; ?>" readonly style="background:#C06; color:#fff"  onBlur="doCalc(this.form)"   /></td></tr>          

                    <tr><td>Amount Discounted</td><td><input type="text" name="disc" onBlur="doCalc(this.form)"    /></td></tr>               
                  
                                <tr><td> Cost of a Room</td><td><input type="text" name="bal"   style="width:300px; background:#ff0; color:#fff;"/></td></tr>              
             
            
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">Save</button></td></tr>
            </table>
    
    </form>
 
      
     
    </div>
   </div></div></div>
   
    	
</body>
</html>


<?php
include '../dbc.php';
$areas=$_GET['area'];
if($areas==15){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$page='restaupage.php';
	
}
if($areas==10){
		 $areas;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$page='restaupage.php';
	
}

if($areas==2){
		 $areas;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$page='baucapage.php';
	
}
?>

<html><head>


<title>Pop Up Link</title>



<script language="JavaScript" src="js/pop-up.js"></script>

<link href="../style.css" type="text/css" rel="stylesheet" />

</head>
<BODY >
<?php
if($areas=='10'  or $areas=='15'){
	
$sell="select * from foods order by product   "; 
 $run=mysql_query($sell); 
 $i=1;

?>

<center>
<!-- CONTENT TABLE -->
<div class="withdrawals"><h1>Sell all available stocks and Prices</h1></div>
<TABLE cellpadding=0 cellspacing=0 border="0" width="50%" style="padding:10px 0px; line-height:2">

	<tr style="background:#1188aa; color:#fff; text-align:center" >
    <td>S/N</td>
    
    <td>Product</td>   
    <td>Barcode</td>
 
    <td>Product Price</td>
    
    </tr>
    <?php while ($prices=mysql_fetch_assoc($run)){ ?>
    <tr class="pop">
    <td><?php echo $i++; ?></td>
     
       
    <td><?php echo $prices['product']; ?></td>  
        
     <td><?php echo $prices['barcode']; ?></td>   
     
    <td><?php echo $prices['price']; ?></td>
  
    </tr>
    
    <?php } 
	
	} ?>


</table>
<!-- CONTENT TABLE -->
</center>


</BODY>
</HTML>
<?php
include  '../dbc.php';
require_once '../functions/functions.php';
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
<title>Receipt</title>
<link href="../style.css" type="text/css" rel="stylesheet" />
</head>

<body onload="window.print();">

 
   
  
 <div class="receipt">
 <h1 style="font-size:16px; text-align:center;">Out of Stock Products as at <?php echo date('l'); ?> <?php echo date('d/m/Y'); ?></h1>
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------first RECEIPT------------------------------------------------------------------------------------------------------------------------------------------------------>
 
      <?php 
	  $stock="select * from fixed_products WHERE qty<=0 order by product ";
	   $run=mysql_query($stock) or die ('could not updated:'.mysql_error());
	   $num=1;
	  ?>
 <table style="width:100%; margin:auto;  line-height:2
 ; overflow:hidden">
        <tr style="background:#999; font-weight:bold; height:30px; padding:10px 10px">
        <td style="color:#fff">S/N</td>
        <TD style="color:#fff">Products</TD>
        <TD style="color:#fff">Description</TD>
        <td style="color:#fff">Model</td>
          </tr>
        <?php
			while($row=mysql_fetch_assoc($run)){
		?>
        <tr>
        
        <td><?php echo $num++; ?></td>
        <TD><?php echo $row['product']; ?></TD>
        <TD><?php echo $row['discribe']; ?></TD>
        <td><?php echo $row['model']; ?></td>
      
        </tr>
        
        
        
        <?php } ?>
        
        
        
       
        </table>
        
 
 </div> 
  
</div>
   
</body>
</html>
<?php }?>



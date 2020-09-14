<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='20'){
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
			<META HTTP-EQUIV="REFRESH" CONTENT="10">

        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

   <h1>Choose Account to View</h1>
   <a href="../reception/frontpage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Reception
   </div>
   </a>
   
   
   <a href="../bar/restaupage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Bar
   </div>
   </a>
   
    
    
    <a href="../restau/restaupage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Restaurant
   </div>
   </a>
   
   
   <a href="../bauca/baucapage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Bouccarou
   </div>
   </a>
   
   <a href="../rental/rentalpage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Rentals
   </div>
   </a>
   
   
   <a href="../VIP/clubpage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access VIP Bar
   </div>
   </a>
   
   
   <a href="../acc/accpage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access accountant
   </div>
   </a>
   
   
   <a href="../chiefs/dashboard.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Drinks  Warehouse
   </div>
   </a>
   
   
   <a href="../store/stockpage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Fixed Assets Warehouse
   </div>
   </a>
   
   
   <a href="../chiefreceipt/frontpage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Chief Reception
   </div>
   </a>
    
    
    
   <a href="../sales/restaupage.php" target="_blank" style="color:#fff; text-decoration:none">
   
   <div style="background:#1188aa; float:left; padding:10px 10px; text-align:center; margin:15px 15px; border:1px solid#000; ">
   Access Waitress 
   </div>
   </a>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>
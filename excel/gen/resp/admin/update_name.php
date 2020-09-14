<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}


	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Client</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>


    
    <div class="right" >
    <?php 
	$get=mysql_query("SELECT * from client where clien_id='2'") or die(mysql_error());
	while($rows=mysql_fetch_assoc($get)){
	
	 ?>
     <h1>UPDATE YOUR SCHOOL ADDRESS</h1>
  
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?update_name" enctype="multipart/form-data" >
    
    <table>
              <tr><td>Business Name</td><td><input type="text" name="name" value="<?php echo $rows['name'];  ?>" /></td></tr>
              
              <tr><td>Business Address/ Residence</td><td><input type="text" name="adress" value="<?php echo $rows['address'];  ?>" /></td></tr>
              
               <tr><td>Business Contacts</td><td><input type="text" name="tel" value="<?php echo $rows['as1'];  ?>" /></td></tr>
               
               
               <tr><td>Branch </td><td><input type="text" name="town" value="<?php echo $rows['as2'];  ?>" /></td></tr>
               
               <tr><td></td><td><button type="submit" name="update" class="myButton"   style="color:#000; font-weight:bold" >UPDATE & SAVE</button></td></tr>
               
     </table>
    </form><br /><br />
    <?php } ?>
    <?PHP
   if(isset($_POST['update'])){
	   $name=$_POST['name'];
	   $add=$_POST['adress'];
	   $tele=$_POST['tel'];
	   $ville=$_POST['town'];
	   $done="UPDATE client set name='$name',address='$add', as1='$tele',as2='$ville' WHERE clien_id='2'";
	   $run=mysql_query($done) or die(mysql_error());
	   echo "<script>alert('You have Successfully Update your Business Information. Thank You')</script>";
	   
   }
   
   ?>
    </div>
   
    
    <!--675985573/Eliane-->
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>
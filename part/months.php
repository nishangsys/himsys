<?PHP


session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
    ?>
<!DOCTYPE html>
<html>
	
<head>
	<title>New Client</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

<h1>Choose a month</h1>
 <?PHP
  $r=mysql_query("SELECT * FROM months order by id") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
	  $st=$row['id'];
	  if(($st)<10){
		  $fi="0".$st;
	  }
	  else{
		  $fi=$st;
	  }

  ?>
  <a href="?voucher=<?php echo $st; ?>&name=<?php echo $row['name']; ?>" style="color:#fff; font-size:18px; text-decoration:none">  


  <Div style="background:#060; border:1PX solid#000; font-weight:bold; padding:10px 10px; width:150px; margin:20PX 20PX; float:left; color:#fff; border:1px solid#000"> 
 
   <?php echo $row['name']; ?>
 
 </Div>
 </a>
 <?php } ?>  </div> </div> 
			
		 		
</body>
</html>
<?php } ?>
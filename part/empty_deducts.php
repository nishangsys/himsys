<?php


session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}
$level=$_SESSION['banned'];

	

 if($level=='20' or $level=='17'){
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        	
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<h1 style="background:#4254BE; color:#fff"> Click Choose a Department below</h1> 
    
    
   
    <Div style="background:#1188AA; border:1PX solid#000; padding:10px 10px; width:370px; margin:20PX 20PX; float:left; color:#666; border:1px solid#000"> 
 
 
 <a href="<?PHP echo $_SERVER['_SELF']; ?>?emptying_bonus" style="color:#fff; font-size:18px; text-decoration:none" onclick="return confirm('Are you Sure you wish EMPTY all bonuses')">   <span style="color:#ff0">Empty All Bonuses</span></a>
 
 </Div>
 
 <Div style="background:#1188AA; border:1PX solid#000; padding:10px 10px; width:370px; margin:20PX 20PX; float:left; color:#666; border:1px solid#000"> 
 
 
 <a href="<?PHP echo $_SERVER['_SELF']; ?>?emptying_deducts" style="color:#fff; font-size:18px; text-decoration:none" onclick="return confirm('Are you Sure you wish EMPTY all deductions')">   <span style="color:#ff0">Empty All Deductions</span></a>
 
 </Div>
 
 
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } ?>
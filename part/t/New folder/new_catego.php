<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}
$level=$_SESSION['banned'];

	

 if($level=='20' or $level=='8'){
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

<iframe src="addcate.php" width="800" height="1200" style="border:none; "></iframe>
    
    
   
    </div>
	
    
   
	</body>		
		 		
</body>
</html>
<?php } ?>
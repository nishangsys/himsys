<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	
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


<iframe src="../staffs/easy/index.php" width="1250" height="3000" style="border:none"></iframe>
    
    
   
  
    
   
	</body>		
		 		
</body>
</html>
<?php }  ?>
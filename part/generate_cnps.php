<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
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


<h1>Declare Salaries for this Month</h1>
<iframe src="CNSP.php"  style="width:1200px; height:800px; border:none"></iframe>
   
   
       
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  ?>
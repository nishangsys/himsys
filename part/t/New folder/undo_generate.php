<?php

require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISAHNG</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>

<script language="JavaScript" type="text/javascript">
var seconds =5;
var url="<?php echo $_SERVER['SELF']; ?>?check_in";

function redirect(){
 if (seconds <=0){
 // redirect to new url after counter  down.
  window.location = url;
 }else{
  seconds--;
  document.getElementById("pageInfo").innerHTML = "redirecting in "+seconds+" seconds."
  setTimeout("redirect()", 1000)
 }
}
</script>


<body>


<h1>VOUCHERS</h1>
<iframe src="undo_generating.php" style="width:1000px; height:1000px; border:none"></iframe>

   
	<div class="clear"></div>		
		 		
</body>
</html>
<?php } ?>
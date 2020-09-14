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

<div style="background:#f00; color:#ff0; font-weight:bold; text-align:center; padding:5px 5px; width:100%">Please Make sure you have emptied both deductions and Bonuses before you Continue</div>
<iframe src="generate_voucher.php?month=<?php  echo $_GET['voucher']; ?>&name=<?php  echo $_GET['name']; ?>" style="width:1200px; height:3000px; border:none"></iframe>

   
	<div class="clear"></div>		
		 		
</body>
</html>
<?php } ?>
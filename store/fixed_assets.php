
<?php
//include  'dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	@session_start();
	
	if(($_SESSION['banned'])!='150'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clints name</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<script type="text/javascript">
function doCalc(form) {
  form.total.value = parseInt(form.quantity.value) * parseInt(form.price.value);
}
</script>
<body>

    
    
    <iframe src="other_fixedstocks.php" style="width:95%; border:none; height:800px"></iframe>

    </div>
   
</div>

<?php } } ?>
</body>
</html>

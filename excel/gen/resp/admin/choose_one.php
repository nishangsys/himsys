
<?php
//include  'dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	@session_start();
	
	if(($_SESSION['banned'])!='20'){
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

<div class="right">
  <Div style="background:#1188AA; border:1PX solid#000; padding:10px 10px; width:300px; margin:20PX 20PX; float:left; color:#666; border:1px solid#000">
  
   <a href="<?PHP echo $_SERVER['_SELF']; ?>?addone" style="color:#fff; font-size:18px; text-decoration:none">  Add a Partner Company</a>
   </Div>
 

<h1>All Partner Companies</h1>
 <?PHP
  $r=mysql_query("SELECT * FROM companies order by name") or die(mysql_error());
  while($row=mysql_fetch_assoc($r)){
  ?>

  <Div style="background:#eee; border:1PX solid#000; font-weight:bold; padding:10px 10px; width:180px; margin:20PX 20PX; float:left; color:#666; border:1px solid#000"> 
 
   <?php echo $row['name']; ?>
 
 </Div>
 
 <?php } ?>
 

    </div>
   
</div>

<?php } } ?>
</body>
</html>

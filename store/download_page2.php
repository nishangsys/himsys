
<?php
//include  'dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
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

    <h1>Download Stocks in Excel</h1>
    <a href="do2.php" style="color:#FFF; text-decoration:none; font-size:24px; font-family:Arial, Helvetica, sans-serif">
    
    <div style="background:#063; width:400px; padding:20px 20px; margin:auto; text-align:center">Download All Supplies in Excel</div></a>
    
  
    </div>
   
</div>

<?php } ?>
</body>
</html>

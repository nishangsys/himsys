<?php  include 'includes/dbc.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}

.main{
	width:1060px;
	height:750px;
	border:1px solid#000;
	margin:auto auto;
}
.box1{
	float:left;
	padding:20px 20px;
	border:1px solid#000;
	width:300px;
	height:100px;
	
}
</style>
</head>

<body>

<?php
$c=$dbcon->query("SELECT * FROM `courses` WHERE matricule='SFI 141633'") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){

?>
	<page size="A4" layout="landscape">
    
    <div style="clear:both; margin-top:30px;"></div>
    
    	<div class="box1"></div>

     <div class="main">
     </div>










	</page>
    
    <?php } ?>

</body>
</html>
<?php
//include connection file 
include_once("connection.php");
 $product=$_GET['product'];
$sql = "SELECT * FROM `gen_info` where names='$product' ";
$queryRecords = mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<title>NISHANG SYSTEM</title>
</head>
<style>
body{
	line-height:1.8;
	font-size:18px;
}
.con{
	width:960px;
	height:500px;
	margin:auto;
	border:1px solid#00F;
	padding:30px 30px;
	
}
</style>
<body>



<div class="con">
<h2>RECORDING <?PHP echo $product; ?> MARKS</h2>
<div id="msg" class="alert"></div>
<table id="employee_grid" class="table table-condensed table-hover table-striped bootgrid-table" width="60%" style="margin-top:-50px" cellspacing="0">
   <thead>
      <tr>
         <th>Names</th>
          <th>Program</th>
         
         <th>ORALS/20</th>
         <th>WRITTEN/80</th>
      </tr>
   </thead>
   <tbody id="_editable_table">
      <?php while($res=$queryRecords->fetch_assoc()){ ?>
     <form method="post" action="">
     <tr>
     <td><input type="text" name="name" readonly value="<?php  echo $res['names']; ?>" style="width:350px"></td>
     
    <td><input type="text" name="prog" readonly value="<?php  echo $res['choiceone']; ?>" style="width:240px"></td> 
    
    <td><input type="text" name="orals" style="width:90px" required></td>
    
    <td><input type="text" name="written" style="width:90px" required></td>
    <td><button type="submit" name="save">SAVE</button></td>
     
     </tr>
     
     </form>
	  <?php } ?>
   </tbody>
</table>
</div>
</body>
</html>

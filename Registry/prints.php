<?php
include  '../dbc.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
body{
	font-size:16px;
	
	 
}
tr,td,table,th{
	border:1px solid#000;
	border-collapse:collapse;
}
tr,td{
	line-height:1.7;
}
.ff{
	width:50px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	  margin-left:5px;
	  float:left;
	 
}
.s{
	width:100px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.t{
	width:160px;
	 height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
.f{
	width:190px;
	height:auto;
	 padding:10px 10px;
	  border:1px solid#000;
	  text-align:center;
	   float:left;
}
</style>
</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">

<div class="receipt"> 
<div class="mainbox">

<?php include '../Cash/header.php'; ?>
    
    

   <div style="clear:both; height:20px"></div>
    <?PHP

		
	  $select=$con->query("SELECT * from special order by certi ") or die(mysqli_error($con));
	$a=1;
		
	
	?>
 
<table style="width:100%">
<th>S/N</th><th>Program</th>
<?php while ($row=$select->fetch_assoc()){ ?>
<tr>
<td><?php echo $a++; ?></td>
<td><?php echo $row['certi']; ?></td>
</tr>
  <?php } ?>
</table>
 
</body>
</html>





<?php

include '../includes/dbc.php';

error_reporting(1);



	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		</script>
        <?php
	}
	$chk = $_POST['chk'];
echo $chkcount = count($chk);


 $names = $_POST['name'];
$year = $_POST['year'];
$prog = $_POST['prog'];

//////////////////////////////////////TAXABLE SALARIES SET ////////////////////////////////////////////////////

 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>NSMS</title>
<meta name="keywords" content="multiple insert in php, multiple crud using PHP MySql, multiple insert update delete using php mysql"/>
<meta name="description" content="multiple insert update delete CRUD using PHP MySql. A simple way to insert, update and delete multiple values at a time using PHP MySql"/>
<style>
body{
	font-size:16px;
	background:url(bg.jpg);
}
.as_wrapper{
	margin:0 auto;
	width:100%;
	font-family:Arial;
	color:#333;
	background:#eee;
	font-size:18px;
}

.as_country_container{
	padding:20px;
	width:100%;
	border:2px dashed #17A3F7;
}

.a {
	text-decoration:none;
	color:#999;
}

.a:hover {
	text-decoration:underline;
}

.a:active {
	color:#F55925;
}
.h1 a {
	text-decoration:none;
	color:#000;
}
.h1 a:hover {
	text-decoration:underline;
}
.table {
	border:2px dashed #17A3F7;
	padding:20px;
	width:95%;
	
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solid #17A3F7;
	min-width:400px;
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#17A3F7;
	padding:5px;
	color:#FFF;
}
.table_view tr.odd {
	background:#F7F7F7;
}
.table_view tr.even {
	background:#FFF;
}
.table_view tr.odd:hover, .table_view tr.even:hover {
	background:#FEFDE0;
}
.table_view tr td {
	padding:5px;
}
.input {
	border:#CCC solid 1px;
	padding:5px;
}

.input:focus {
	border:#999 solid 1px;
	background:#FEFDE0;
	padding:5px;
}
</style>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" />
<script src="../bootstrap/jquery.js" type="text/javascript"></script>
<script src="../bootstrap/js-script.js" type="text/javascript"></script>
</head>

</head>

<body>



<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
 
    </div>
</div>
<div class="clearfix"></div>

<div class="container">
<a href="generate.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
<form method="post" action="ok.php">
<table class='table table-bordered'>
<tr>

<th></th>
 <th>Name</th>
                 
                <th>Category</th>
                
                    <th>Amount Radius</th>
                 
                
</tr>
<?php
for($i=1; $i<$chkcount; $i++)
{
    echo $id = $chk[$i];			
	$res=$con->query("SELECT * FROM gen_info WHERE id=".$id ) or die(mysqli_error($con));
	$a=1;
	while($row=$res->fetch_assoc())
	{



		?>
		<tr>
        <td><?php echo $i++; ?></td>
       
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" /></td>
        
        
        
           <td><input type="text" name="name[]" value="<?php echo $row['name']; ?>" style="width:250px" class="input" readonly  /></td>

                             
                <td><input type="text" name="cate[]" value="<?php echo $cate; ?>" style="width:90px"  class="input" readonly  /></td>
                
                
                                      <td><input type="hidden" name="year" value="<?php echo $year; ?>" class="input"  /></td>

                                     

                                      <td><input type="hidden" name="zone[]" value="<?php echo $zone; ?>" class="input"  /></td>
                                      
                                 
               
                                      <td><input type="hidden" name="cat" value="<?php echo $cate; ?>" class="input"  /></td>
                                      
                                      <td><input type="hidden" name="z" value="<?php echo $zone; ?>" class="input"  /></td>
                                       <td><input type="hidden" name="num" value="<?php echo $chkcount; ?>" class="input"  /></td>
   <?php } ?>       
		</tr>
		<?php	
			
}
?>
<tr>
<td colspan="6">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Generate</button>&nbsp;
<a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; cancel</a>
</td>
</tr>
</table>
</form>

</div>

</body>
</html>


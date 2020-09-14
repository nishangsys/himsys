<?php include '../includes/dbc.php'; 
@session_start();
$ay=$dbcon->query("SELECT * FROM rushs where roll='1'") or die(mysqli_error($dbcon));
while($bn=$ay->fetch_assoc()){
	 $year_id=$bn['year'];
	 $current=$bn['year'];
	 $as=$bn['extra'];
	$ass=$bn['extra2'];
}
  
$username=$_SESSION['user_name'];
 $branch='BUEA';
$_SESSION['full_name']= $names;
  $level=$_SESSION['banned'];
 if($level==20 or $level==101 or $level==100){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Drug Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
   
  
    <link rel="stylesheet" media="screen" href="../css/left-fluid.css">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/another.css">
    
    <style>
ul li{
	
	border-right:2px solid#CCC;
}
ul li a{
	color:#093;
	font-weight:bold;
	font-size:16px;
}
ul li a:hover{
	color:#f00;
	background:#09C;
	font-weight:bold;
}

</style>
   
	<script type="text/javascript" src="../js/bootstrap.min.js"> bootstrap.min.js</script>
	<script type="text/javascript" src="../js/jquery.min.js"> jquery.min.js</script>
    
    
<script language="JavaScript" src="js/pop-up.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#060; font-weight:bold">BIAKA FIN PRO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?home"><span class="pull-left hidden-xs showopacity glyphicon glyphicon-home"></span> &nbsp Home</a></li>
      <li><a href="?add_mclass"><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-th-list"></span> &nbsp <b>Add Exp Main Class</b></a></li>
      
      <li><a href="?add_classes"><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-th-list"></span> &nbsp <b>Add Exp Class</b></a></li>
     
       
            <li><a href="?daily_reports" ><span class="glyphicon glyphicon-envelope"></span></span> &nbsp <b>Daily Reports</b></a></li>
    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav>
<?php }
else {
		echo $message= "<div class='alert alert-success'>ERROR. Do are not Permitted to see this Page</div>";
	 echo '<meta http-equiv="Refresh" content="0; url=login.php">';
 }

 ?>
 
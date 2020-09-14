<?php include '../includes/dbc.php'; 
@session_start();

$username=$_SESSION['user_name'];
 $branch='BUEA';
$_SESSION['full_name']= $names;
  $level=$_SESSION['banned'];
 if($level==20 or $level==5){
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
   
	<script type="text/javascript" src="../js/bootstrap.min.js"> bootstrap.min.js</script>
	<script type="text/javascript" src="../js/jquery.min.js"> jquery.min.js</script>
    
    
<script language="JavaScript" src="js/pop-up.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:#060; font-weight:bold">PANDA CONTROL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?home"><span class="pull-left hidden-xs showopacity glyphicon glyphicon-home"></span> &nbsp Home</a></li>
      
        
       <li><a href="?raw_material"  > &nbsp <span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-tags"></span> <b>Supply Zone</b></a></li>
      
      
    
        
        
        <li><a href="?sell" style="background:#333; color:#fff"> <span class="glyphicon glyphicon-euro"></span> &nbsp Sell </a></li>
        
       
            <li><a href="?debt" ><span class="glyphicon glyphicon-envelope"></span></span> &nbsp <b>Receive Debts</b></a></li>
            
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
<?php 
include '../includes/dbc.php';

 $notes=$_SESSION['user_name'];
$mkk1=$_GET["roll"];?><?php 
$mxc11=$notes;

 
  ?>

<!doctype html>
<lang en:us>
<html>
	<head>
		
		
		<!-- ---------------JAVASCRIPT LINKS---------------- -->
		<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="js/startstop-slider.js"></script>

		<script type="text/javascript" src="js/tabulous.js"></script>
		<script type="text/javascript" src="js/js.js"></script>

		<!-- ---------------GOOGLE FONTS---------------- 
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">-->
<style>
 html{ 
	margin: 0px;
	padding: 0px;
	}
	tabs{
	width: 98%;
	margin: 0 auto;
	padding: 10px;
	margin-bottom: 40px;
}

#tabs ul{
	margin: 0px;
	padding: 0px;
}

#tabs li{
	float: left;
	margin-right: 2px;
	list-style: none;
}

#tabs li a{
	display: block;
	padding: 8px 30px;
	background: url(images/navchip.png) top right no-repeat #CECECE;
	text-decoration: none;
	color: #333;
}

#tabs li a:hover{
	background-color: rgb(78, 74, 99);
	color: #999;
}

#tabs_container {
	overflow: hidden;
	position: relative;
	background: white;
	border: 1px solid #CECECE;
	padding: 20px;
}

#tabs_container div {
	width: 700px;
	margin-right: 20px;
	margin-top: -25px;
}
	#tabs_container div h2{
		font-size: 20px;
	}
	#tabs_container div ul{
		margin: 0px;
		padding: 0px;
		margin-left: 40px;
	}
		#tabs_container div ul li{
			clear: both;
			line-height: 30px;
			font-weight: bold;
		}
		#tabs_container div ul li ul{
			margin: 0px;
		}
		#tabs_container div ul li ul li{
			clear: both;
			line-height: 20px;
			text-indent: 30px;
			list-style: diamond;
			font-weight: normal;
			font-size: 12px;
		}

.transition {
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;

	-webkit-transition-delay: .3s;
	-moz-transition-delay: .3s;
	-o-transition-delay: .3s;
	-ms-transition-delay: .3s;
	transition-delay: .3s;
}

.make_transist {
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.hidescale {
	-webkit-transform: scale(0.9);
	-moz-transform: scale(0.9);
	-o-transform: scale(0.9);
	-ms-transform: scale(0.9);
	transform: scale(0.9);
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	filter: alpha(opacity=0);
	opacity: 0;
}

.showscale {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;

	-webkit-transition-delay: .3s;
	-moz-transition-delay: .3s;
	-o-transition-delay: .3s;
	-ms-transition-delay: .3s;
	transition-delay: .3s;
}

.tabulous_active {
	background: url(images/navchip.png) top right no-repeat rgb(78, 74, 99) !important;
	color: #FFF !important;
}

.tabulousclear {
	display: block;
	clear: both;
}
body{ 
	margin: 0px;
	padding: 0px;
	font-size: 14px;
	font-family: "Open Sans", verdana, "sans serif";
	}
a{
	text-decoration:none;
	}
a:hover{
	color: #F00;
	}
/* --------------------- HEADER DIV ------- */
#headerdiv{
	width: 100%;
	margin:auto;
	}

	/* --------------------- BANNER ------- */
	#banner{
		width: 90%;
		margin: auto;
		height: 100px;
		}
		#banner img{
			padding-top: 20px;
			margin-left:40px;
			float: left;
			margin-right: 20px;
			}
		#banner h1{
			padding-top: 5px;
			font-size: 25px;
			line-height: 25px;
			font-family: "Times New Roman";
			width: 400px;
			display: block;
			float: left;
			font-weight: normal;
			}
		#bannerlinks{
			width: 400px;
			float: right;
			}
		#banner ul{	
			margin: 0px;
			padding: 0px;
			float: right;
			width: 230px;
			margin-top: 30px;
			}
		#banner ul li{	
			float: left;
			list-style: none;
			//background: url(images/arrowdown.png) center left no-repeat;
			font-size: 14px;
			line-height: 40px;
			}
		#banner ul li a{	
			color: #545454;
			text-decoration: none;
			}
		#banner ul li a:hover{	
			color: #F00;
			}
		#banner ul li img{
			width: 40px;
			height: 40px;
			border: 1px solid #000;
			padding: 0px;
			border-radius: 4px;
			}
		#banner ul li ul{	
			display: none;
			margin: 0px;
			padding: 0px;
			}
		#banner ul li:hover ul{	
			display: block;
			width: 150px;
			margin: 0px;
			padding: 0px;
			position: absolute;
			z-index: 50px;
			background: #CECECE;
			}
		#banner ul li:hover ul li{
			width: 150px;
			border: none;
			border-top: 1px dotted #FFF;
			clear: both;
			margin: 0px;
			padding: 0px;
			text-indent: 10px;
			line-height: 25px;
			font-size: 11px;
			}

	/* --------------------- TOP NAVIGATION ------- */
#topnavigationdiv{
	width: 100%;
	display: table;
	background: #EBEBEB;
	}
	#topnavigation{
		width: 90%;
		height: 35px;
		margin: auto;
		}
		#topnavigation ul{
			margin: 0px;
			padding: 0px;
			}
		#topnavigation ul li{
			float: left;
			list-style: none;
			border-right: 1px solid #fff;
			font-size: 14px;
			}
		#topnavigation ul li a{
			text-decoration:none;
			color: #545454;
			line-height: 35px;
			padding-right: 20px;
			padding-left: 20px;
			display: block;
			text-transform: capitalize;
			background: url(images/navchip.png) top right no-repeat;
			}
		#topnavigation ul li a:hover{	
			background-color:  #F07800;
			}
			#topnavigation ul li ul{	
				display: none;
				margin: 0px;
				padding: 0px;
				}
			#topnavigation  ul li:hover ul {
				display: block;
				position: absolute;
				z-index: 1000;
				margin: 0px; 
				padding: 0px;
				}
			#topnavigation ul li:hover  ul li{
				width: 210px;
				background-color:  #00A5DB;
				border: none;
				border-top: 1px dotted #FFF;
				clear: both;
				margin: 0px;
				padding: 0px;
				text-indent: 0px;
				}
			#topnavigation ul li:hover  ul li a{	
				color: #FFF;
				line-height: 20px;
				padding: 5px 0px 5px 20px;
				display: block;
				background-image: none;
				}
			#topnavigation ul li:hover  ul li a:hover{
				background-color:  #F07800;
				}
			#topnavigation .down{
				background: #397A02;
				display: block;
				}
		
	/* --------------------- ANIMATION ------- */
	#pagebanner{
		with: 100%;
		height: 100px;
		background: url(images/slider2.jpg) top center no-repeat;
		}
		
	/* --------------------- ANIMATION ------- */
	#animationdiv{
		width: 100%;
		display:block;
		overflow: hidden;
		background: #F3F3F3;
		margin: auto;
		}
	#animation{
		width: 90%;
		margin: auto;
		height: 100px;
		padding-top: 10px;
		}
		#animation h2{
			line-height: 50px;
			color: #00A5DB;
			font-family: "century gothic";
			font-weight: normal;
			text-indent: 15px;
		}	
		
	
	/* --------------------- HIGHLIGHTS ------- */	
	#highlightsdiv{
		width: 100%;
		height:170px;
		margin-top:20px;
		}
		#highlights{
			width: 90%;
			display: block;
			margin: auto;
			margin-top: 20px;
			}
			#highlights .container{
				width: 27%;
				height:170px;
				background-color:#11505b;
				float: left;
				margin-left: 5px;
				
				}
			#highlights .container  h2{
				color:white;
				font-family:calibri;
				margin: 0px;
				padding: 0px;
				margin-bottom: 10px;
				background: #00A5DB;
				padding-left: 20px;
				line-height: 30px;
				}
			#highlights .container  ul{
				margin: 0px;
				padding: 20px;
				padding-left: 20px;
				padding-top: 0px;
				}
			#highlights .container ul li{	
				list-style: none;
				line-height: 20px;
				font-size: 12px;
				}
			#highlights .container  ul li a{
				color:white;
				display: block;
				text-indent: 15px;
				background: url(images/arrow.png) center left no-repeat;
				}	
			#highlights .container  ul li a:hover{
				color: #00A5DB;
				background: url(images/arrow2.png) center left no-repeat;
				}			
	/* --------------------- CONTENT AREA ------- */	
	#contentareadiv{
		width: 100%;
		background: #FCFCFC;
		}
	#contentarea{
		width: 90%;
		margin: auto;
		display: table;
		padding: 20px 0px 20px 0px;
		}		
		/* ---------- Content */
			#contents{
			width: 90%;
		
			float: left;
			background: #FFF;
			border-radius: 5px;
			padding: 15px 20px;
			margin-bottom: 15px;
			}#contents h2{	
				font-size: 30px;
				margin-top: 0px;
				font-family: "century gothic";
				font-weight: normal;
				color: #015681;
				}
			#contents img{
				max-width: 100%;
				height: auto;
				}
			#contents .alignleft{
				float: left;
				margin-right: 15px;
				}
			#contents .alignright{
				float: right;
				margin-left: 15px;
				}
			#contents p{
				line-height: 26px;
				color: #444;
				}

			#contents table{
				width: 100%;
				//border-top: 1px solid #EBEBEB;
				//border-left: 1px solid #EBEBEB;
				}
				#contents table th{
					border-bottom: 1px solid #EBEBEB;
					//border-right: 1px solid #EBEBEB;
					line-height: 30px;
					text-align: left;
					}
				#contents table td{
					//border-bottom: 1px solid #EBEBEB;
					//border-right: 1px solid #EBEBEB;
					line-height: 30px;
					}
				#contents table td a{
					background: #F00;
					color: #FFF;
					padding: 2px 10px;
					border-radius: 5px;
					font-size: 11px;
					}
				#contents table td a:hover{
					background: #FF0;
					color: #000;
					}
			
			/* ---------- PROFILE --- */
			#contents .profile{
				width: 80%;
				margin: auto;
				}
			#contents .profile th{
				text-align: right;
				width: 40%;
				padding-right: 10px;
				}
			#contents .profile img{
				width: 150px;
				height: auto;
				border-radius: 5px;
				}

			/* ---------- DISCUSSION --- */
			#contents .discussion{
				margin: 0px;
				padding-bottom: 0px;
				}
			#contents .discussion p{
				width: 95%;
				margin: auto;
				padding: 10px;
				padding-bottom: 25px;
				border-radius: 10px;
				font-size: 13px;
				font-weight: normal;
				line-height: 20px;
				background: url(images/callout01.png) bottom left no-repeat #CECECE;
				}
			#contents .discussion h3{		
				font-size: 14px;
				margin-top: -5px;
				}
		
		#content{
			width: 70%;
			float: right;
			background: #FFF;
			border-radius: 5px;
			padding: 15px 20px;
			margin-bottom: 15px;
			}
			#content h2{	
				font-size: 30px;
				margin-top: 0px;
				font-family: "century gothic";
				font-weight: normal;
				color: #015681;
				}
			#content img{
				max-width: 100%;
				height: auto;
				}
			#content .alignleft{
				float: left;
				margin-right: 15px;
				}
			#content .alignright{
				float: right;
				margin-left: 15px;
				}
			#content p{
				line-height: 26px;
				color: #444;
				}

			#content table{
				width: 100%;
				//border-top: 1px solid #EBEBEB;
				//border-left: 1px solid #EBEBEB;
				}
				#content table th{
					border-bottom: 1px solid #EBEBEB;
					//border-right: 1px solid #EBEBEB;
					line-height: 30px;
					text-align: left;
					}
				#content table td{
					//border-bottom: 1px solid #EBEBEB;
					//border-right: 1px solid #EBEBEB;
					line-height: 30px;
					}
				#content table td a{
					background: #F00;
					color: #FFF;
					padding: 2px 10px;
					border-radius: 5px;
					font-size: 11px;
					}
				#content table td a:hover{
					background: #FF0;
					color: #000;
					}
			
			/* ---------- PROFILE --- */
			#content .profile{
				width: 80%;
				margin: auto;
				}
			#content .profile th{
				text-align: right;
				width: 40%;
				padding-right: 10px;
				}
			#content .profile img{
				width: 150px;
				height: auto;
				border-radius: 5px;
				}

			/* ---------- DISCUSSION --- */
			#content .discussion{
				margin: 0px;
				padding-bottom: 0px;
				}
			#content .discussion p{
				width: 95%;
				margin: auto;
				padding: 10px;
				padding-bottom: 25px;
				border-radius: 10px;
				font-size: 13px;
				font-weight: normal;
				line-height: 20px;
				background: url(images/callout01.png) bottom left no-repeat #CECECE;
				}
			#content .discussion h3{		
				font-size: 14px;
				margin-top: -5px;
				}
		
		/* ---------- Sidebar */		
		#sidebar{
			width:22%;
			float: left;
			}
			
			#sidebar .container{
				width: 100%;
				background: #FFF;
				border-radius: 5px;
				padding: 15px;
				margin-bottom: 20px;
				}
				h3{
				font-size: 18px;
				line-height: 30px;
				font-family: "century gothic";
				font-weight: normal;
				margin: 0px;
				margin-bottom: 10px;

				}
			#sidebar .container h2{
				font-size: 22px;
				line-height: 30px;
				font-family: "century gothic";
				font-weight: normal;
				margin: 0px;
				margin-bottom: 10px;

				}
			#sidebar .container ul{
				margin: 0px;
				padding: 0px;
				}	
			#sidebar .container ul li{
				list-style: none;
				border-bottom: 1px solid #CCC;
				line-height: 30px;
				background: url(images/arrowdown.png) center left no-repeat;
				text-indent: 20px;
				}
			#sidebar .container ul li h3{
				color: #009;
				margin: 0px;
				font-weight: normal;
				}
			#sidebar .container ul li h3 a{
				color: #007FFF;
				text-decoration: none;
				}
			#sidebar .container ul li span{
				background: #888;
				color: #FFF;
				border-radius: 10px;
				font-size: 10px;
				padding: 10px;
				float: right;
				line-height: 0px;
				text-indent: 0px;
				margin-top: 5px;
				}

	/* --------------------- FOOTER AREA ------- */
	#footerarea{
		width:100%;
		background-color:#022e3b;
		display: table;
		}
		#footer{
			width:1000px;
			margin:auto;
			}
		#footer .container1{
			width: 22%;
			margin-left:0px;
			background-color:#1b688c;
			float: left;
			}
			#footer .container1  h2{
				color: #f75413;
				font-family:calibri;
				margin: 15px 15px;
				padding: 0px;
				margin-bottom: 10px;
				font-weight: normal;
				}
			#footer .container1  ul{
				margin: 0px;
				padding: 0px;
				}
			#footer .container1 ul li{	
				list-style: none;
				line-height: 30px;
				font-size: 12px;
				border-top: 1px solid #999;
				margin: 0px 15px 0px 15px;
				
				}
			#footer .container1  ul li a{
				color:white;
				}
		#footer .container{
			width: 22%;
			margin-left:30px;
			float: left;
			}
			#footer .container p{
				line-height: 16px;
				color: #1b688c;
				font-size: 13px;
				}
			#footer .container  h2{
				color: #f75413;
				font-family:calibri;
				margin: 15px 0px;
				padding: 0px;
				margin-bottom: 10px;
				font-weight: normal;
				}
			#footer .container  ul{
				margin: 0px;
				padding: 0px;
				}
			#footer .container ul li{	
				list-style: none;
				line-height: 20px;
				font-size: 12px;
				}
			#footer .container  ul li a{
				color: #1b688c;
				}	
			#footer .container  ul li a:hover{
				color: #FFF;
				}
	/* ----------------- FOOTER2 -- */
	#footerarea2{
		width: 100%;
		display: table;
		background: #000;
		}
		#footer2{
			width: 1000px;
			display: table;
			margin: auto;
			color: #999;
			line-height: 30px;
			font-size: 11px;
			font-family: verdana;
			}
		#footer2 span{	
			float: right;
			font-size: 12px;
			line-height: 30px;
			}
			#footer2 span a{	
				color: #0D62B7;
				}

</style>
	</head>
  
	<body><div id="contentareadiv">
			<div id="contentarea">
			</div></div><div id="contents">
			<div id="tabs-2">	
			<div style="float:left; width:850px; height:auto;">
			
		
		<h2>Fee Control Center</h2>
      
		
			<div id="tabs_container">
              <?php
		$query 	= mysql_query("SELECT * FROM `control` ORDER BY roll ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total'];
	if($amt > 0) {
		$qry = "INSERT INTO control(fees,class) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "('".$_POST["firstin$i"]."', '".$_POST["department$i"]."'), "; // loop the mysql_query values to avoroll more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry); // Execute the mysql_query
	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.location.href = "?view&result=added";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// control delete case using checkboxes
if(isset($_POST['SubmitDelete'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$delete = mysql_query("DELETE FROM control WHERE roll = '".$_POST["delete$i"]."'"); // Run the delete query insrolle for loop
	}

	// Redirect for each cases
	if($delete) {
		$msg = '<script type="text/javascript">window.location.href = "?view";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

// control update case
if(isset($_POST['SubmitUpdate'])) {
	$_POST = array_map("ucwords", $_POST);
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$update = mysql_query("UPDATE `control` SET `fees` = '".$_POST["firstin$i"]."',class='".$_POST["dept$i"]."' WHERE `roll` = '".$_POST["roll$i"]."'") or die(mysql_error()); // Run the Mysql update query insrolle for loop
	}
	
	// Redirect for each cases
	if($update) {
		$msg = '<script type="text/javascript">window.location.href = "?update&result=updated";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Simple control Insert, Read, Update, Delete (CRUD) using PHP, MySql by Asif18</title>
<meta name="keywords" content="control insert in php, control crud using PHP MySql, control insert update delete using php mysql"/>
<meta name="description" content="control insert update delete CRUD using PHP MySql. A simple way to insert, update and delete control values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:800px;
	font-family:Arial;
	color:#333;
	font-size:14px;
	height:1900px; 
	overflow:scroll;
}

.as_country_container{
	padding:20px;
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
	min-wrollth:500px;
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solroll #17A3F7;
	min-wrollth:400px;
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
	border:#CCC solroll 1px;
	padding:5px;
}

.input:focus {
	border:#999 solroll 1px;
	background:#FEFDE0;
	padding:5px;
}
</style>
</head>

<body>
<div class="as_wrapper">

    <p>To add control do the Following<br>
    1. Type The Number of classes you want to add, click on Generate and fill the Form. The Click to add<br>
    2. To DELETE control
    <br>Thick the small box behind the fee you want to delete and Click on Delete<br>
     3. To Update control
    <br>Just Cancel the one already in the box of control and add the new fee
    
    </p
    >
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center">
        <tr>
            <td style="background:#1188aa; color:#fff; padding:10px 10px">Number  to add</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> /></td>
            <td><input type="submit" value="Generate"  /></td>
            <td style="background:; font-weight:16px; padding:10px 10px">| <a class="a" href="?view" style="color:#fff; padding:10PX 10PX; ">Delete </a></td>
            <td style="background:; font-weight:16px; padding:10px 10px">| <a class="a" href="?update" style="color:#fff;  padding:10PX 10PX; background:#060">Update Amounts </a></td>
        </tr>
        </table>
        <br />
        </form>
        <?php
        // Get the amount to be generated
        if(isset($_GET['amt'])) {
			if($_GET['amt'] > 0) {
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table" style="width:500px">
            <tr>
                <td align="center">Sno</td>
                <td align="center">Control Amount</td>
                <td align="center">Department</td>
                               

                
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="number" name="firstin<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="department<?php echo $i; ?>" style="width:350px" class="input" /></td>
                
                
                
               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="4" align="center">
                <input type="hidden" name="total" value="<?php echo $i-1; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="submit" value="Add" /></td>
            </tr>
            </table>
            </form>
        <?php 
			}
			else {
			?>
            <table align="center">
            <tr>
                <td align="center">Enter greater than '0'</td>
			</tr>
            </table>
            <?php
			}
        }
        // Case for view and delete the data
        elseif(isset($_GET['view'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table_view" style="width:500px">
            <tr class="heading" style="background:#1188AA; color:#FFF">
              <td align="center">&nbsp;</td>
              <td align="center">S/N;</td>
              <td align="center">Control Amount</td>
                <td align="center">Department</td>
                                <td align="center">Area</td>


            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['fees']; ?></td>
                <td><?php echo $row['class']; ?></td>
                
                <td><?php echo $row['year_id']; ?></td>
                                <td><?php echo $row['ids']; ?></td>

            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center" style="width:500px">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitDelete" value="Delete" /></td>
            </tr>
            </table>
            </form>
		<?php
			}
        }
        // Case for view and update the rows
        elseif(isset($_GET['update'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center">
            <tr style="background:#1188aa; color:#fff">
              <td align="center">S/N;</td>
              <td align="center">Control Amount</td>
                <td align="center">Department</td>
                <td align="center">Level</td>
                                <td align="center">Area</td>
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="roll<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="firstin<?php echo $i; ?>" value="<?php echo $row['fees']; ?>" class="input"  style="width:80PX"/></td>
                <td><input type="text" name="dept<?php echo $i; ?>" value="<?php echo $row['class']; ?>" class="input" style="width:350PX"/></td>
                
                 <td><input type="text" name="year_id<?php echo $i; ?>" value="ALL" class="input" style="width:50PX" /></td>
                                  <td><input type="text" name="ids<?php echo $i; ?>" value="<?php echo $row['ids']; ?>" class="input" style="width:50PX"/></td>

               
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Update" /></td>
            </tr>
            </table>
            </form>
        <?php
        	}
		}
        ?>
	</div>
			
			
			
			
			
			</div>
			
			
			
			
			


	
</div>	
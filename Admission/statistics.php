<?php 
include '../includes/dbc.php';

 $notes=$_SESSION['user_name'];
$mkk1=$_GET["roll"];?><?php 
$mxc11=$notes;
if(empty($mxc11)){

 $statusfbio="";
 }
elseif($mxc11>'1' ){
$departments="departmet";
$statusfbioyy="levels";
 $statusfbio="student"; $statusfbioy="student_id";
 
 
 $nname="firstname";
  $lname="lastname";
}elseif($mxc11>='1'  && $mxc11<='1' ){

 $nname="firstname";
  $lname="lastname";
 $statusfbio="teacher";
 
  $statusfbioy="teacher_id";
}
?>
<?php
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
?>
<?php 
 $web=$row['user_name']; 
?>
<?php } ?>

<?php
$query="select * from teacher where teacher_id='$web'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
?>
<?php 
 $fname=$row['firstname']; 
 
  $middlename=$row['middlename']; 
  $lname=$row['lastname']; 
    $ids=$row['teacher_id']; 
	 $idssp=$row['teacher_id']; 
?>
<?php } ?>

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
			
		
		<h2>Upload Statistics Center</h2>
		
			<div id="tabs_container">
		<?php
		$students=mysql_query("SELECT COUNT(firstname) as total from student") or die(mysql_error());
		while($rows=mysql_fetch_assoc($students)){
			 $one=$rows['total'];
		}
		
		$deptstu=mysql_query("SELECT COUNT(firstname),departmet from student GROUP BY departmet") or die(mysql_error());
		$i=1;
		?>
	
  <table style="line-height:2; width:90%; margin:auto">
		<tr>
		<td>&nbsp;:</td><td>Description</td><td>Number</td><td>Percentage</td></tr>
        
        <td>1</td><td>Tot Number of Registered Students</td><td><?php echo $one; ?></td><td>100%</td></tr>
        <?php while($row=mysql_fetch_assoc($deptstu)){ ?>
        
        <tr><td><?php echo $i++; ?></td><td>Number in <?php echo $row['departmet']; ?></td><td><?php echo $row['COUNT(firstname)']; ?>
        </td><td><?php echo round(( $row['COUNT(firstname)']/$one)*100) ?> %</td></tr>
       <?php } ?>


	</table>
    <h2>Lecture Notes Upload Stats</h1>
  <table style="line-height:2; width:100%; margin:auto">
  	<?php
		$files=mysql_query("SELECT COUNT(floc),coursecode,teacher  from files  where fname='".$_GET['year_id']."' GROUP BY coursecode") or die(mysql_error());
		$i=1;
		
		?>
	
		<tr>
		<td>#:</td><td>Tutor's Name</td><td>Subject</td><td>Total Uploads</td></tr>
        
     
        <?php while($row=mysql_fetch_assoc($files)){ ?>
        
        <tr>
                    <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="Lightpink">';
 }
		
		?>
        
        
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['teacher']; ?>
        <td><?php 
		$file=mysql_query("SELECT * from `subject` where subject='".$row['coursecode']."' GROUP BY subject ") or die(mysql_error());
		 while($ro=mysql_fetch_assoc($file)){
		echo $ro['year_id'];} ?></td>
        
        <td><?php echo $row['COUNT(floc)']; ?>
       </td></tr>
       <?php } ?>


	</table>


		
		
		
		
		</div></div>
			
			
			
			
			
			
			
			</div>
			
			
			
			
			


	
</div>	
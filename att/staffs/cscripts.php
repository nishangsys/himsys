<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>



    <link href="template1/tabcontent.css" rel="stylesheet" type="text/css" />
            <link href="../style.css" rel="stylesheet" type="text/css" />
            <style>

#container {
	width:95%;
	background:white; 
	margin: 0 auto;
	padding:20px;

}
#chat_box {
	width:90%; 
	height:400px;
	
}
#chat_data {
	width:100%; 
	padding:5px; 
	margin-bottom:5px;
	border-bottom:1px solid silver;
	font-weight:bold;
}
input[type='text']{
	width:100%; 
	height:40px;
	border:1px solid gray; 
	border-radius:5px;
}
input[type='submit']{
	width:100%; 
	height:40px;
	border:1px solid gray; 
	border-radius:5px;
	
}

.bo1{
	float:left;
	width:300px;
	height:300px;
	border:1px solid#000;
}
.bo2{
	float:left;
	width:95%;
	height:auto;
	padding-bottom:20px;
	border:1px solid#000;
	background:#eee;
	z-index:3;
}
#chat{
	border:1px dashed#000;
	padding:15px 15px;
	height:380px;
	width:100%;
	overflow:scroll;
}
.hea{
	width:100%;
	height:auto;
	padding:10px 0px;
	background:#333;
	overflow:hidden;
}
.a{
	width:auto;
	float:left;
	border-right:1px solid#fff;
	height:auto;
	padding:10px 10px;
	color:#fff;
	display:inline;
	position:relative;
	
}
form textarea,
form select {
		background-color: #fff;
		border: 1px solid rgb( 186, 186, 186 );
		border-radius: 1px;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
		display: block;
		font-size: 1em;
		margin:10px auto;
		padding: .4em .55em;	
		text-shadow: 0 1px 1px rgba(255, 255, 255, 1);
		transition: all 400ms ease;
		width: 85%;
	}
</style>


</head>
<body>

<?php
include '../dbc.php';
@session_start();
	$usn=$_SESSION['user_name'];
	echo $ids= $_SESSION['id'];
	$u=mysql_query("SELECT * FROM users where user_name!='$usn'") or die(mysql_error());
	
	?>
    
    
    <div class="bo2">
    
    <div class="hea">
     <?php
		while($row=mysql_fetch_assoc($u)){
			$names=$row['user_name'];
		?>
    <div class="a">
	
	<a href="<?php $_SERVER['PHP_SELF']; ?>?roll=<?php echo $row['id']; ?>"><?php echo $row['user_name']; ?></a>
    
    </div>
    
    <?php } ?>
    
    
    </div>
    
   
   <?php
	$idd=$_GET['id'];

	
	?>
    <div style="background:#fff; padding:10px 0px; width:100%; color:#000">Your are Chating With <span style="color:#F00; font-weight:bold; text-decoration:blink">
    <?php
	
	$u=mysql_query("SELECT * FROM users where id='$idd' ") or die(mysql_error());
	while($row=mysql_fetch_assoc($u)){
			echo $namess=$row['user_name'];
				 $i=$row['id'];
	}
	
	?>
    </span>
     </div>
               
        	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="name"  value="<?php echo $namess; ?>" />
             <input type="hidden" name="myid"  value="<?php  echo @session_start();
			 $_SESSION['id']; ?>" />
            	
            <input type="hidden" name="idf"  value="<?php echo $i; ?>" />
            <textarea name="message" placeholder="your message"></textarea>
            <button type="submit" name="send">Send</button>
            
            
            </form>
            
    
    
     <?php
	if(isset($_POST['send'])){
		@session_start();
		$name=$_POST['name'];
		$id=$_SESSION['id'];
		$mssg=$_POST['message'];
		$from=$_POST['myid'];
		$to=$_POST['idf'];
		$se=$_SESSION['user_name'];
		$dats=date('d-m-Y');
		$HOUR=date('h');
		$sec=date('i');
		$mminsec=date('s')
		;
		$ms=$mminsec+1;
		$mi=$mminsec+2;
		$mj=$mminsec+3;
		$mk=$mminsec+4;
		$p=mysql_query("INSERT INTO chat set name='$name', message='$mssg',yourid='$id',sentby='$se'
		,sentto='$to',date2='$dats',hour='$HOUR',sec='$sec',mmsec='$mminsec',ms='$ms',mi='$mi',mj='$mj',mk='$mk'") or die(mysql_error());
		echo "<embed loop='false' src='../img/notify.ogg' hidden='true' autoplay='true' ";
	}
	
	?>
        </div>
    </div>
    
    
</body>
</html>
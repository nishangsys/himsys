<?php

//include '../dbc.php';
session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	
		


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="tabcontent.js" type="text/javascript"></script>
    <link href="template1/tabcontent.css" rel="stylesheet" type="text/css" />

<title>Chat Box</title>
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
	height:300px;
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
	width:140px;
	float:left;
	border-right:1px solid#fff;
	height:auto;
	padding:10px 0px;
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
<script>
	function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

</script>

<body onload="ajax();">
<div class="right">

<div id="container">
		<div id="chat_box">
		<div id="chat"></div>
		</div>
<iframe src="cscripts.php" style="width:900px; height:300px"></iframe>
    
    
    </div>
   

</div>
</body>
</html>
<?php }   ?>
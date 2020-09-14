<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User name Live availability Check</title>


<script src="jquery.min.js" type="text/javascript"></script>
<SCRIPT type="text/javascript">
$(document).ready(function()
{
$("#username").change(function() 
{ 
var username = $("#username").val();
var msgbox = $("#status");

if(username.length > 4)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

$.ajax({  
    type: "POST",  
    url: "ajax.php",  
    data: "username="+ username,  
    success: function(msg){  
   $("#status").ajaxComplete(function(event, request){ 
	if(msg == 'OK')
	{ 
	
	    $("#username").removeClass("red");
	    $("#username").addClass("green");
        msgbox.html('<img src="available.png" align="absmiddle">');
	}  
	else  
	{  
	     $("#username").removeClass("green");
		 $("#username").addClass("red");
		msgbox.html(msg);
	}  
   
   });
   } 
   
  }); 

}
else
{
$("#username").addClass("red");
$("#status").html('<font color="#cc0000">Please nter atleast 5 letters</font>');
}
return false;
});

});
</SCRIPT>

<style type="text/css">
body
{
font-family:Tahoma, Geneva, sans-serif;
}
#status
{
font-size:11px;
margin-left:10px;
}
.green
{
background-color:#CEFFCE;
}
.red
{
background-color:#FFD9D9;
}
input
{
font-size:16px;
width:200px;
height:25px;
border:solid 1px #333333;
padding:4px;
}
h2 { font:Tahoma, Geneva, sans-serif; font-size:18px; color:#396693;}
h2 > .names { font:Tahoma, Geneva, sans-serif; font-size:18px; color:#C69;}


</style>

</head>

<body>
<h2 align="center"> Already existing names <span class="names"> arunkumar, 2my4edge, hellow, world </span> </h2>
<div style="margin:0 auto; border:1px #0F0 solid; width:450px; height:150px; margin-top:25px; padding-left:25px;">
<input type="text" name="username" id="username" style="margin-top:35px;" />&nbsp; &nbsp; &nbsp;
<span id="status"></span>
</div>
<h3 align="center">Main tutorial <a href="http://www.2my4edge.com/2013/07/username-live-availability-check-using.html" > 2my4edge </a> </h3>

</body>
</html>
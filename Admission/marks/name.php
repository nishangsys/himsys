<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocomplete search using PHP, MySQLi, ajax and jQuery</title>
<script type="text/javascript" src="myjs.js"></script>
<script type="text/javascript">
$(function(){
$(".search_keyword").keyup(function() 
{ 
	var search_keyword_value = $(this).val();
	var dataString = 'search_keyword='+ search_keyword_value;
	if(search_keyword_value!='')
	{
		$.ajax({
			type: "POST",
			url: "search.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$("#result").html(html).show();
			}
		});
	}
	return false;    
});

$("#result").live("click",function(e){
	var $clicked = $(e.target);
	var $name = $clicked.find('.country_name').html();	
	var decoded = $("<div/>").html($name).text();
	$('#search_keyword_id').val(decoded);
});
$(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search_keyword")){
		$("#result").fadeOut(); 
	}
});
$('#search_keyword_id').click(function(){
	$("#result").fadeIn();
});
});
</script>
</head>

<body>
<div class="con">
<form method="post" action="">
	
		<input type="text" class="search_keyword" id="search_keyword_id" autocomplete="off" placeholder="Product Search" name="product" /><button name="search">Search</button>
		<div id="result"></div><br><br>
		<i style='font-size:12px;color:#FF0000;'>(Type product  name)</i>
	</div>
    </form>
    <iframe src="index12.php?product=<?php echo $_POST['product'];?>" style="width:960px; height:900px"></iframe>
</body>
</html>
<style type="text/css">
	.web{
		font-family:tahoma;
		size:12px;
		top:10%;
		border:1px solid #CDCDCD;
		border-radius:10px;
		padding:10px;
		width:38%;
		margin:auto;
	}
	h1{
		margin: 3px 0;
		font-size: 13px;
		text-decoration: underline;
	}
	.tLink{
		font-family:tahoma;
		size:12px;
		padding-left:10px;
		text-align:center;
	}
	#search_keyword_id
	{
		width:300px;
		border:solid 1px #CDCDCD;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:320px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CDCDCD solid;
		background-color: white;
	}
	.show
	{
		font-family:tahoma;
		padding:10px; 
		border-bottom:1px #CDCDCD dashed;
		font-size:15px; 
	}
	.show:hover
	{
		background:#364956;
		color:#FFF;
		cursor:pointer;
	}
	.con{
	width:900px;
	height:80px;
	float:left;
	
	border:1px solid#00F;
	padding:30px 30px;
	
}
</style>
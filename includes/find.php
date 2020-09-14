<?php

require_once '../../../MUSANGO/functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
		
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANG ISAAC</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
        <style>
		.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:3px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
		</style>
		<!--//webfonts-->
</head>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
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
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>


<body>


    
    <div class="right" >
    <?php customers(); 
	
	?>
     

<div class="content">
<form method="post" action="?search">
<table style="background:#CFF">
<tr>
<td>
<input type="text" class="search" id="searchid" placeholder="Search for product to update" name="name" autocomplete="off" /></td>
<td><button type="submit" name="search" class="myButton"   >Search</button></td></tr>

<div id="result">
</div>
</div>
  
  </table>
    </div>
    
    
   
    </div>
	
    
   <?php
   if(isset($_GET['search'])){
	   $product=$_POST['name'];
   
   
   
   
   ?>
   <iframe src="../content/UPDATE/index12.php?product=<?php echo $product; ?>" style="width:100%; height:2500px"></iframe>
   <?php } ?>
			
		 		
</body>
</html>
<?php }  ?>
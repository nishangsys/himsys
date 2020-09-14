<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
		
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANGt</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
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
<style>
.b{
	float:left;
	height:250px;
	width:200px;
	float:left;
	margin-left:30px;
	margin-top:80px;
	background:#eee url(../img/5.png) center no-repeat;
	border-radius:150px 150px 150px 150px ;
}
.b2{
	float:left;
	height:auto;
	overflow:hidden;
	padding-bottom:20px;
	width:300px;
	float:left;
	background:#eee;
	border-bottom:1px solid#666;
	
	
}

</style>

<body>


    
  
   <div class="right" style="width:100%">
   
  
     <?php
	 $old=$_GET['id'];
	 $block=$_GET['floor'];
	  $CHECK=mysql_query("SELECT * from  rooms,categories  where rooms.num='".$old."' and rooms.floor='".$block."'
	  and categories.cat=rooms.cateogry LIMIT 1") or die(mysql_error());
	  while($a=mysql_fetch_assoc($CHECK)){
	    
		   
	 
	 ?>
     <h1 style="background:#000; color:#FF0">Details of Room <?php echo $a['num']; ?></h1>
     <div class="b">
     </div>
     <div class="b2">
     <p style="padding:10px 10px; line-height:2">
     1.<b>Room Number</b>: <?php echo $a['num']; ?></br>
     2.<b>Block</b>: Block <?php echo $block; ?></br>
     3.<b>Room Facilities</b>:<br>  <?php echo "".$a['facilities']; ?></br>
     4.<b>Room Maximum Price</b>: <?php echo number_format($a['amt']); ?> Frs</br>
     5.<b>Room Manimum Price</b>: <?php echo number_format($a['lastprice']); ?> Frs</br>
     
     </p>
     </div>
    
   
    </div>
    <?php } ?>
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php }  ?>
<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}
else {
	@session_start();
	
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
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


<body>


    
  
   
  
     <?php
	  $old=$_GET['id'];
	  $today=date('d-m-Y');
	  $area=$_GET['area'];
	$cust="SELECT * from daily where date='$today' and paidto='$old' LIMIT 1     ";
	$run=mysql_query($cust) or die (mysql_error());
	
		   
	 
	 ?>
     <h1 style="background:#1188aa; color:#fff; padding:20px 0px; text-align:center; color:#fff"><?php echo $old; ?> Record for Today</h1>
     <div style="width:320px; height:auto; overflow:hidden;">
    
   <div style="width:50px; height:30px; text-align:center; border:1px solid#000; float:left">S/N</div>
   
    <div style="width:250px; height:30px; text-align:center; border:1px solid#000; float:left">Total Amount Received</div>
    <?php   while($ro=mysql_fetch_assoc($run)){?>
    
    
    <div style="width:50px; height:30px; text-align:center; border:1px solid#000; float:left">1</div>
   
    <div style="width:250px; background:#f00; color:#ff0; height:30px; text-align:center; border:1px solid#000; float:left"><?php
	 $old=$_GET['id'];
	  $today=date('d-m-Y');
	  $area=$_GET['area'];
	$cust=mysql_query("SELECT SUM(rec) from daily where date='$today' and paidto='$old' AND area='$area' ") or die(mysql_error());
	while($row=mysql_fetch_assoc($cust)){
		echo number_format($row['SUM(rec)']);
	}
	
    
	?></div>
    </div>
    
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } } ?>

<?php 



$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
 }
 
?>



<div class="eachrec" style="  background-image: url('logos.png');
    background-repeat: no-repeat;
    
    background-position: center;  " >
	<div class="rechead" style="height:120px; " >
    <img src="logo.jpg" />
    <div class="oth" style=" height:110px;  ">
    <h1 style="font-size:16px; background:#333; color:#fff"><?php echo $clients; ?></h1>
    <h2><?php echo $AD ?></h2>
    <h2>Address: <?php echo $TEL ?></h2>
    <h2> <?php echo $vil; ?></h2>
 
    </div></div>
    
   
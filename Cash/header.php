
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
	<div style="height:120px; width:95% " >
    <img src="header.png" />
    </div>
    
   
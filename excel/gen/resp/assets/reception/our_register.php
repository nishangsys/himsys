<?php

require_once '../functions/functions.php';
@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISAHNG</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">
<h1>Membesr Zone</h1>

    <div style="width:98%; height:auto; overflow:hidden; border:1px solid#088389; padding-bottom:30px" > 
  
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<table border=0 align=center style="background:#088389; color:#fff">
<tr><td>ENTER BARCODE</td><td><input type="text" name="barcode" style="padding:10px 10px; width:300px" /></td>
</tr>

</form>
</table>

   
  
    <?php
$txtbarcode=$_POST['barcode'];
$today=date('d-m-Y');
$result=mysql_query("SELECT * from members_times,member where members_times.matricule='".$txtbarcode."' and
members_times.matricule=member.matric  ") or die(mysql_error());
while ($row=mysql_fetch_assoc($result)){
	 $ban=$row['level'];
	 $dd=$row['again'];
?>
<br>
<?php 
$today=date('d-m-Y'); 	
	 $date1 = date_create($row['duedate']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
if($ban=='2'){
	echo "<span style='color:#f00; margin-left:40px; font-size:20px; text-align:center; font-weigh:bold'>
	
	SORRY  ".$row['name']." Account Has been Suspened. Try again Later.</span>
	
	";
}

	
	
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		else if($date2>$date1){
	
	echo "<span style='color:#1188aa; margin-left:40px; font-size:20px; text-align:center; font-weigh:bold'>
	
	SORRY  ".$row['name']." Account Has been <span style='color:#f00'>Expired</span>. Update  Situation.</span>
	
	";
}
	else {

?>
<div style="width:250px; height:250px; float:left; border:1px solid#000; margin-left:30px">
<img src="album/<?php echo $row['photo']; ?>" style="width:250px; height:250px">
</div>

<div style="width:550px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#fff; background:#088389; float:left; border:1px solid#000; margin-left:30px">
<?php echo $row['name']; ?>
</div>



<div style="width:550px; margin-top:20px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#fff; background:#088389; float:left; border:1px solid#000; margin-left:30px">
<?php echo $row['disc']; ?>(<?php echo $row['inter']; ?>)
</div>


<div style="width:550px; margin-top:20px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#fff; background:#088389; float:left; border:1px solid#000; margin-left:30px"> You are owing
<?php echo number_format($row['owed']); ?> Frs
</div>


<div style="width:550px; margin-top:20px; height:auto; font-size:20px; font-weight:bold; text-align:center;
 padding:10px 10px; color:#333; float:left; border:1px solid#000; margin-left:30px"> Membership expires in
<?php
    $today=date('d-m-Y'); 	
	 $date1 = date_create($row['duedate']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'>Deadline has Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today is left</span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format(" %m months and %d days")."&nbsp;"."<br>";
		
		}
		?>
</div>


   <?php } }?>
    </div>
    </div>
   
    
  
	<div class="clear"></div>		
		 		
</body>
</html>
<?php } ?>
<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>




<body>

<div class="right">

    <?php
	$today=date('Y');
	$cust="SELECT * from finances where finances.bal>0 order by name  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>CUSTOMERS'S NAME</td>
    <td>LOGDED IN </td>
    <TD>ROOM NO</TD>
    <td>AMT OWED</td>
    <td>DAYS LEFT</td>
    <td>RECEIVE CASH</td>
    <?php while($row=mysql_fetch_assoc($run)){
		$cat=$row['stu_name'];
		$id=$row['stu_id'];
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#FFF; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo  $row['date'];?></td>
    <td>Room <?php echo  $row['room'];?></td>
    <td><?php echo  number_format($row['bal']);?> Frs</td>
    <td>
     <?php
		
		$today=date('d-m-Y'); 	
	 $date1 = date_create($row['duedate']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'>Deadline has Expired</span>";
		}
		
		
		else{
			
        $diff = date_diff($date1,$date2);
		
        echo $diff->format(" %m months and %d days")."&nbsp;"."Left"."<br>";
		//echo $endDate = date("m/d/Y", strtotime("$startDate +".$date." days"));
		
		}
		
	
		
		 ?>
    
    
    </td>
    <td>
      <a href=javascript:popcontact('paydebt.php?out=<?php echo $row['id'] ?>') style="#1188AA">Receive!</a></td>

    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>
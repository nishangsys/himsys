<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

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
	$year=date('Y');
	 $cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
	$cust="SELECT * from visitors where year='$year' order by month  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
    
    <form method="post" action="printbinq.php">
	<table style="background:#1188aa; color:#fff; width:100%">
    	
        
   
	
         <tr><td>Visitors from</td><td><select name="from" style="width:80px" >
					<option value="<?php echo $day; ?>"  ></option>
					<?php 
					for($day=01;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>
                 <td>To</td><td><select name="to" style="width:80px" >
					<option value="<?php echo $day; ?>"  ></option>
					<?php 
					for($day=01;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>
      <td>Month </td><td><select name="month" style="width:120px" />
               
              <option value="1">January</option>
              <option value="2">Febuary</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				

               </select></td>
            <td>Year</td><td><select name="year" style="width:90px" >
					<option value="<?php echo $day; ?>"  ></option>
					<?php 
					for($day=2015;$day<=2060;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>

       
                  
               
               <td><button type="submit" name="print" >PRINT visitors</button></td>
        
        </tr>
    
    </table>    
   

</form>

    <table style="line-height:1.5; width:100%">
    <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td> NAME</td>
    <td>DATE</td>
    <TD>CONTACTS</TD>
    <td>TOPIC</td>
    <td>VIEW</td>
    <?php while($row=mysql_fetch_assoc($run)){
	
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo  $row['date'];?></td>
    
   <td><?php echo  $row['tel'];?></td>
   <td><?php echo  $row['why'];?></td>
   <td>    <a href=javascript:popcontact('../reception/seevistor.php?roll=<?php echo $row['id'] ?>') style="color:#1188AA">See more</a></td>
</td>
    </tr>
    
    <?php } ?>
    </table>
   
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } ?>
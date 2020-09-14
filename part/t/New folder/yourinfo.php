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
	  $CHECK=mysql_query("SELECT * from  customers,finances  where customers.client_id='$old'
	  and customers.client_id=finances.yourid LIMIT 1") or die(mysql_error());
		    while($ro=mysql_fetch_assoc($CHECK)){
		   
	 
	 ?>
    
    <table border="1">
              <tr><td>Names</td><td><?php echo $ro['stu_name']; ?></td></tr>
              
               
                <tr><td>Date of Birth</td><td><?php echo $ro['dor']; ?></td></tr>
                
              <tr><td>Nationality</td><td><?php echo $ro['pof']; ?> </td></tr>
              
              
                <tr><td>Tel</td><td><?php echo $ro['tel']; ?></td></tr>
                
              <tr><td>Email</td><td><?php echo $ro['email']; ?> </td></tr>
              
              
                <tr><td>Country of Permanent Resident</td><td><?php echo $ro['gname']; ?></td></tr>
                
             
              
              
                <tr><td>Arriving From</td><td><?php echo $ro['ayear']; ?></td></tr>
                
              <tr><td>Travelling To</td><td><?php echo $ro['gemail']; ?> </td></tr>
               <tr><td>Cuurently with how many persons in the Room</td><td><?php echo $ro['gemail']; ?> </td></tr>

                     <tr><td>Date of First Visit</td><td style="background:#FFC"><?php  $CHECK=mysql_query("SELECT reg_date as first from  customers  where stu_name='".$ro['stu_name']."' order by reg_date  LIMIT 1") or die(mysql_error());
		    while($ros=mysql_fetch_assoc($CHECK)){
				echo $ros['first'];
			}?></td></tr>
               <tr><td>How many times have you visited</td><td style="background:#FFC"><?php  $CHECK=mysql_query("SELECT COUNT(name) as total from  finances  where name='".$ro['stu_name']."' ") or die(mysql_error());
		    while($ros=mysql_fetch_assoc($CHECK)){
				echo $ros['total'] ."&nbsp;(times)";
			}?></td></tr>
            
      

                  <tr><td>Sex</td><td><?php echo $ro['category']; ?>
               </td></tr>
                
                            
               
               
               
                <tr><td>NI No</td><td><?php echo $ro['innum']; ?></td></tr>
                
              <tr><td>Place of Issue</td><td><?php echo $ro['olevel']; ?></td></tr>
              
              
                <tr><td>Date of Issue</td><td><?php echo $ro['alevel']; ?></td></tr>
                
                 <tr><td>CAR Mark</td><td><?php echo $ro['carmark']; ?></td></tr>
              
              
                <tr><td>Car Reg. Number</td><td><?php echo $ro['carnum']; ?></td></tr>
                
                           <tr><td></td><td><?php 
						   
						   $time1 = $ro['time'];
$time2 = date('G:i');;
list($hours, $minutes) = explode(':', $time1);
$startTimestamp = mktime($hours, $minutes);

list($hours, $minutes) = explode(':', $time2);
$endTimestamp = mktime($hours, $minutes);

$seconds = $endTimestamp - $startTimestamp;
$minutes = ($seconds / 60) % 60;
$hours = floor($seconds / (60 * 60));
//echo "Time passed: <b>$hours</b> hours and <b>$minutes</b> minutes";

 ; ?></td></tr>

               
                        
            </table>
    
    </form><br /><br />
   
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php } } } ?>
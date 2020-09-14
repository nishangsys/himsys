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


<body>


    
  
   
  
     <?php
	 $old=$_GET['see'];
	 
	 $c=mysql_query("SELECT * from  finances  where id='$old'
	  LIMIT 1") or die(mysql_error());
	  $f=1;
		    while($row=mysql_fetch_assoc($c)){
				$name=$row['name'];
				
			}
	  $CHECK=mysql_query("SELECT * from  finances  where name='$name'
	  ") or die(mysql_error());
	  $f=1;
		   
		   
	 
	 ?>
     <h1 style="background:#000; color:#FF0"><?php echo $name; ?> Visits Historique</h1>
    
    <table border="1">
          <tr style="background:#1188aa; color:#fff">
          <td>Visit No</td><td>Date Checked</td><td>For How long</td><td>Room Occupied</td></tr>
          <?php  while($rows=mysql_fetch_assoc($CHECK)){ ?>
          <tr>
          <td><?php echo $f++; ?></td>
            <td><?php echo $rows['date']; ?></td>
            <td>
            <?php
			if($rows['newadd']=''){
				echo $rows['howlong'];
				$rows['newadd'];
			}
			else {
				echo $rows['howlong'];
				echo $rows['newadd'];
			}
			
			?> DAYS
            
            </td>
             <td>Room <?php echo $rows['room']; ?></td>
                        </tr>
                        
<?php } ?>

                          
						<?php    /* 
						   
						   $time1 = $ro['time'];
$time2 = date('G:i');;
list($hours, $minutes) = explode(':', $time1);
$startTimestamp = mktime($hours, $minutes);

list($hours, $minutes) = explode(':', $time2);
$endTimestamp = mktime($hours, $minutes);

$seconds = $endTimestamp - $startTimestamp;
$minutes = ($seconds / 60) % 60;
$hours = floor($seconds / (60 * 60));
echo "Time passed: <b>$hours</b> hours and <b>$minutes</b> minutes";

</td></tr>

   */?>            
                      
            </table>
    
    </form><br /><br />
   
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php }  ?>
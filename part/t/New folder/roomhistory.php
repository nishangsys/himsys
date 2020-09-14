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
	 $old=$_GET['id'];
	  $CHECK=mysql_query("SELECT * from  finances  where room='".$old."' and status='2'") or die(mysql_error());
	  $y=1;
		   
		   
	 
	 ?>
    
    <table >
    <tr style="background:#000; color:#fff">
    <td>S/N</td><TD>Client's Names</td><td>Date Checked in</td><td>For how long</td><TD>Date Checked out</TD></tr>
             
        <?php  while($ro=mysql_fetch_assoc($CHECK)){ ?>
        
      <TR>
       <?PHP
	if($y%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#fff; border:1px solid#000; height:30px'>";
	}
	?>
      <TD><?PHP echo $y++; ?></TD>
            <TD><?PHP echo $ro['name']; ?></TD>
             <TD><?PHP echo $ro['date']; ?></TD>
           <TD><?PHP 
		   $adddays=$ro['newadd'];
		   if(empty($adddays)){
			   echo $ro['howlong'];
			   
		   }
		   else {
			   
			   echo $adddays+$ro['howlong'];
		   }?> Days</TD>
           <TD><?PHP echo $ro['level']; ?></TD>
           </TR>




              
              <?php } ?>
               
                        
            </table>
    
    </form><br /><br />
   
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php }  ?>
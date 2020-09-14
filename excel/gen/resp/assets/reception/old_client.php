<?php

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
	<title>New Student</title>
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


    
    <div class="right" >
    <?php customers(); 
	
	?>
     <h1>Re-Registering an Old Client: <?php if (isset($message)) { echo "<p class='message'>$message</p>";
}
?></h1>
  
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?new_student" enctype="multipart/form-data" >
     <?php
	 $old=$_GET['old'];
	  $CHECK=mysql_query("SELECT * from  customers  where client_id='$old' LIMIT 1") or die(mysql_error());
		    while($ro=mysql_fetch_assoc($CHECK)){
		   
	 
	 ?>
    
    <table>
              <tr><td>Names</td><td><input type="text" name="name" value="<?php echo $ro['stu_name']; ?>" /></td></tr>
              
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo $ro['dor']; ?>" /></td></tr>
                
              <tr><td>Nationality</td><td><input type="text" name="pob" value="<?php echo $ro['pof']; ?>" /></td></tr>
              
              
                <tr><td>Tel</td><td><input type="text" name="tel" value="<?php echo $ro['tel']; ?>" /></td></tr>
                
              <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $ro['email']; ?>" /></td></tr>
              
              
                <tr><td>Country of Permanent Resident</td><td><input type="text" name="gname" value="<?php echo $ro['gname']; ?>"/></td></tr>
                
              <tr><td>Number of Persons</td><td><input type="text" name="gadd" value="" /></td></tr>
              
              
                <tr><td>Arriving From</td><td><input type="text" name="gteC" /></td></tr>
                
              <tr><td>Travelling To</td><td><input type="text" name="gemail" /></td></tr>

                  <tr><td>Sex</td><td><select name="sex" style="width:170px" />
               <option>Male</option>
               <option>Female</option>
               
               </select></td></tr>
                
                            
               
               
               
                <tr><td>NI No</td><td><input type="text" name="innum" value="<?php echo $ro['innum']; ?>" /></td></tr>
                
              <tr><td>Place of Issue</td><td><input type="text" name="olevels" value="<?php echo $ro['olevel']; ?>" /></td></tr>
              
              
                <tr><td>Date of Issue</td><td><input type="text" name="alevels" value="<?php echo $ro['alevel']; ?>" /></td></tr>
                
           
               
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >Register Student</button></td></tr>
            </table>
    
    </form><br /><br />
   
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php } } ?>
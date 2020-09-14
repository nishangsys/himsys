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
     <h1>Register a Customer: <?php if (isset($message)) { echo "<p class='message'>$message</p>";
}
?></h1>
  
  <?php
if(isset($_POST['searchname'])){
	 $name=$_POST['name'];
	$se=mysql_query("select * from customers where stu_name='$name' LIMIT 1") or die(mysql_query());
	$count=mysql_num_rows($se);
	if($count<1){
		  echo "<script>alert('ERROR.$name has not been Found in the system ')</script>";
			  echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?not_foundname">';

	}
	else {
	while($row=mysql_fetch_assoc($se)){
		//echo $row['stu_name'];
	

?>

     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?new_student" enctype="multipart/form-data" >
    
    <table>
              <tr><td>Names</td><td><input type="text" name="name" value="<?php echo $row['stu_name']; ?>" /></td></tr>
              
               
                <tr><td>Date of Birth</td><td><input type="text" name="dob"  value="<?php echo $row['dor']; ?>"/></td></tr>
                
              <tr><td>Nationality</td><td><input type="text" name="pob"  value="<?php echo $row['pof']; ?>"/></td></tr>
              
              
                <tr><td>Tel</td><td><input type="text" name="tel" value="<?php echo $row['tel']; ?>" /></td></tr>
                
              <tr><td>Email</td><td><input type="text" name="email" value="<?php echo $row['email']; ?>" /></td></tr>
              
              
                <tr><td>Country of Permanent Resident</td><td><input type="text" name="gname" value="<?php echo $row['gname']; ?>" />
</td></tr>
                
              <tr><td>Number of Persons</td><td><input type="text" name="gadd"  /></td></tr>
              
              
                <tr><td>Arriving From</td><td><input type="text" name="gteC" /></td></tr>
                
              <tr><td>Travelling To</td><td><input type="text" name="gemail" /></td></tr>

                  <tr><td>Sex</td><td><input type="text" name="sex" value="<?php echo $row['category']; ?>" /></td></tr>
                
                            
               
               
               
                <tr><td>NI No</td><td><input type="text" name="innum" value="<?php echo $row['innum']; ?>" /></td></tr>
                
              <tr><td>Place of Issue</td><td><input type="text" name="olevels" value="<?php echo $row['olevel']; ?>" /></td></tr>
              
              
                <tr><td>Date of Issue</td><td><input type="text" name="alevels" value="<?php echo $row['alevel']; ?>" /></td></tr>
                
                 <tr><td>Car Mark</td><td><input type="text" name="cm" value="<?php echo $row['carmark']; ?>" /></td></tr>
              
              
                <tr><td>Plate Number</td><td><input type="text" name="planum" value="<?php echo $row['carnum']; ?>" /></td></tr>
                
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >Register Customer</button></td></tr>
            </table>
    
    </form><br /><br />
   
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php } } } }?>
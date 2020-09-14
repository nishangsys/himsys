<?PHP


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
     <h1>Changing Password</h1>
     
     <?php
	$o=mysql_query("SELECT * FROM users order by id") or die(mysql_error());
	
	
	?>
  
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?changepwd" enctype="multipart/form-data" >
    
    <table>
    <tr style="background:#1188aa; color:#fff">
    <td>Username</td><td>New Password</td><td>Action</td></tr>
    <?php
     $amou="SELECT * from users order by id  ";
	$run=mysql_query($amou) or die (mysql_error());					 
		 ?>      
         <tr><td>Username</td><td><select name="uname" style="width:150px" />
               
               <?php				
					while ($row=mysql_fetch_array($run)){
						
						
							$acade=$row['user_name'];
							$id=$row['id'];	
														
							echo "<option value='$id'>$acade</option>";
							
					}
                   
				

			   ?>
               </select></td><td><input type="text" name="newpwd" /></td>
                            <td><input type="hidden" name="id" value="<?php echo $id; ?>" /></td><td>

               
               <button type="submit" name="update">Update</button></td></tr>
         
                            
               
            </table>
    
    </form><br /><br />
    <?php
	if(isset($_POST['update'])){
		
		 $uname=$_POST['uname'];
		 $id=$_POST['id'];
		 $pwd=$_POST['newpwd'];
		 $sha1pass = PwdHash($_POST['newpwd']);
		
		echo $o=mysql_query("UPDATE users set pwd='$sha1pass' where id='$id'") or die(mysql_error()) ;
		echo "<script>alert(' Password has been changed')</script>";
	}
	
	
	?>
   
    
    </div>
    
    
   
    </div>
		
		 		
</body>
</html>
<?php } }  ?>
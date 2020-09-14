<?php
//include '../dbc.php';
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
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
        
<link href="../jss/examples.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.common.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.kendo.min.css" rel="stylesheet"/>
		<!--//webfonts-->
</head>






        <script src="../jss/jquery.min.js"></script>
        <script src="../jss/kendo.all.min.js"></script>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

<script type="text/javascript">
function doCalc(form) {
	    form.expamt.value = (((parseInt(form.day.value) * parseInt(form.expect.value))+parseInt(form.added.value)-parseInt(form.disc.value)));

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<body>

 <div class="right">   
    

    
    <h1 class="he">Editing for    <span style="color:#Ff0"><?php echo $row['stu_name']; ?> </span></h1>
     <form method="post" action="" enctype="multipart/form-data" >
    
    <table>
         
           <tr><td>Names</td><td><input type="text" name="name"   /></td></tr>
          
               
                <tr><td>Telephone</td><td><input type="text" name="tel"  style="width:300px" /></td></tr>
                   <tr><td>Age</td><td><input type="text" name="age"  style="width:300px" /></td></tr>
               
                 <tr><td>Address</td><td><input type="text" name="address"  style="width:300px" /></td></tr>  
           
                 <tr><td>ID Number</td><td><input type="text" name="idcard"  style="width:300px" /></td></tr> 
                                  <tr><td>Nationality</td><td><input type="text" name="nation"  style="width:300px" /></td></tr> 

                 
                  <tr><td>Category</td><td>   <?php		  
			   $amou="SELECT * from main_cats order by id  ";
	$run=mysql_query($amou) or die (mysql_error());				 
		 ?><select name="cate<?php echo $i; ?>" />            
               
               <?php				
					while ($row=mysql_fetch_array($run)){						
							$cate=$row['disc'];
							$facil=$row['facil'];
							$id=$row['id'];	
							$ho=$row['ins'];													
							echo "<option value='".$row['id']."'>$cate ($facil)  $ho</option>";
							
					}		

			   ?>
               </select>
               </td></tr>  
           <tr><td>Image</td><td><img id="uploadPreview" style="width: 100px; height: 100px;" />
<input id="uploadImage" type="file" name="userImage" onchange="PreviewImage();" /></td></tr>            
                  <tr><td></td><td><button type="submit" name="update" class="myButton">Save</button></td></tr>
            </table>
    
    </form><?php
	 
		
		 $address=$_POST['address'];
		
	//$imageProperties =($_FILES['userImage']['tmp_name']);
	if(isset($_POST['update'])){
		$nation=$_POST['nation'];
		 $address=$_POST['address'];
		 $age=$_POST['age'];
		 $tel=$_POST['tel'];
		$idcard=$_POST['idcard'];
		$cate=$_POST['cate'];
		 $name=$_POST['name'];
		
		 $photo=mysql_real_escape_string($_FILES['userImage']['name']);
		
	$photo_temp=$_FILES['userImage']['tmp_name'];
	move_uploaded_file($photo_temp,"album/$photo");
			
		
		
		
		
		$image=mysql_query("INSERT INTO member set idcard='$idcard',name='$name',photo='$photo',age='$age',tel='$tel',cate='$cate',adress='$address',
		 nation='$nation'")
		or die (mysql_error());
				echo "<script>alert('SUCCESS.".$name." Is registered. Thank You')</script>";
				echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?tosolv_member">';


		
	}
	

	

		
	?>
    
   
    </div>
   
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?> 	

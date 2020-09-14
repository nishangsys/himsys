<?php

session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

	
	else {
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  form.bal.value = ((parseInt(form.expect.value) - parseInt(form.paid.value)));
  
}
</script>

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

    
  <div class="right">  


<?php
if(isset($_GET['change_photo'])){
	  echo $cust_id=$_GET['change_photo'];
	  
	    
	$runm=mysql_query("SELECT * from staffs where id='$cust_id' ") or die (mysql_error());
	while($row=mysql_fetch_assoc($runm)){
	 
	
	
	// $jon="SELECT * FROM students,matric where students.stu_name='".$row['stu_name']."' and student.year_id='$ac_year' ";
?>
    
   
    
    
      <h1 class="he">Editing  Details of    <span style="color:#Ff0"><?php echo $row['name']; ?> </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?change_photo=<?php echo $row['id']; ?>" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $row['id']; ?>" style="width:300px" readonly="readonly" /></td></tr>
          
               
                <tr><td>Name</td><td><input type="text" name="name" value="<?php echo  $row['name']; ?>" style="width:300px"  /></td></tr>
                   <tr><td>Matricule</td><td><input type="text" name="mat" value="<?php echo  $row['matric']; ?>" style="width:300px" readonly="readonly" /></td></tr>
               
                 <tr><td>Position</td><td><input type="text" name="position" value="<?php echo  $row['age'];; ?>"  style="width:300px" /></td></tr>
    
           
        
           <tr><td>Image</td><td><img id="uploadPreview" style="width: 100px; height: 100px;" />
<input id="uploadImage" type="file" name="userImage" onchange="PreviewImage();" /></td></tr>
              
            
                        
         
                   
                 
                
               <tr><td>Nationality</td><td><input type="text" name="nation" style="width:300px"
               value="<?php echo $row['nation']; ?>" /></td></tr>
             
                  <tr><td></td><td><button type="submit" name="update" class="myButton">Save</button></td></tr>
            </table>
    
    </form><?php
	
		
	//$imageProperties =($_FILES['userImage']['tmp_name']);
	if(isset($_POST['update'])){
		 $id=$_POST['id'];
	$position=$_POST['position'];	
	$name=$_POST['name'];

	$photo=mysql_real_escape_string($_FILES['userImage']['name']);	
	$photo_temp=$_FILES['userImage']['tmp_name'];
	move_uploaded_file($photo_temp,"album/$photo");	
			
		//update the students table
$one=mysql_query("UPDATE staffs set name='$name', age='$position',photo='$photo'  where id='$id'   ") or die(mysql_error());
		;
		
		echo "<script>alert('SUCCESS.".$name." Accounts Update Successfull')</script>";
		echo '<meta http-equiv="Refresh" content="1; url=staffpage.php?change_pic">';

	}
		
	?>
    
    </div>
  
	
  		
           <div class="clear"></div>
		
	<div class="foot"></div>  
   
			
	<?php } }}  ?>	 	
</body>
</html>
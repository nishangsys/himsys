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
	<title>New CASE</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="../style.css" rel="stylesheet" type="text/css" />
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
     <h1>SEARCH FOR A DATE</h1>
  
  <?php
if(isset($_POST['searchname'])){
	echo $name=$_POST['name'];
	$se=mysql_query("select * from customers where stu_name='$name' LIMIT 1") or die(mysql_query());
	$count=mysql_num_rows($se);
	if($count<1){
		  echo "<script>alert('ERROR.$name has not been Found in the system ')</script>";
			  echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?assign">';

	}
	while($row=mysql_fetch_assoc($se)){
		echo $row['stu_name'];
	}
}

?>

     <form method="post" action="that_date.php" target="_blank" enctype="multipart/form-data" >
    
    <table>
           
              <tr>
              
              <td>Sector</td><td>
              <select name="sector" >
              <option value="15">Bar</option>
               <option value="10">Restau</option>
          <option value="90">Restau in the Bar</option>
               <option value="0">Reception</option>
                <option value="17">Rentals </option>
               <option value="2">Boccarou</option>       
               <option value="18">VIP Bar/ Night Club</option>



              
              
              </select>
               <td>Day</td><td><select name="date<?php echo $i; ?>" class="input"  style="width:80px"/>
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=1;$floor<=31;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></td><td>Month</td><td><select name="month<?php echo $i; ?>" class="input" style="width:130px" />
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
				</select>
                  
                </td><td>Year</td><td><select name="year<?php echo $i; ?>" class="input" style="width:100px" />
               	<option value="<?php echo $floor; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($floor=2016;$floor<=2020;$floor++)
					{
					echo "<option value='$floor'>$floor</option>";
					}
					?>
				</select></tr> 
            
            
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >Search Records</button></td></tr>
            </table>
    
    </form><br /><br />
   
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php }  ?>
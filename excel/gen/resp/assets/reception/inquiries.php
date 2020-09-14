<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		echo "<script>window.open('frontpage.php','_self')</script>";
		
			
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


    
    <div class="right" >
    
     <h1>Inquiries <?php if (isset($message)) { echo "<p class='message'>$message</p>";
}
?></h1>
  
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?inquiries" enctype="multipart/form-data" >
    
    <table>
              <tr><td>Names</td><td><input type="text" name="name" /></td></tr>
              
                
                <tr><td>Contact</td><td><input type="text" name="tel" required/></td></tr>
                
                 <tr><td>ID card/ Passport No</td><td><input type="text" name="nom"/></td></tr>
                 <tr><td>Purpsoe</td><td><select  name="pur"/>
                 <option value="business">Business</option>
                 <option value="visit a friend">Visit a friend</option>
                 <option value="Inquire about a friend">Inquire about a  friend</option>
                 <option value="Inquire about a relative">Inquire about a  relative</option>
                   <option value="Inquire about the hotel">Inquire about the hotel</option>
                 <option value="See the management">See the management</option>
                  <option value="See a hotel staff">See a hotel staff</option>
                   <option value="See a  collegue">See a collegue</option>

                <option value="See a relative">See a relative</option>
                                <option value="others">Others</option>




                   




                 
                 </select></td></tr>

                 <tr><td>Today's date</td><td><input type="text" name="date" value="<?php echo date('d/m/Y'); ?>" /></td></tr>
              
                
                <tr><td>Time</td><td><input type="text" name="time" value="<?php echo date('h:i:s'); ?>"/></td></tr>
                
            
               
               
               <tr><td>Reason for visit</td><td><textarea name="why" cols="5" rows="5" /></textarea></td></tr>
                

               
                        
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE INFORMATION</button></td></tr>
            </table>
    
    </form><br /><br />
   <?PHP
   if(isset($_POST['add'])){
   $name=$_POST['name'];
   $nom=$_POST['nom'];
   $pur=$_POST['pur'];
   $tel=$_POST['tel'];
      $month=date('m');
	  //$year=date('Y');
	  $date=date('d-m-Y');
	  $year=date('Y');
	  $day=date('d');
	  $time=date('h:i:s');
   $why=nl2br($_POST['why']);
   if(strlen($tel)<9){
	   echo "<script>alert('ERROR. ".$tel." is not a valid telephone Number. Thank You')</script>";
   }
   else {
   $in="INSERT INTO visitors set name='$name',purpose='$pur',nom='$nom',day='$day',today='$time', tel='$tel',month='$month',date='$date',year='$year',why='$why'";
   $run=mysql_query($in) or die(mysql_error());
	
		echo "<script>alert('".$name." Information details have been saved.Thank You very Much')</script>";
   }
   }
   ?>
    
    </div>
    
    
   
    </div>
	
    
   
			
		 		
</body>
</html>
<?php }  }?>
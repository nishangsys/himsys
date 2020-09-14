<?php
include '../dbc.php';
require_once '../functions/functions.php';

?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>
<script type="text/javascript">
function doCalc(form) {
  
}
</script>


<body>

    
    

<?PHP
$table=$_GET['id'];
$area=$_GET['area'];
?>    
    
    
    
    <h1 class="he">SPLITTING TABLE <span style="color:#Ff0"><?php echo $table; ?> </span></h1>
    <form method="post" action="">
    <table>
    <tr>
    <td>Split Into</td><td><select name="split" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day='B';$day<='F';$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td> <td><button type="submit" name="seen" >Split</button></td>
    
    </table>
    
    </form>
   
     <?php   
	 if(isset($_POST['seen'])){	
	  $split="$table".$_POST['split'];   
$ress=$con->query("INSERT INTO splits set sp='$split',num='$table',status='1',area='$area' ") or die(mysqli_error($con));
echo "<script>alert('$split SUCCESSFULLY ADDED')</script>";
$num=1;
	 }

	   ?>
     
            
            
        
         
         <?php 
	 ?><div class="clear"></div><br />


</form>
</tr>

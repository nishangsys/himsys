<?php
/**
Simple fees Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/fees-insert-update-using-php-mysql-delete-fees-records-using-checkboxes-in-php/
**/
include '../includes/conn.php';
$who=$_GET['id'];	
 

$query 	= mysql_query("SELECT * FROM `disburse` where sentto='$who' and status!='2'   ORDER BY id ASC") or die(mysql_error()); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

	
            $i = 0;	

if(isset($_POST['SubmitUpdate'])) {
	
	$_POST = array_map("ucwords", $_POST);
	 
	$amt = $_POST['total']; // Get the total rows
	for($i=1; $i<=$amt; $i++) {
		$date=date('d-m-Y');
		$time=date('h:i:s');
		$month=date('m');
		$year=date('Y');
		$status=0;
		$state=1;
		$advance=0;
		
		 $_POST['retock$i']=$_POST["availstocks$i"]-$_POST["qty$i"];
	 $_POST['sentothem$i']=$_POST["qty$i"];
		  $_POST['withthem$i']=$_POST["qty$i"]+$_POST["oldstock$i"];

		 @session_start();
	  $paidto=$_SESSION['user_name'];
	  

		  $updateghh =mysql_query("UPDATE `fixed_products` SET `qty`= '".$_POST["left$i"]."'
		   WHERE `id` = '".$_POST["pro_id$i"]."'  ") or die(mysql_error()); // Run the Mysql update query inscourse_ide for loop
	
	  

	
		  $update_productsss =mysql_query("INSERT INTO `dept_stocks` SET `item` = '".$_POST["product$i"]."' , `receive`= '".$_POST["qty$i"]."',
		  discribe='".$_POST["discribe$i"]."',model='".$_POST["model$i"]."',lefts='".$_POST["left$i"]."',senttby='$paidto',sentto='$who',name='".$_POST["name$i"]."',
		date='$date',month='$month',year='$year' ") or die(mysql_error());// Run the Mysql update query inscourse_ide for loop
	
	//historique insertion
		    $update_stock=mysql_query("UPDATE `fixed_products` SET `qty`= '".$_POST["left$i"]."'   WHERE `product` = '".$_POST["product$i"]."' and discribe='".$_POST["discribe$i"]."' or model='".$_POST["model$i"]."'
			  ") or die(mysql_error());
			
		
		
		 $update_disburse =mysql_query  ("UPDATE `disburse` SET `status`= '2',receiver='".$_POST["name$i"]."' WHERE sentto='$who' and status!='2'  ") or die(mysql_error());
	           		
	
	echo "<script>alert('Thank for your Patience . ')</script>";
echo "<script>window.open('stockpage.php?stock_sector','_self')</script>";
		  //$result=mysql_query($sell);
	
	}

}	


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Dashboard</title>
<meta name="keywords" content="classes insert in php, classes crud using PHP MySql, classes insert update delete using php mysql"/>
<meta name="description" content="classes insert update delete CRUD using PHP MySql. A simple way to insert, update and delete classes values at a time using PHP MySql"/>
<style>
body{
	background:#eee url(../bg.jpg);
}
.as_wrapper{
	margin:0 auto;
	width:960px;
	font-family:Arial;
	color:#333;
	font-size:14px;
}

.as_country_container{
	padding:20px;
	background:#BCE5F7;
	border:1px solid #333;
}

.a {
	text-decoration:none;
	color:#999;
}

.a:hover {
	text-decoration:underline;
}

.a:active {
	color:#F55925;
}
.h1 a {
	text-decoration:none;
	color:#000;
}
.h1 a:hover {
	text-decoration:underline;
}
.table {
	border:2px dashed #17A3F7;
	padding:20px;
	min-wcourse_idth:500px;
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solcourse_id #17A3F7;
	min-wcourse_idth:400px;
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#17A3F7;
	padding:5px;
	color:#FFF;

}
.table_view tr.odd {
	background:#F7F7F7;
}
.table_view tr.even {
	background:#FFF;
}
.table_view tr.odd:hover, .table_view tr.even:hover {
	background:#FEFDE0;
}
.table_view tr td {
	padding:5px;
}
.input {
	border:#CCC solcourse_id 1px;
	padding:5px;
}

.input:focus {
	border:#999 solcourse_id 1px;
	background:#FEFDE0;
	padding:5px;
}
h1{background-color:#fcfcfc;
 filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#fcfcfc, endColorstr=#cad8de);
 background-image:-moz-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-webkit-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-ms-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-o-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-webkit-gradient(linear, right top, right bottom, color-stop(57%,#fcfcfc), color-stop(100%,#cad8de));
	text-align:center;
	color:#1188AA;
	font-weight:bold;
	font-size:16px;
	padding:10px 0px;
	margin-top:-20px;
	border-bottom:1px solid#000;
}
</style>

</head>

<body>
<?php
	
?>
<div class="as_wrapper">
<h1 style="background:#088389; text-align:center; font-size:24px; padding:20px 0px; color:#fff;">Stock Validation for <span style="color:#ff0">  <?php echo $who; ?> </span></h1>
   
	<div class="as_country_container">
   
        
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
	
    ?>
      
       
            <?php
			
			
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" style="width:100%">
            <tr style="background:#1188aa; color:#fff; height:30px; padding:10px 0px">
                <td align="center">Sno</td>
                <td align="center">Goods </td>
                
                <td align="center" class="tt" >Description </td>
                            
                <td align="center" class="tt">Qty sent</td>
                <td align="center" class="tt">Stock Left</td>
                <td align="center" class="tt">Receiver's Name</td>
                                <td align="center" class="tt">Delete</td>

                
                
                
                
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                               

             
                 
                <td><input type="text" name="product<?php echo $i; ?>" value="<?php echo $row['item']; ?>" class="input" required style="width:190px" readonly   /></td>
                  <td><input type="text" name="discribe<?php echo $i; ?>" value="<?php echo $model=$row['discribe']; ?>" class="input" style="width:130px" readonly  /></td>
                   
                   <td><input type="text" name="qty<?php echo $i; ?>" value="<?php echo $row['taken']; ?>" class="input" style="width:60px" readonly  /></td>
                    
                     <td><input type="text" name="left<?php echo $i; ?>" value="<?php echo $row['current']; ?>"  class="input"  style="width:60px" readonly  /></td>
                       
                          <?php		  
			   $amou=$conn->query("SELECT * from staffs order by name  ") or die (mysqli_error($conn));
	
					 
		 ?>           
                <td><select name="name<?php echo $i; ?>" required="required" />            
               <option>----Select One name----</option>
               <?php				
					while ($rowm=$amou->fetch_assoc()){						
							$cate=$rowm['name'];
							$id=$rowm['id'];														
							echo "<option value='$cate' required='required'>$cate</option>";
							
					}		

			   ?>
               </select>
               
                </td>
                 
                 <td><a href="deleteit.php?roll=<?php echo $row['id']; ?>&sector=<?php echo $who; ?>" style="color:#F00">Delete</a></td>
                  <td><input type="hidden" name="pro_id<?php echo $i; ?>" value="<?php 
			   $s=mysql_query("SELECT *  from fixed_products where product='".$row['item']."' and model='$model' 
			    ") or die(mysql_error());
				while($d=mysql_fetch_assoc($s)){
					echo $pri=$d['id'];
					
				}   
			   
			    ?>"  style="width:60px"    /></td>
                   
               

                
               
                
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Valid and Sent to <?php echo $who; ?>" style="background:#1188aa; color:#fff; background:#1188aa; padding:10px 10px" /></td>
            </tr>
            </table>
            </form>
      
	</div>
</div>

</body>
	
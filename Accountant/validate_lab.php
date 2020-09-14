<?php
/**
Simple fees Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/fees-insert-update-using-php-mysql-delete-fees-records-using-checkboxes-in-php/
**/
include 'includes/dbc.php'; // include the database and server connection file
$who=$_GET['id'];	
$a	= mysql_query("SELECT SUM(price*qty),SUM(qty) FROM `basket` where tab='$who' and status= '0'") or die(mysql_error()); // Sel
while($bb=mysql_fetch_assoc($a)){
	 $cost=$bb['SUM(price*qty)'];
	 $qty=$bb['SUM(qty)'];
}

$ad=mysql_query("SELECT * FROM names where id='$who' limit 1 ") or die(mysql_error());
while($cx=mysql_fetch_assoc($ad)){
	$name=$cx['name'];
}
$date=date('d-m-Y');
		$time=date('h:i:s');
		$month=date('m');
		$year=date('Y');
		 $debts =mysql_query  ("INSERT INTO debtors set date='$date',month='$month',year='$year',qty='$qty',total='$cost',dept='lab',name='$name',agent='$paidto',
		 yourid='$who' ") or die(mysql_error());
		 

	
    $query 	= mysql_query("SELECT * FROM basket where tab='$who' and printed='0' and status= '0' ORDER BY id ASC") or die(mysql_error()); // Select from the table
  $totcount=mysql_num_rows($query);
 if($totcount>0){
	 echo "<script>alert('ERROR.Sorry Print a Receipt before Checking Client Out')</script>";
	 echo "<script>window.open('thank.php','_self')</script>";

	
 }
 else {

$query 	= mysql_query("SELECT * FROM basket  where tab='$who' and status= '0' ORDER BY id ASC") or die(mysql_error()); // Select from the table
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
		
		 $_POST['allprice$i']=$_POST["quaties$i"];
		$_POST['allptotal$i']=$_POST["dbtota$i"];
		//expected income=dbprice * qty bought
		 $_POST['expectin$i']=($_POST["dbprice$i"])*($_POST["qty$i"]);
		//actual income
		 $_POST['actualin$i']=$_POST["price$i"]*$_POST["qty$i"];
		//profit
		
		 $profit=$_POST['actualin$i']-$_POST['expectin$i'];
		 @session_start();
	  $paidto=$_SESSION['user_name'];
		 
	//daily records
	

	
		$daily=mysql_query("INSERT INTO daily set cust_id='$who',room='',amt='".$_POST["price$i"]."',reason='".$_POST["product$i"]."',qty='".$_POST["qty$i"]."',price='".$_POST["price$i"]."',
			owed='".$_POST["total$i"]."',date='".$_POST["date$i"]."',month='$month',year='$year',area='',time='$time',paidto='$paidto',purpose='pharmacy staff' ,idds='',discount=''") or die(mysql_error());
			
		
		 $up_fin =mysql_query  ("UPDATE finals set  name='".$_POST["product$i"]."',qty='".$_POST["newdbqty$i"]."'  WHERE id='".$_POST["dbid$i"]."'") or die(mysql_error());
		 
		
		
		 $update_basket =mysql_query  ("UPDATE  basket SET `status`= '2' WHERE tab='$who' and status= '0' ") or die(mysql_error());
		 
		 
		
	
	echo "<script>alert('Thank you ".$youno." for your Patience . ')</script>";
echo "<script>window.open('thank.php','_self')</script>";
		  //$result=mysql_query($sell);
	
	}

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
.as_wrapper{
	margin:0 auto;
	width:800px;
	font-family:Arial;
	color:#333;
	font-size:14px;
}

.as_country_container{
	padding:20px;
	background:#eee;
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
<h1 style="background:#088389; text-align:center; font-size:24px; padding:20px 0px; color:#fff;">Goods Validation for <span style="color:#ff0">  <?php echo $name; ?><br><span style="color:#fff">Qty to Distribute: <span style="color:#FF0"><?php echo ($qty); ?> </span>Worth of Distributed Product is </span> <?php echo number_format($cost); ?> Frs</span> </span></h1>
   
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
                <td align="center">Goods Bought</td>
                <td align="center">Category</td>
                
                <td align="center" class="tt" >Price </td>
                <td align="center" class="tt">Quantity</td>
                <td align="center" class="tt">Total</td>
                
              
                
                <td align="center" class="tt">Delete</td>
                
                
                
                
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                               

             
                 
                <td><input type="text" name="product<?php echo $i; ?>" value="<?php echo $row['product']; ?>" class="input" required style="width:190px" readonly   /></td>
                 <td><input type="text" name="category<?php echo $i; ?>" value="<?php echo $row['category']; ?>" class="input" style="width:160px" readonly  /></td>
                  <td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price']; ?>" class="input" style="width:60px" readonly  /></td>
                   <td><input type="text" name="qty<?php echo $i; ?>" value="<?php echo $row['qty']; ?>" class="input" style="width:60px" readonly  /></td>
                    
                     <td><input type="text" name="total<?php echo $i; ?>" value="<?php echo $row['qty']*$row['price']; ?>" class="input"  style="width:60px" readonly  /></td>
                     
                    
                      <td><a href="del.php?roll=<?php echo $row['id']; ?>&sector=<?php echo $who; ?>&name=<?php echo $distr; ?>" style="color:#F00">Delete</a></td>
               <td><input type="hidden" name="name<?php echo $i; ?>" value="<?php echo $youno; ?>"    /></td>
                 <td><input type="hidden" name="table<?php echo $i; ?>" value="<?php echo $row['tab'];   ?>"    /></td>
 
               <td><input type="hidden" name="dbqty<?php echo $i; ?>" value="<?php 
			   $s=mysql_query("SELECT *  from finals where name='".$row['product']."'
			     LIMIT 1 ") or die(mysql_error());
				while($d=mysql_fetch_assoc($s)){
					echo $d['qty'];
				}   
			   
			    ?>"    /></td>
                
                 <td><input type="hidden" name="dbid<?php echo $i; ?>" value="<?php 
			   $s=mysql_query("SELECT *  from finals where name='".$row['product']."'
			     LIMIT 1 ") or die(mysql_error());
				while($d=mysql_fetch_assoc($s)){
					echo $d['id'];
				}   
			   
			    ?>"    /></td>
                
                
                 <td><input type="hidden" name="newdbqty<?php echo $i; ?>" value="<?php 
			   $s=mysql_query("SELECT *  from finals where name='".$row['product']."'
			     LIMIT 1 ") or die(mysql_error());
				while($d=mysql_fetch_assoc($s)){
					echo $d['qty']-$row['qty'];
				}   
			   
			    ?>"    /></td>
               
                 <td><input type="hidden" name="dbprice<?php echo $i; ?>" value="<?php echo $row['cp']; ?>"    /></td>
                 <td><input type="hidden" name="profit<?php echo $i; ?>" 
                value="<?php echo $row['profit']; ?>" /></td>
                <td><input type="hidden" name="name<?php echo $i; ?>" value="<?php echo $youno; ?>" /></td>
                                <td><input type="hidden" name="ids<?php echo $i; ?>" value="<?php echo $row['ids']; ?>" /></td>
                                 <td><input type="hidden" name="date<?php echo $i; ?>" value="<?php echo $row['date']; ?>" /></td>


            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Valid Sales" /></td>
            </tr>
            </table>
            </form>
      
	</div>
</div>

</body>
	
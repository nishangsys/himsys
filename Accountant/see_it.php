<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>

  <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      VIEWING  <span style="color:#ff0; font-weight:bold"><?php echo $_GET['seeit'];; ?> Requisitions Today
  </span><div style="clear:both"></div></div>
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$code=$_POST['code'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];
$sp=$_POST['sp'];
//$df=$con->query("DELETE FROM income_classes where name='$shape' and code='$code' ") or die(mysqli_error($con));
$o=$con->query("SELECT * FROM income_classes WHERE name='$shape' and code='$code' ") or die(mysqli_error($con));
while($cc=$o->fetch_assoc()){
	$av=$cc['qty'];
	$nqty=$av+$qty;
}
if(mysqli_num_rows($o)>0){
	$dfGu=$con->query("UPDATE income_classes SET qty='$nqty',cost='$cost' WHERE name='$shape' AND code='$code'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";
}
else {



$do=$con->query("INSERT INTO income_classes SET name='$shape',code='$code'  ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}
}
///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM income_classes where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM income_classes WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 echo $sha=$nam['name'];
	  $dis=$nam['code'];
	  $cp=$nam['cost'];
	  $dis=$nam['code'];
	  $sp=$nam['sp'];
  }
  
  // now update
  if(isset($_POST['Update'])){
	  $shape=$_POST['name'];;
	  $Dis=$_POST['code'];
	   $C=$_POST['cost'];
	   $S=$_POST['sp'];
	 $id=$_GET['update'];
	  $dfGu=$con->query("UPDATE income_classes SET name='$shape',code='$Dis' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }
 
  
?>
<DIV style="clear:both"></DIV>
        
         <div class="col-sm-15" >

              <div class="row">
                       
                        <?PHP
						 echo $message;
						 $query = $con->query("SELECT product,SUM(price*qty),price,qty,total,opening_stocks,date,month,year  FROM requisitions  where tab='".$_GET['id']."' and status= '2' GROUP BY opening_stocks ORDER BY id ASC")  or die(mysqli_error($con));; // Select from the table
$i=1;
						?>



        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Good </th>
        <th>Price</th>
         <th>Qty</th>
          <th>Total</th>
        
        
      </tr>
    </thead>
    
    
    <tbody>
    <?php while($df=$query->fetch_assoc()){ ?>
      <tr>
                 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $name=$df['product']; ?></td>
        
         <td><?php echo $df['price']; ?></td>       
         <td><?php echo $df['qty']; ?></td>
        
        
         <td><?php echo $df['SUM(price*qty)']; ?></td>
        
       
      </tr>
     
      
    <?php } ?>
     
    </tbody>
    
  </table>  
  <table style="border:1px solid#000; width:100%; text-align:center" border="1">
  
  <tr >
     <td >TOTAL</td>
        <td><?PHP 						 echo $message;
						 $query = $con->query("SELECT SUM(price*qty) as  total FROM requisitions  where tab='".$_GET['id']."' and status= '2' GROUP BY tab ")  or die(mysqli_error($con));;
while($df=$query->fetch_assoc()){ 
echo $df['total'];
}// Select from the table
 ?></td>
      
      </tr>
  </table>
  <?php
  
  ?>
       
</div>
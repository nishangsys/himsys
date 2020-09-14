
 <?php

	$cate=$_GET['cats'];
		  $query = $con->query("SELECT * FROM 
		  products where category='$cate' and serial='$serial' order by product") or die(mysqli_error($con));
while($row = $query->fetch_assoc()) {

	?>
    
    <!---ADD CLASS OF delete to link to effect ajax
    
    add variable into id
    -->
       <a href="?product=<?php echo $row['product']; ?>&area=<?php echo $_GET['area']; ?>&temp=<?php echo $_GET['temp']; ?>&tabs=<?php echo $_GET['tabs']; ?>&wat=<?php echo $_GET['cats']; ?>" style="color:#fff"  >
     <button type="button" class="btn btn-default" style="float:left; color:#000; font-size:16px; margin:5px 10px; padding:10px 10px; border:2px solid#000; background:<?php 
	 if($_GET['temp']=='hot'){
		 echo "#FC6";
	 }
	 else {
		 echo "#fff";
		 
	 }?>">  
     
      <?php echo $row['product']; ?></button></a>
      
      <?php } ?>
      <?php
	  if(isset($_GET['product'])){
		  
	
 $code=$_GET['product'];
 $temp=$_GET['temp'];
 $tabb=$_GET['tabs'];
 $cats=$_GET['wat'];
 if(empty($tabb)){
	   echo $message= "<div class='alert alert-danger' style='color:#fff; background:#f00;font-weight:bold'>ERROR. CHOSE A TABLE TO SELL ON</div>";

 }
 else {


  $pk=mysql_query("SELECT * FROM products where quatity>0  and  product='$code' and serial='".$serial."' ");
 while($ac=mysql_fetch_assoc($pk)){
			 $thepro=$ac['product'];
			$aviail=$ac['quatity'];
			$tabs=$_GET['tables'];
			$cp=$ac['month'];
			$dbprice=$ac['price'];
			$oserial=$ac['serial'];
			$profit=$ac['price']-$ac['month'];
			$newqty=$ac['quatity']-1;
			$category=$ac['category'];
			$le;
			
			
		}
 $date=date('d-m-Y');
  $day=date('d');
   $month=date('m');
    $year=date('Y');
 
 //db total
  $db_tot=$_POST['dbtot'];
   $total=$priz*$qty;
   //new total===>dbtotal-totalnow
  $new_total=$db_tot-$total;
 //check if the total is positive that is if stocks are left
 if($qty>$avail){
	 	echo "<script>alert('Error .You have run out of stocks so you cannot sell more ".$avail." now ')</script>";
			

 }
 
 else {

 $sesth=$con->query("UPDATE products SET quatity='$newqty' where product='".$thepro."' and serial='".$serial."' LIMIT 1 ");
		   
$update=$con->query("insert into ".$db_basket." set product='$thepro',category='$temp',price='$dbprice',
	total='$dbprice',qty='1',cp='$cp',status='1',tab='$tabb',ids='$youid',section='".$serial."',opening_stocks='$aviail',closing_stocks='$newqty',area='".$a_area."',profit='$profit',time='$time',
date='$date',day='$day',month='$month',year='$year',froms='$serial',agent='$nameof'") or die(mysqli_error($con)) ;


  echo '<meta http-equiv="Refresh" content="0; url=?area='.$a_area.'&temp='.$temp.'&tabs='.$tabb.'&cats='.$cats.'">';
  

	
   // echo "Form Submitted succesfully";
}
}
	  }
	  ?>
	  
     

 <?php
			$cate=$_GET['cats'];
			echo $serial;
		  $query = $con->query("SELECT * FROM 
		  products where category='$cate' and serial='$serial' order by product") or die(mysqli_error($con));
while($row = $query->fetch_assoc()) {

	?>
    
    <!---ADD CLASS OF delete to link to effect ajax
    
    add variable into id
    ---->
       <a href="?area=<?php echo $_GET['area']; ?>&product=<?php echo $row['product']; ?>&temp=<?php echo $_GET['temp']; ?>&tabs=<?php echo $_GET['tabs']; ?>&tabs=<?php echo $_GET['tabs']; ?>" style="color:#fff"  >
       
       <div class="col-sm-3" style="background:#033; padding:10px 0px; text-align:left; border:1px solid#fff ">
        <p style="padding-left:30px" style="color:#FF0"><?php echo $row['product']; ?></p></div></a>
      
      <?php } ?>
      <?php
	  if(isset($_GET['area'])){
	
 $code=$_GET['product'];
 $temp=$_GET['temp'];

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
	total='$dbprice',qty='1',cp='$cp',status='$sta',tab='$tabs',ids='$youid',section='".$serial."',opening_stocks='$aviail',closing_stocks='$newqty',area='".$a_area."',profit='$profit',time='$time',
date='$date',day='$day',month='$month',year='$year',froms='$serial',agent='$nameof'") or die(mysqli_error($con)) ;


  
  

	
   // echo "Form Submitted succesfully";
}
}

	  ?>
	  
     
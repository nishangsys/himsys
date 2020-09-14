
 
      
      
      <?php
	 
if(isset($_GET['product'])){
echo $serial;	
 $code=$_GET['product'];

  $pk=mysql_query("SELECT * FROM products where quatity>0  and  product='$code' and serial='".$serial."' order by pro_id limit 1 ");
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

 $sesth=mysql_query("UPDATE products SET quatity='$newqty' where product='".$thepro."' and serial='".$serial."' LIMIT 1 ");
		   
		     	$update=mysql_query("insert into ".$db_basket." set product='$thepro',category='hot',price='$dbprice',
	total='$dbprice',qty='1',cp='$cp',status='$sta',tab='$tabs',ids='$youid',section='".$serial."',opening_stocks='$aviail',closing_stocks='$newqty',area='".$a_area."',profit='$profit',time='$time',
date='$date',day='$day',month='$month',year='$year',froms='$serial',agent='$nameof'") or die(mysql_error()) ;


  
  

	/*echo "<script>alert('Success. You have sold ".$qty." units of ".$product." to table ".$table."')</script>";*/
	echo "<div class='clear'></div>";
	echo "<h1 style='background:#000; color:#fff; padding:10px 10px; text-align:center'>Success. You have sold ".$qty." units of ".$product." to table ".$table."</h1>";
	
   // echo "Form Submitted succesfully";
}
}
?>
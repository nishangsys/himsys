
 
 
 
      <?php
if(isset($_GET['foodd'])){
$tabb=$_GET['tabs'];		  
 if(empty($tabb)){
	   echo $message= "<div class='alert alert-danger' style='color:#fff; background:#f00;font-weight:bold'>ERROR. CHOSE A TABLE TO SELL ON</div>";

 }
 else {
	 
	 
 $temp=$_GET['produc'];; 


		$product=$_GET['foodd'];
		$from=$_GET['sections'];
		$table=$_GET['tabs'];
		$db_bask=$db_basket;
		$db_tab=$db_table;
		$t_type=$_GET['type'];
		$yarea=$_GET['area'];
		$pk=$con->query("SELECT * FROM foods where pro_id='$product'");
		while($ac=$pk->fetch_assoc()){
		 echo $thepro=$ac['product'];
			$pro_ids=$ac['pro_id'];
			$ser=$ac['serial'];
			
			echo $dbprice=$ac['price'];
			
			
		}
	
		 $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   $time=date('G:i');
		   
		   //update my products
		   
		  
		   
$updateg=$con->query("insert into ".$db_bask." set product='$thepro',category='restau',price='$dbprice',
	total='$dbprice',qty='1',cp='0',status='1',tab='$table',ids='6',section='".$serial."',opening_stocks='$avail',closing_stocks='$remproducts',area='".$a_area."',profit='$profit',time='$time',
date='$date',day='$day',month='$month',year='$year',froms='restau',agent='$nameof'") or die(mysqli_error($con)) ;

  echo '<meta http-equiv="Refresh" content="0; url=?thing=food&produc='.$ser.'&area='.$a_area.'&tabs='.$tabb.'">';
	}
	  }

	  ?>
	  
     
  <?php
include 'includes/dbc.php';				   
				  
				  
	if(isset($_POST['save'])){

$ids = $_POST['itemNo'];
$product = $_POST['itemName'];
echo $quantities = $_POST['quantity'];
 $prices =  $_POST['price'];
 $total=$_POST['total'];
 $avial=$_POST['alltotal'];
 $discamt=$_POST['discamt'];
 $what=$_POST['disc'];
 @session_start();
 $names=$_SESSION['user_name'];
 $branch=$_SESSION['country'];
 $supplr=$_GET['supp'];
 


$items = array();

$size = count($ids);

for($i = 0 ; $i < $size ; $i++){
    // Check for part id
    if ( empty($quantities[$i]) || empty($prices[$i])) {
        continue;
    }
	$date=date('d-m-Y');
	$month=date('m');
	$year=date('Y');
	$agent=$_SESSION['user_name'];
	
    $items[] = array(
	
	
        "itemNo"     => $ids[$i],
		"itemName"     =>$product[$i],
		"cost"     =>$cost[$i],
		
        "quantity"    => $quantities[$i],
        "price"       => $prices[$i],
		"total"       => $total[$i],
		"avail"       =>$avial[$i],
		"names"        =>$names[$i],
		"discamt"     =>$discamt,
		"disc"     =>$disc
		
    );
}

if (!empty($items)) {
    $values = array();
    foreach($items as $item){		
		  $values[] = "('$branch',
		  ' $supplr',
		  '{$item['itemNo']}',
		  '{$item['itemName']}',
		  '{$item['itemNam']}',
		   '{$item['quantity']}',
		  '{$item['avail']}',
		  '{$item['price']}',  '$date','$month','$year','$branch')";
		
	
    }

    $values = implode(", ", $values);


   $sql = "INSERT INTO disburse (sentto,sentby,  item,stock,taken,current,discribe,date,month,year,status,receiver) VALUES  {$values} "   ;

   

    $result = mysql_query( $sql) or die ( mysql_error()) ;
	echo "<script>alert('SUCCESS. Stocks successfully Update')</script>";
		echo '<meta http-equiv="Refresh" content="0; url= receiving.php?receiving='.$supplr.'&branch='.$branch.'&supp='.$supplr.'&good=">';

   
}
	}
?>
	

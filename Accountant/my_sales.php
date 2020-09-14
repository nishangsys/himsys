
<?php
	$_POST = array_map("ucwords", $_POST);

$name= $_GET['our_staff'];
$dept= $_GET['dept'];
echo $id= $_GET['id'];
echo $table=$_GET['tabs']
//$df=$con->query("DELETE FROM finals where name='$shape' and disc='$disc' and branch='$branch'") or die(mysqli_error($con));



  
?>

 
             
                   
                   
                   
  

<script type = "text/javascript" >
function disableBackButton()
{
window.history.forward();
}
setTimeout("disableBackButton()", 0);
</script>	
 
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <style>
		
		</style>


    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700"> 
    <!-- Bootstrap core CSS -->
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/iph.js"></script>
     
       
<script type="text/javascript">
function doCalc(form) {
form.left.value = ((parseInt(form.qty.value)-parseInt(form.bought.value)));

  form.total.value = ((parseInt(form.priz.value)*parseInt(form.bought.value)));

}
</script>
        
		<!--//webfonts-->

    <script src="tabcontent.js" type="text/javascript"></script>
<script type="text/javascript">
String.prototype.parseURL = function() {
	return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(url) {
		
		
		return url.link(url);
		
			});
};
</script>



<body >



	<div class="contain" style="width:95%; border:none; box-shadow:none; height:auto; overflow:hidden; padding-bottom:30px">
  
<?php
 $sector=$_GET['supp'];

?>
<form method="post"  action="action12.php?name=<?php echo $name; ?>&dept=<?php echo $dept; ?>&id=<?php echo $_GET['id']; ?>&req_id=<?php echo $_GET['req_id']; ?>">
   
   
     	
      		
      	<div class='row' style=" width:95%">
      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      			<table class="table table-bordered table-hover">
					<thead>
						<tr style="background:#1188aa; color:#fff">
							<th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
							<th width="12%">Budget Head</th>
							<th width="15%">Item Name</th>
                          
		<th width="3%">Quantity</th>
                            <th width="3%">U Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                      
							<td><input class="case" type="checkbox"/></td>
							<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off" ></td>
							<td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                          
							<td><input type="text" name="quantity[]" required id="quantity_1" class="form-control changesNo" autocomplete="off" onBlur="doCalc(this.form)" onKeyPress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" maxlength="6" style="width:40px" required></td>

							
							<td><input type="text" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onKeyPress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" style="width:120px" ></td>
                         
                            
                      

                        
                        </tr>
					</tbody>
				</table>
      		</div>
      	</div>
      	<div class='row'>
      			&nbsp;&nbsp;<tr><td>&nbsp;&nbsp;<button class="btn btn-danger delete" type="button">- Delete</button></td><td>
      			<button class="btn btn-success addmore" type="button">+ Add More</button></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="save" class="btn btn-primary addmore" >Save</button></td></tr>
				</form>
                   <?php
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
 $name=$_GET['name'];
$dept=$_GET['dept'];
$id=$_GET['id'];

$items = array();

$size = count($ids);

for($i = 0 ; $i < $size ; $i++){
    // Check for part id
    if ( empty($quantities[$i]) ) {
        continue;
    }
	$date=date('d-m-Y');
	$month=date('m');
	$day=date('d');
	$time=date('h:i:s');
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
		  $values[] = "(
		  '{$item['itemNo']}',
		  '{$item['itemName']}',
		  '{$item['itemNam']}',
		   '{$item['quantity']}',
		  '{$item['avail']}',
		  '{$item['price']}',
		  'pharmacy', '1',
		   '$date','$month','$year','$time','$branch','0','$id','','','')";
		
	
    }

    $values = implode(", ", $values);


   $sql = "INSERT INTO basket (opening_stocks,product,  category,qty,closing_stocks,price,section,area,date,month,year,time,status,tab,ids,total,printed,froms) VALUES  {$values} "   ;

   

    $result = mysql_query( $sql) or die ( mysql_error()) ;
	echo "<script>alert('SUCCESS. Stocks successfully Update')</script>";
		echo '<meta http-equiv="Refresh" content="0; url= index.php?our_staff='.$name.'&dep='.$dept.'&id='.$id.'">';
		
   
}
	}
?>
	

			</div>
      	</div>
      
    </div>
    
   
	<h2>&nbsp;</h2>
    
    
  

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/autosp1.js"></script>
       
       
       
       </div>
       </div>
   
	
</body>
</html>



<?php   ?>                
                   
                   
                   
                   
              
                   
                   
                   
                   </div>
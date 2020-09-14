
<?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item
include 'includees/dbc.php';
if(isset($_GET['receiving'])){
 $name=$_GET['receiving'];
$edit=$_GET['receiving'];


if(isset($_POST['OK'])){
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$total=$price*$qty;
	 $do12=$con->query("UPDATE products SET qty='$qty' ,price='$price',total='$total' WHERE id='$edit' ") or die(mysqli_error($con));;
}
//$df=$con->query("DELETE FROM finals where name='$shape' and disc='$disc' and branch='$branch'") or die(mysqli_error($con));



  
?>

 
              <div class="row">
                  <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
      RECEIVING <span style="color:#ff0; font-weight:bold"><?PHP echo $good=$_GET['good']; ?></span> FROM <span style="color:#ff0; font-weight:bold"><?PHP echo $supp=$_GET['supp']; ?> </span>
      <a href="validatethis.php?roll=<?php echo $branch; ?>&supp=<?php echo $_GET['supp']; ?> "  style="color:#fff" >
<button class="btn btn-danger delete" type="button"> Validate Transactions and Save</button></a>
                				</div>
                   
                   
                   
                   
  

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
    <script src="js/ie.js"></script>
     
       
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
<form method="post" action="action.php?supp=<?php echo $sector; ?>">
   
   
     	
      		
      	<div class='row' style=" width:96%; margin-left:20px">
      		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
      			<table class="table table-bordered table-hover">
					<thead>
						<tr style="background:#1188aa; color:#fff">
							<th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
							<th width="3%">Current stock</th>
							<th width="15%">Item Name</th>
                            							<th width="3%">Cost Price</th>
		
							<th width="8%">Selling Price</th>
							<th width="3%">Quantity</th>
                            <th width="3%">Stocks left</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                      
							<td><input class="case" type="checkbox"/></td>
							<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off" ></td>
							<td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                            <td><input type="text" data-type="productCat" name="cost[]" id="cost_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                            
							<td><input type="text" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onKeyPress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
                         
							<td><input type="text" name="quantity[]" required id="quantity_1" class="form-control changesNo" autocomplete="off" onBlur="doCalc(this.form)" onKeyPress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required></td>

							<td><input type="number" name="alltotal[]" id="alltotal_1" class="form-control alltotalLinePrice" autocomplete="off" onKeyPress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" style="background:#f00; color:#fff"></td>
                            
                      

                        
                        </tr>
					</tbody>
				</table>
      		</div>
      	</div>
      	<div class='row'>
      			<tr><td>&nbsp;&nbsp;<button class="btn btn-danger delete" type="button">- Delete</button></td><td>
      			<button class="btn btn-success addmore" type="button">+ Add More</button></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="save" class="btn btn-primary addmore" >Save</button></td></tr>
      		
				</form>
                   <?php
				   
				  
	if(isset($_POST['save'])){


$ids = $_POST['itemNo'];
$product = $_POST['itemName'];
$quantities = $_POST['quantity'];
 $prices =  $_POST['price'];
 $total=$_POST['total'];
 $avial=$_POST['alltotal'];
 $discamt=$_POST['discamt'];
 $what=$_POST['disc'];
 if(empty($what)){
	 echo $disc='Null';
 }
 else { 
  $disc=$_POST['disc'];
 }
 $names=$_SESSION['user_name'];
 $branch=$_SESSION['country'];


$items = array();

$size = count($ids);

for($i = 0 ; $i < $size ; $i++){
    // Check for part id
    if (empty($ids[$i]) || empty($quantities[$i]) || empty($prices[$i])) {
        continue;
    }
	$date=date('d-m-Y');
	$month=date('m');
	$year=date('Y');
	$agent=$_SESSION['user_name'];
	
    $items[] = array(
	
	
        "itemNo"     => $ids[$i],
		"itemName"     =>$product[$i],
		"itemNam"     =>$cost[$i],
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
        $values[] = "('{$item['itemNo']}','{$item['itemName']}','{$item['itemNam']}', '{$item['quantity']}','{$item['avail']}','{$item['price']}',  '$date','$month','$year','$agent','$sector')";
		
	
    }

    $values = implode(", ", $values);


   $sql = "INSERT INTO disburse (stock,  item,taken,current,discribe,date,month,year,sentby,sentto) VALUES  {$values} "   ;

    $result = mysql_query( $sql) or die ( mysql_error()) ;
	echo "<script>alert('SUCCESS. Stocks successfully Update')</script>";

   
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
    <script src="js/autosp.js"></script>
       
       
       
       </div>
       </div>
   
	
</body>
</html>



<?php }  ?>                
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   </div>
<?php
include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}
else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
	
		
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANGt</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
        <style>
		tr,td{
			font-weight:bold;
			font-size:16px;
		}
		
		</style>
		<!--//webfonts-->
</head>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
<script type="text/javascript">
function doCalc(form) {

  form.total.value = ((parseInt(form.price.value)*parseInt(form.qty.value)));
    form.bal.value = ((parseInt(form.total.value)-parseInt(form.paid.value)));


}
</script>

<body>


    
   
  
     <?php
	 $old=$_GET['id'];
	  $CHECK=mysql_query("SELECT * from  customers,finances  where customers.client_id='$old'
	  and customers.client_id=finances.yourid LIMIT 1") or die(mysql_error());
		    while($ro=mysql_fetch_assoc($CHECK)){
		   
	 
	 ?>
      <h1 style="background:#000; color:#fff">Adding Services to <span style="color:#FF0"><?php echo $ro['stu_name']; ?></span></h1>
<form method="post" action="">
    <table >
                      <tr><td></td><td ><input type="hidden" name="yourid" value="<?php echo $ro['yourid']; ?>"></td></tr>

                  <tr><td></td><td ><input type="hidden" name="room" value="<?php echo $ro['room']; ?>"></td></tr>
                  <tr><td></td><td ><input type="hidden" name="oldebt" value="<?php echo $ro['otherbal']; ?>"></td></tr>

              <tr><td>Current Bills</td><td style="color:#ff0; background:#000"><?php echo number_format($ro['bal']); ?> Frs</td></tr>
              
           <tr><td>New Item added</td><td ><input type="text" name="item" required></td></tr>
                       <tr><td>Unit Price</td><td ><input type="text" name="price" required  ></td></tr>
                     <tr><td>Quantity</td><td ><input type="text" name="qty" onBlur="doCalc(this.form)" required ></td></tr>
                     <tr><td>Total</td><td ><input type="text" name="total" style=" background:red;color:white;" required readonly></td></tr>
                     <tr><td>Amount PAID</td><td ><input type="text" name="paid" style=" background:#0F6;color:black;" required onBlur="doCalc(this.form)" ></td></tr>
                     <tr><td>Balance</td><td ><input type="text" name="bal" style=" color:red;" required readonly></td></tr>
                                       <tr><td></td><td><button type="submit" name="save" class="myButton">Save</button></td></tr>



                        
            </table>
    
    </form><br /><br />
   <?php
   if(isset($_POST['save'])){
   $id=$_POST['yourid'];
   $room=$_POST['room'];
   $oldebt=$_POST['oldebt'];
   $item=$_POST['item'];   
   $price=$_POST['price'];
   $qty=$_POST['qty'];
   $total=$_POST['total'];
   $paid=$_POST['paid'];
   $bal=$_POST['bal'];
   $totowed=$oldebt+$bal;
    $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   $time=date('G:i');
		   if($bal<0){
			   echo "<script>alert('ERROR. Negative Balance')</script>";
		   }
		   else{
   //daily records
			$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',
			rec='$paid',date='$date',month='$month',year='$year',reason='$item',qty='$qty',price='$price',total='$total' ") or die(mysql_error());
			 //finance insertion
		    $finance=mysql_query("UPDATE finances set otherbal='$totowed' where yourid='$id'") or die(mysql_error());
			
			echo "<script>alert('SUCCESS.Services Added and Saved')</script>";
			 echo '<meta http-equiv="Refresh" content="1; url=../restau/thank.php">';
   }
   }
   
   ?>
    
    </div>
    
    
   
    </div>
	
    
   <?php
   
   ?>
			
		 		
</body>
</html>
<?php } } } ?>
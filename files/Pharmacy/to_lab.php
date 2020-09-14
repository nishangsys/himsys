
<div class="container-fluid text-center">    
  <div class="row content">
   
    <div class="col-sm-8 text-left"> 
      <div class="alert alert-danger">
        <strong>Our Software Says!</strong> Selling to <strong>
        <?php echo $_GET['name']; ?></strong> OF LABORATORY</a>.
      </div>
     <form method="post" action=""  style="margin-top:-30px">
  <div class="form-group">
    <label for="email"></label>
    <input type="text" class="form-control" placeholder="search by barcode" id="email" name="barcode" autofocus >
  </div>
  
  
</form>


<iframe src="lab_sales.php?name=<?php echo $_GET['our_staff'];  ?>&id=<?php echo $_GET['id']; ?>&dept=<?php echo $_GET['dep'];  ?>" style="border:none; width:770px; height:1200px; margin-top:0px"></iframe> 
    </div>
    <div class="col-sm-4 sidenav">
      <div class="well">
      
        <?php
	   include '../includes/lab_bill.php';
	   
	   ?>

      </div>
     
 

<?php
if(isset($_POST['barcode'])){
	$code=$_POST['barcode'];
  $dfm=$con->query("SELECT * from finals WHERE barcode='$code' and qty>0 ") or die(mysqli_error($con));
while($ac=$dfm->fetch_assoc())
		{
			 $thepro=$ac['name'];
			 $id=$ac['id'];
			$aviail=$ac['qty'];			
			$dbprice=$ac['cost'];
			$sp=$ac['sp'];
			$profit=$sp-$dbprice;
			$newqty=$aviail-1;
			 $category=$ac['disc'];  
			$day=date('d');
			$month=date('m');
			$year=date('Y');
			$date=date('d-m-Y'); 
			$time=date('h:i:s');
			$total=$sp;
			@session_start();
			$user=$_SESSION['user_name'];
		
			//$sesth=$con->query("UPDATE finals SET qty='$newqty' where id='".$id."' ") or die(mysqli_error($con));	   
		    $update=$con->query("insert into basket  set product='$thepro',category='$category',price='$sp',
	total='$total',qty='1',cp='$dbprice',status='',tab='".$_GET['id']."',ids='$id',section='pharmacy',opening_stocks='$aviail',closing_stocks='$newqty',area='1',profit='$profit',time='$time',agent='$username',
date='$date',day='$day',month='$month',year='$year',froms=''")  or die(mysqli_error($con));

	
		}
		
}
?>


</div>
</div>

<?php include '../includes/footer.php'; ?>
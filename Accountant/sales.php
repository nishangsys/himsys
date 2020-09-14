
    <link rel="stylesheet" media="screen" href="../css/left-fluid.css">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/another.css">
   
	<script type="text/javascript" src="../js/bootstrap.min.js"> bootstrap.min.js</script>
	<script type="text/javascript" src="../js/jquery.min.js"> jquery.min.js</script>
    

   


    <div class="col-sm-8 text-left"> 
      
     <div class="alert alert-danger">
        <strong>Our Software Says!</strong> Preparing a Requisition For <strong>
        <?php echo $_GET['name']; ?></strong> OF <?php echo $_GET['dept']; ?></a>.
      </div>
   


<iframe src="my_sales.php?name=<?php echo $_GET['our_staff'];  ?>&id=<?php echo $_GET['id']; ?>&dept=<?php echo $_GET['dep'];  ?>&req_id=<?php echo $_GET['req_id']; ?>" style="border:none; width:900px; height:1200px; margin-top:0px"></iframe> 
    </div>
    <div class="col-sm-4 sidenav">
      <div class="well">
      
         <?php
	   include '../includes/requisiting.php';
	   
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



      
</div>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 
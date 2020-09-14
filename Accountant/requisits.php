
<div class="alert alert-info">
  <strong>Alert!</strong> Requisiting from  <?php echo $_GET['clas']; ?>( <?php echo $_GET['ccode']; ?>)
</div>
     <div class="col-sm-12">
      <div class="well">
      
      
      
<form class="form-inline" role="form" method="post" action="">
    <div class="form-group">
      <label for="email">Class :</label>
      <input type="email" class="form-control" id="email" placeholder="Class" value="<?php echo $_GET['clas'];?>" readonly="readonly">
    </div>
    
     <div class="form-group">
      <label for="pwd">Budgeted:</label>
      <input type="number" class="form-control" id="pwd" readonly="readonly" placeholder="Amount " name="budget" value="<?php echo $_GET['bbudget'];?>"  style="width:90px; border:2px solid#f00">
    </div>
    
     <div class="form-group">
      <label for="pwd">Budget Use:</label>
      <input type="number" class="form-control" id="pwd" readonly="readonly" placeholder="Amount " name="used" value="<?php echo $_GET['used'];?>"  style="width:90px; border:2px solid#f00">
    </div>
   
   
     <div class="form-group">
      <label for="pwd">Item:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Code" name="item" value="<?php echo $_GET['bbduget'];?>" style="width:250px">
    </div>
    
    <div class="form-group">
      <label for="pwd">Amt:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Amount " name="amt"  style="width:150px">
    </div>
   
    <button type="submit" name="do" class="btn btn-success">Save</button>
  </form>
</div>

 <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
         <th>Code</th>
          <th>Trans. No</th>
                <th>Date</th>
        <th>Name</th>
        <th>Income</th>
          <th>Expenditure</th>
            <th>Cash at Hand</th>
      </tr>
    </thead>
    <tbody>
          <?php
	   $d=$con->query("SELECT * FROM daily order by id DESC") or die(mysqli_error($dbcon));
	   $i=1;
	   while($df=$d->fetch_assoc()){
	   ?>

      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $df['cust_id']; ?></td>
        <td><?php $a= $df['id']; 
		if($df['id']<10){
			echo "0000".$df['id'];
		}
		if($df['id']>9){
			echo "000".$df['id'];
		}
		if($df['id']>99){
			echo "00".$df['id'];
		}
		if($df['id']>999){
			echo "0".$df['id'];
		}
		if($df['id']>99){
			echo $df['id'];
		}
		
		?></td>
         <td><?php echo $df['date']; ?></td>
        <td><?php echo $df['reason']; ?></td>
         <td><?php echo $df['rec']; ?></td>
          <td><?php if(empty( $df['exp'])){
			  echo 0;
		  }
		  else {
			   echo $df['exp']; 
		  } ?></td>
          <?php
		  $ifs=$df['id']-1;
		  $idd=$df['id'];
		
		   $c=$con->query("SELECT SUM(rec),SUM(exp),(rec-exp),id FROM daily where id='".$ifs."'") or die(mysqli_error($dbcon));
	  
	   while($ff=$c->fetch_assoc()){
		  $ff['id'];
		   ?>
           <td><?php
		    
		   ////////////////////////
		    if($ifs<2){ 
			echo $cum=($df['rec']+$ff['SUM(rec)'])-$df['SUM(exp)'];
		   }
		   
		   ////////////////////////
		   else {
			      $dk=$con->query("SELECT SUM(rec),SUM(exp),(rec-exp),id,exp FROM daily where id<='".$idd."'") or die(mysqli_error($dbcon));
	  
	   while($mm=$dk->fetch_assoc()){
		//echo $current= ($mm['SUM(rec)']+$df['rec'])-$mm['exp'];
		echo $mm['SUM(rec)']-$mm['SUM(exp)'];
	   }
		   }?></td>
           <?php } ?>
      </tr>
      <tr>
       <?php } ?>
    </tbody>
  </table>
</div>
    
</div></div>
<?php ?>


<?php
if(isset($_POST['do'])){
	echo $name=$_POST['item'];
	$accnum=$_POST['accnum'];
	$year_id=$year_id;
	$paid=$_POST['amt'];
	$used12=$_POST['used'];
	$bug=$_GET['bbudget'];
	$used=$_POST['used']+$paid;
	 $bal=$_GET['bbudget']-$used;
	$code=$_GET['ccode'];
	$deposit=$_POST['deposit'];
	$total=$_POST['amt'];
	$class=$_GET['clas'];
	@session_start();
	$date=date('d-m-Y');
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$active=$_SESSION['user_name'];
$id=$_GET['expreq'];
$daily=$con->query("INSERT INTO daily set cust_id='$code',room='$code',paidto='$active',day='$day',staffname='$class',discount='',amt='',
			exp='$paid',date='$date',month='$month',year='$year_id',reason='$name',qty='1',area='$level',price='$paid',total='$deposit',owed='$id',
			purpose='Requisitions',company='Requisitions'") ;
	
			
				
 $daily12=$con->query("UPDATE exp_classes set budget1='$bal' where id='$id' ") or die(mysqli_error($con));
			echo "<script>alert('Records Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=?expreq='.$id.'&clas='.$class.'&ccode='.$code.'&bbudget='.$bug.'&used='.$used12.'">';
		
}

?>

       <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>

  
  <div class="row">
        <div class="col-sm-6">
          <div class="well">
		<h4>Preparing A Requisition for <strong><?php echo $_GET['uname']; ?></strong>
        
       
        
        </h4>
        

<div class="panel-body">
                            <div class="table-responsive">
                                
                          
                                
                               <form action="" method="post" name="regForm" class="form-horizontal" id="regForm">
         
         
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Item:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Item" name="name" required>
      </div>
    </div>
      
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">	Qty:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Quantity" name="qty"  required>
      </div>
    </div>
 
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">	Unit Cost</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" placeholder="Unit Cost" name="price"  >
      </div>
    </div>
 
    
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="submit">Add Item</button>
      </div>
   
      </form>
      </div>
                            </div>
                      </div>



<?php if(isset($_POST['submit'])){
	$_POST = array_map("ucwords", $_POST);
	
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$date=date('d-m-Y');
	 $qty=$_POST['qty'];
	$item=$_POST['name'];
	$yname=$_GET['uname'];
	 $dept=$_GET['dept'];
	  $price=$_POST['price'];
	 $time=date('h:i:s');
	 $your=$_GET['id'];
	 
 
	 
$f=$con->query("INSERT INTO requisitions set day='$day',month='$month',year='$year',time='$time',date='$date',agent='$yname',product='$item',qty='$qty',section='$dept',status='0',ids='$your',price='$price'") or die(mysqli_error($con));
}
; ?>














          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
               <?php $d=$con->query("SELECT * FROM requisitions where ids='".$_GET['id']."' and status='0'") or die(mysqli_error($con));
$i=1;
?>   
          <h3>My Pending Requisition | <a href="?prepare&id=<?php echo $_GET['id']; ?>&uname=<?php echo $_GET['uname']; ?>&dept=<?php echo $_GET['dept']; ?>&ok"><button class="btn btn-danger" onclick="return confirm('Are you sure about that.Once you have signd you cannot change again')">Submit Requisition </button></a>| </h3>
     
            <div class="table-responsive">
                                
                          
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Item</th>
        <th>Qty</th>
        <th>Unit Cost</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Moccasin">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><a href="?prepare&id=<?php echo $bu['ids']; ?>&uname=<?php echo $bu['agent']; ?>&dept=<?php echo $bu['section']; ?>&delete=<?php echo $bu['id']; ?>" onclick="return confirm('Are you sure?')" style="font-weight:bold; color:#033"><?php echo $bu['product']; ?></a></td>
                                            <td><?php echo $bu['qty']; ?></td>
                                            
                                            <td><?php echo $bu['price']; ?></td>
                                           <td><?php echo $bu['date']; ?></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
                            </div>
          <?php 
		  
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$id=$_GET['id'];
	$dept=$_GET['dept'];
	 $uname=$_GET['uname'];
	 
	 $del=$con->query("DELETE FROM requisitions WHERE id='$code' ") or die(mysqli_error($con));
	 echo '<meta http-equiv="Refresh" content="0; url=?prepare&id='.$id.'&uname='.$uname.'&dept='.$dept.'">';
	 
		  }
		  
		  
		  if(isset($_GET['ok'])){
	$idss=$_GET['id'];
		$dept=$_GET['dept'];
	 $uname=$_GET['uname'];
	
	 $fj=$con->query("UPDATE requisitions set status='1' where ids='$idss'  ") or die(mysqli_error($con));
	 echo "<script>alert('Requisition Finally Submittd for Processing')</script>";
	  echo '<meta http-equiv="Refresh" content="0; url=?prepare&id='.$idss.'&uname='.$uname.'&dept='.$dept.'">';
		  }
; ?>


            
          <div class="well">
               <?php $dd=$con->query("SELECT * FROM requisitions where ids='".$_GET['id']."' and status='1'") or die(mysqli_error($con));
$i=1;
?>   
          <h3>My Submitted Requistion | <a href="?prepare&id=<?php echo $_GET['id']; ?>&uname=<?php echo $_GET['uname']; ?>&dept=<?php echo $_GET['dept']; ?>&ok"></a></h3>
     
            <div class="table-responsive">
                                
                          
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Item</th>
        <th>Qty</th>
        <th>Unit Cost</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    
      <?php while($bus=$dd->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Moccasin">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><a href="?prepare&id=<?php echo $bus['ids']; ?>&uname=<?php echo $bus['agent']; ?>&dept=<?php echo $bus['section']; ?>&delete=<?php echo $bus['id']; ?>" onclick="return confirm('Are you sure?')" style="font-weight:bold; color:#033"><?php echo $bus['product']; ?></a></td>
                                            <td><?php echo $bus['qty']; ?></td>
                                            
                                            <td><?php echo $bus['price']; ?></td>
                                           <td><?php echo $bus['date']; ?></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
                            </div>
          <?php 
		  
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$id=$_GET['id'];
	$dept=$_GET['dept'];
	 $uname=$_GET['uname'];
	 
	 $del=$con->query("DELETE FROM requisitions WHERE id='$code' ") or die(mysqli_error($con));
	 echo '<meta http-equiv="Refresh" content="0; url=?prepare&id='.$id.'&uname='.$uname.'&dept='.$dept.'">';
	 
		  }
		  
		  
		  if(isset($_GET['ok'])){
	$idss=$_GET['id'];
		$dept=$_GET['dept'];
	 $uname=$_GET['uname'];
	
	 $fj=$con->query("UPDATE requisitions set status='1' where ids='$idss'  ") or die(mysqli_error($con));
	 echo "<script>alert('Requisition Finally Submittd for Processing')</script>";
	  echo '<meta http-equiv="Refresh" content="0; url=?prepare&id='.$_GET['id'].'&uname='.$uname.'&dept='.$dept.'">';
		  }
; ?>
            </div>
          </div>
     
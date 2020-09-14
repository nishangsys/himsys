<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/another.css">
   
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
        <?php 
		include '../includes/dbc.php';
	
//////////////////////////////////////////////////////////////////////////////////////////////////////
$table=$_GET['tabs'];
 $db_requisitions=$yrequisitions;
$name=$_GET['good'];
$dept=$_GET['dept'];
	
	
	
    
	 if(isset($_GET['adds'])){
		 echo $adds=$_GET['adds'];
		 $qty=$_GET['qty']+1;
		 $price=$_GET['price'];
		 $newtot=$price*$adds;
		
	//////////////////update requisitions	 	
	echo $un1=$con->query ("UPDATE 	requisitions set qty='$qty'  where id='$adds' ") ;
	//////////////////update requisitions	
	$d1=$con->query("DELETE FROM 	requisitions WHERE qty<1") or die(mysqli_error($con)); 
	
	  echo '<meta http-equiv="Refresh" content="0; url=change_sales.php?tabs='.$_GET['tab'].'">';
	
	}
	
	
	
	//reduce qty
	
	if(isset($_GET['reduce'])){
		 $idd=$_GET['reduce'];
	 echo
		 $qty=$_GET['qty']-1;
		 $price=$_GET['price'];
		 $newtot=$price*$adds;
		
	//////////////////update requisitions	
	$d1=$con->query("DELETE FROM 	requisitions WHERE qty<1") or die(mysqli_error($con)); 	
	$un1=$con->query("UPDATE 	requisitions set qty='$qty' ,total='$newtot' where id='$idd' limit 1") or die(mysqli_error($con));
	
	  echo '<meta http-equiv="Refresh" content="0; url=change_sales.php?tabs='.$_GET['tab'].'">';
	
	
	}
	
	
	
	if(isset($_GET['delete'])){
		 $idd=$_GET['delete'];
	
	//////////////////update requisitions	
	$d1=$con->query("DELETE FROM 	requisitions WHERE   id='$idd' limit 1") or die(mysqli_error($con)); 	
	
	  echo '<meta http-equiv="Refresh" content="0; url=change_sales.php?tabs='.$_GET['tab'].'">';
	
	
	}
	
	
	 
	?>
      
    
      
        
 
    
      
       
  <div class="col-sm-12">
          <div class="well">
         
	   
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php $d=$con->query("SELECT SUM(qty),SUM(total),price,product,category,ids,id,price,qty,total,agent,tab FROM requisitions where tab='".$_GET['tabs']."' and status='0' and qty>0 GROUP BY category,product order by product ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Item</th>
        <th>Qty</th> 
        <th>Price</th> 
        <th>Total</th> 
       
         <th>Action</th> 
        
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['product']; ?></td>
                                            <td><?php  echo $bu['qty']; ?></td>
                                               <td><?php  echo $bu['price']; ?></td>
                                  <td><?php  echo $bu['price']*$bu['qty']; ?></td>
                                            <td> 
 <a href="?tab=<?php echo $bu['tab']; ?>&adds=<?php echo $bu['id']; ?>&qty=<?php echo $bu['qty']; ?>">
 <button type="button" class="btn btn-success" style="color:#000; font-size:13px; margin-left:5px "> <i class="icon-plus "></i>  ADD<button></a>
 
 
 <a href="?tab=<?php echo $bu['tab']; ?>&reduce=<?php echo $bu['id']; ?>&qty=<?php echo $bu['qty']; ?>">
 <button type="button" class="btn btn-info" style="color:#000; font-size:13px; margin-left:5px "> <i class="icon-minus  "></i>  REDUCE<button></a>
 
 
 
 
 
 <a href="?tab=<?php echo $bu['tab']; ?>&delete=<?php echo $bu['id']; ?>&qty=<?php echo $bu['qty']; ?>">
 <button type="button" class="btn btn-danger" style=" color:#000; font-size:13px; margin-left:5px "> <i class="icon-cut  "></i>  DELETE<button></a></td>
                                           
                        
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                         
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
                                
 <!--------TOTAL---->   
   <div class="col-sm-12" style="background:#003; padding:0px 0px; text-align:CENTER; border:1px solid#fff">
   
   
     <span style="background:#090; padding:15px 20px; float:right; font-size:18px; color:#fff; font-weight:bold ">  
      <?PHP
      	$a = $con->query("SELECT SUM(price*qty) as totbill FROM requisitions where tab='".$_GET['tabs']."' and status='0' GROUP BY tab") or die(mysqli_error($con));
			
		while($bu = $a->fetch_assoc()) {
			echo $tot=$bu['totbill'];
		}
			?> XAF</span> 
       </div>
       
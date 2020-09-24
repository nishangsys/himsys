
  
    <div class="table-responsive">
                                
      <?php
	  $year=date('Y');
	  
	   $d=$conn->query("SELECT * from courses where level='PG' GROUP BY db1") or die(mysqli_error($conn));
	   
	   while($bu=$d->fetch_assoc()){
		   
$i=1;
?> 
<A href="?pgc_list&tyear=<?php echo $bu['db1']; ?>">

<div class="row">
        <div class="col-sm-3">
          <div class="panel panel-default text-left">
            <div class="panel-body">
             <?php echo $TYAEAR=$bu['db1'];
			 $ayear=$bu['db1'];  ?>
            </div>
          </div>
        </div>
        </a>
<?php }
 $d=$conn->query("SELECT departmet,count(fname) as alls,db1,levels,roll FROM courses where db1='$TYAEAR' AND level='PG' GROUP BY departmet,levels") or die(mysqli_error($conn));
	 
 ?>                      
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Program</th>
           <th>Level</th>

        <th>Number of students</th>
             
        <th>Action</th> 
        
        
      </tr>
    </thead>
    <tbody>
   
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="PaleGreen">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
         <td><?php echo $bu['departmet']; ?></td>
       <td><?php echo $bu['levels']; ?></td>
                <td><?php echo $bu['alls']; ?></td>

        <td>
        
        <a href="ddo.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-success"   >Excel Download Class List</button>
        
         <a href="biostats.php?list=<?php echo $bu['departmet']; ?>&link=<?php echo $bu['prog']; ?> lists&id=<?php echo $bu['roll']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['levels']; ?> "><button class="btn btn-primary"   >Bio Stats </button>
        
        
        
        </td>

       
           
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
 
 <?php  $d=$dbcon->query("SELECT * from years where id='".$_GET['from']."' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $from=$df['year_name'];
		   $froms=$df['id'];
	   }
	   $tos=$_GET['from']+1;
$d=$dbcon->query("SELECT * from years where id='".$tos."' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $to=$df['year_name'];
	   }
	   
	   $d=$dbcon->query("SELECT * from levels  where next='1' ") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $level_concern=$df['id'];
	   }	
	   
	   
	   
	   ?>
<div class="alert alert-danger">
  <strong>Promoting from Level 200 of <?php echo $from;  ?> Academic Year to Level 300 of <?php echo $to; ?> Academic Year </strong> 
</div>



     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                
        </h3>
        
      <?php
	 
		  
		  
	  
	   $d=$conn->query("SELECT special.prog_name as prog_name,special.id as dept_id, levels.levels as levels, years.year_name as year_name, COUNT(students.matricule) as tot_students from levels,special,years,students  where  students.year_id='".$_GET['from']."' AND students.level_id='$level_concern' AND  students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id GROUP BY dept_id,level_id order by special.prog_name ") or die(mysqli_error($conn));
$i=1;
	 
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Prog</th> 
                                             <th>Level</th>
                                             <th>Ayear</th>                        
                                             <th># of Students </th>
                                               <th>Action </th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
                                       <td><?php  echo $i++; ?></td>
                                       <td style="text-transform:capitalize"><?php  echo $bu['prog_name']; ?></td>
                                        <td><?php  echo $bu['levels']; ?></td> 
                                        <td><?php  echo $bu['year_name']; ?></td>
                                         <td><?php  echo $bu['tot_students']; ?></td>                                                       
                                                                                      
                                           
                                         <td>
                                         <?php
										 
									  $dkl=$dbcon->query("SELECT * from promotions  where  froms='$froms' and tos='$tos' and dept_id='".$bu['dept_id']."' ") or die(mysqli_error($dbcon));
									  $counts=$dkl->num_rows; 
									  if($counts<1){  
										 ?>                      
                                                         
                                                         
                           <a href="?promote_now&dept_id=<?php  echo $bu['dept_id']; ?>&from=<?php echo $froms; ?>&to=<?php  echo $tos; ?>&gdgdgddh">  <button   class="btn btn-success">Promote Now </button></a>
                           				<?php } else { ?>
                                        
    
                                                         
                           <a href="?promote_now&dept_id=<?php  echo $bu['dept_id']; ?>&from=<?php echo $froms; ?>&to=<?php  echo $tos; ?>&gdgdgddh">  <button   class="btn btn-primary">Promote Again  </button></a>                                    
                                        <?php } ?>
                                                         
                                                                                                          </td>
                                           
                
              
        
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                                

 

          
          
          
          
                   <div class="row">

     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

                         
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

</div>
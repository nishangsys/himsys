
<div class="alert alert-info">
  <strong>All Programs of <?php echo $ayear_name; ?></strong> I
</div>

<form class="form-inline" action="" method="POST">
  <div class="form-group">
    <label for="email">Program:</label>
   <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,special where students.dept_id=special.id  GROUP BY students.dept_id") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Year:</label>
     <select class="form-control" id="sel1" name="ayear" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,years where students.year_id=years.id  GROUP BY students.year_id order by students.year_id DESC") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['year_name']; ?></option>
    <?php } ?>
                 </select>
  </div>
 
  <button type="submit" name="ok" class="btn btn-default">Submit</button>
</form>  
  

     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                
        </h3>
        
      <?php
	 
	  if(!isset($_POST['ok'])){
		  
		  
	  
	   $d=$conn->query("SELECT * from levels,special,years,students  where  students.year_id='$ayear' AND  students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id GROUP BY dept_id,level_id order by special.prog_name ") or die(mysqli_error($conn));
$i=1;
	  }
	  else {
        $dept=$_POST['dept'];
	    $ac_year=$_POST['ayear']; 
		;
	        
		 $d=$dbcon->query("SELECT * from levels,special,years,students  where   students.level_id=levels.id and students.dept_id='$dept' and students.year_id='$ac_year' and students.dept_id=special.id  AND students.year_id=years.id GROUP BY dept_id,level_id order by special.prog_name
		 ") or die(mysqli_error($dbcon));
		
	  }
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                                    <th>Prog</th> <th>Level</th>
                <th>Ayear</th>                        
                                                <th>Amt Paid</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
          <td style="text-transform:capitalize"><?php  echo $bu['prog_name']; ?></td>
<td><?php  echo $bu['levels']; ?></td> 
<td><?php  echo $bu['year_name']; ?></td>                                                        
                                              
                                           
                                                         <td><a href="../Fees/c_lists.php?prog_id=<?php  echo $bu['dept_id']; ?>&level_id=<?php  echo $bu['level_id']; ?>&year_id=<?php  echo $bu['year_id']; ?>" target="new">  <button type="submit" class="btn btn-info" name="do" class="btn btn-success">Print it</button></a>
                                                         
                                                         
                                                         
      <a href="../Records/ddo.php?prog_id=<?php  echo $bu['dept_id']; ?>&level_id=<?php  echo $bu['level_id']; ?>&year_id=<?php  echo $bu['year_id']; ?>"><button class="btn btn-success"   >Excel Download Class List</button>     
      
                                                
                                                         
      <a href="../Records/bio_stats.php?prog_id=<?php  echo $bu['dept_id']; ?>&level_id=<?php  echo $bu['level_id']; ?>&year_id=<?php  echo $bu['year_id']; ?>"><button class="btn btn-primary"   >Bio Statistics</button>                                                      </td>
                                           
                
              
        
                                            
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
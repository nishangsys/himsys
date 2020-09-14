
  <?php 
  $today=$_GET['date'];;
  $branch=$_GET['branch'];
	$year=date('Y'); 
	$m=date('m'); 
	
	
	  ?>
      
      
      
     
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <a href="#" style="text-decoration:none; color:#000">
    
      <div class="col-sm-12"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $ayear; ?> Most Enrolled Programs</div>
       
            <div class="well well-small" style="height:600px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			$year=date('Y');
			  $d=$conn->query("SELECT COUNT(matricule) as tot,departmet FROM students where year_id='$ayear' GROUP BY departmet order by  COUNT(matricule) DESC") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Program</th>
       <th>Number of Students</th> 
           
                               </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['departmet']; ?></td>
                                        
                                            <td><?php  echo $bu['tot']; ?></td>
                                      
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Programmer</div>
      </div>
    </div>
    
    </a>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
            
    </div></div>
      
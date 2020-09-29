
    
    
    
    
    
    
    
    
    
    
    
    <a href="#" style="text-decoration:none; color:#000">
    
      <div class="col-sm-12"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $ayear_name; ?> Most Enrolled Programs</div>
       
            <div class="well well-small" style="height:600px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			
			  $d=$conn->query("SELECT COUNT(students.matricule) as tot,special.prog_name FROM students,special where students.year_id='$ayear' and students.dept_id=special.id GROUP BY students.dept_id order by  COUNT(students.matricule) DESC") or die(mysqli_error($conn));
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
                                            <td><?php  echo $bu['prog_name']; ?></td>
                                        
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
      
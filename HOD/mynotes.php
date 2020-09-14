
  
  <div class="row">
        <div class="col-sm-12">
          <div class="well">
		<h3>My signed Semester students
        
       
        
        </h3>
        <?php $d=$con->query("SELECT * FROM my_students where matric='$user' and year_id='$ayear' and status='2' GROUP BY id   ") or die(mysqli_error($con));
$i=1;
?>

<div class="panel-body">
                           
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Subject</th>
        <th>Code</th>
        <th># of Uploads</th>
         <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><?php echo $bu['subj']; ?></td>
                                            <td><?php echo $bu['code']; ?></td>
                                             <td>
     <?php
	  $dd=$con->query("SELECT COUNT(floc) as alls FROM files where fname='$ayear' and coursecode='".$bu['code']."' group by coursecode  ") or die(mysqli_error($con));
while($dfm=$dd->fetch_assoc()){
	echo number_format($dfm['alls']);
	
}
	 ?>
                                           </td>
                                             
                                             
                                              <td><a href="?view=<?php echo $bu['code']; ?>&year_id=<?php echo $ayear; ?>&subj=<?php echo $bu['subj']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-success" >View or Dowbload</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>
                            </div>
                      </div>

        </div>
        </div>
     

 
  <div class="row">
        <div class="col-sm-12">
          <div class="well">
		<h3>Viewing Note Uploads on 
        <?php
		echo $subject=$_GET['subj'];
		?>
        ( <?php
		echo $code=$_GET['view'];
		?>)
       
        
        </h3>
        <?php 
		
		$d=$con->query("SELECT * FROM files where fname='$ayear' and coursecode='$code' order by file_id DESC   ") or die(mysqli_error($con));
$i=1;
?>

<div class="panel-body">
                        <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Topic</th>
        <th>Upload On</th>
      
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
                                            <td><?php echo $topic=$bu['fdesc']; ?></td>
                                      
                                             <td>
     <?php
	  
	 ?>
                                           </td>
                                             
                                             
                                              <td><a href="download.php?filename=<?php echo $bu['floc']; ?>" style="font-weight:bold; color:#033"><button class="btn btn-success" >Dowbload</button></a></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table>   </div>
                      </div>

        </div>
        </div>
     
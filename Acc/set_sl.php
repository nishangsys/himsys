 <div class="col-sm-6">
          <div class="well">
            
 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

               
        <tr><td>Section</td><td> <select class="form-control" id="sel1" name="prog" required >
       
       <option></option> 
        <?php
							
								$result = $con->query("SELECT * FROM main_sects") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                       
                 
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['name']; ?> </option>
    <?php } ?> 
        
      </select></td></tr> 
               
                <tr><td>Levels</td><td> <select required class="form-control" id="sel1" name="levels" >
                <option></option>    
        <?php
							
								$result = $conn->query("SELECT * FROM levels order by levels") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
              
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['levels']; ?> </option>
        
    <?php } ?> 
    <option value="600"  >600</option>
        <option value="700"  >700</option>

        
      </select></td></tr> 
      
      
      
       
  
               
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	
;

 $p=$_POST['prog'];
$l=$_POST['levels'];



$query55=$con->query("delete from sets where name='$p' and levels='$l' " ) or die(mysqli_error($con)) ;



	 $ats=$con->query("insert into  sets  set  
name='$p',levels='$l'") or die(mysqli_error($con)) ;



;

echo '<meta http-equiv="Refresh" content="0; url=?sectl">';	
	
}
	
?>
          </div>
        </div>
     
      <div class="row">
        <div class="col-sm-5">
          <div class="well">
           
 <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		$year_id=$_GET['year_id'];
		 $d=$con->query("SELECT * FROM sets order by id desc ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                      
                                       <th>Appelation</th>                                        <th>Level</th>
                                                   <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php  echo $bu['name']; ?></td>
             <td><?php  echo $bu['levels']; ?></td>
            
              <td><a href="?sectl&link=Set Fees Program&dels=<?php  echo $bu['id']; ?>" style="color:#f00; font-weight:bold" onclick="return confirm('Are you sure you want to delete this')">Delete</a>                        
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
          
          </div>
        </div>

</div></div>

<?php
if(isset($_GET['dels'])){
	$id=$_GET['dels'];
	$conp=$con->query("DELETE FROM sets where id='$id'") or die(mysqli_error($con));
	echo '<meta http-equiv="Refresh" content="0; url=?sectl&link=Settings">';

}
?>

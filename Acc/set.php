 <div class="col-sm-6">
          <div class="well">
            
 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

               
              <tr><td>Program</td><td><select required class="form-control" id="sel1" name="prog" >
        <?php
							
								$result = $con->query("SELECT * FROM special order by prog_name") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['prog_name']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
               
                <tr><td>Levels</td><td> <select required class="form-control" id="sel1" name="levels" >
        <?php
							
								$result = $conn->query("SELECT * FROM levels order by levels") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['levels']; ?> </option>
    <?php } ?> 
        
      </select></td></tr> 
      
      
      
       <tr><td>Section</td><td> <select class="form-control" id="sel1" name="section" required >
       
       <option></option> 
        <?php
							
								$result = $con->query("SELECT * FROM main_sects") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                       
                 
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['name']; ?> </option>
         
      
    <?php } ?> 
     <option value="others">others</option>
        
      </select></td></tr> 
              <!---  
              <tr><td>Bank</td><td><input type="text" name="bank" value="<?php echo $pob; ?>" required="required"/></td></tr>--->
              
              
                <tr><td>School Fees</td><td><input type="number" name="fees" value="<?php echo $tels; ?>" /></td></tr>
                
                
                
               <tr><td>Registration Fee</td><td><input type="number" name="reg" value="<?php echo $sex; ?>" required="required" /></td></tr>
                
                
                
                  
               <tr><td>Admission Package</td><td><input type="number" name="adminp" value="<?php echo $sex; ?>" required="required" /></td></tr>
               
                 
               <tr><td>Student Union</td><td><input type="number" name="sunion" value="<?php echo $sex; ?>" required="required" /></td></tr>
               
               <tr><td>T-Shirt</td><td><input type="number" name="tshirt" value="<?php echo $sex; ?>" required="required" /></td></tr>
           
  
  
               
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

 $p=strtoupper($_POST['prog']);
$l=$_POST['levels'];
$f=$_POST['fees'];

$b=$_POST['bank'];

$r=$_POST['reg'];
$section=$_POST['section'];
$sunion=$_POST['sunion'];
$tshirt=$_POST['tshirt'];
$adminp=$_POST['adminp'];


$query55=$con->query("delete from settings where prog_id='$p' and level_id='$l' and others='$section' " ) or die(mysqli_error($con)) ;



	 $ats=$con->query("insert into  settings  set  
prog_id='$p',level_id='$l',
fees='$f',bank='$b',reg='$r',others='$section',adminp='$adminp',tshirt='$tshirt',sunion='$sunion'") or die(mysqli_error($con)) ;



;

echo '<meta http-equiv="Refresh" content="0; url=?set_fees&link=Set%20Fees%20per%20Program">';	
	
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
		 $d=$con->query("SELECT * FROM special,levels,settings WHERE special.id=settings.prog_id and
		 levels.id=settings.level_id order by settings.id desc ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                      
                                       <th>Program</th>                                        <th>Level</th>
                                            <th>Fees</th>
                                               <th>Tot Pack</th>
                                                   <th>Section</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php  echo $bu['prog_name']; ?></td>
             <td><?php  echo $bu['levels']; ?></td>
              <td><?php  echo $bu['fees']; ?></td>
               <td><?php  echo $bu['reg']+$bu['tshirt']+$bu['sunion']+$bu['adminp']; ?></td>
                     <td><?php  echo $bu['others']; ?></td>
              <td><a href="?set_fees&link=Set Fees Program&dels=<?php  echo $bu['id']; ?>" style="color:#f00; font-weight:bold" onclick="return confirm('Are you sure you want to delete this')">Delete</a>                        
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
	$conp=$con->query("DELETE FROM settings where id='$id'") or die(mysqli_error($con));
	echo '<meta http-equiv="Refresh" content="1; url=?set_fees&link=Set Fees Program">';

}
?>

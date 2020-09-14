 <div class="col-sm-12">
          <div class="well">
            
 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="ddo1.php" role="form" >
    
     <table class="table table-bordered">

               
              <tr><td>Program</td><td><select required class="form-control" id="sel1" name="prog" >
          <?php
							
								$result = $conn->query("SELECT * FROM historic GROUP BY class order by class DESC") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['class']; ?>"  ><?php echo $bu['class']; ?> </option>
    <?php } ?> 
        
      </select></td></tr>
               
                <tr><td>School year</td><td> <select required class="form-control" id="sel1" name="year_id" >
        <?php
							
								$result = $conn->query("SELECT * FROM historic GROUP BY year_id") or die(mysqli_error($conn));
				while($bu=$result->fetch_assoc()){
								?>
                       
        <option></option>          
        <option value="<?php echo $bu['year_id']; ?>"  ><?php echo $bu['year_id']; ?> </option>
    <?php } ?> 
        
      </select></td></tr> 
             
               
                  <tr><td></td><td><button type="submit" name="add" class="myButton"   >Excel Download</button></td></tr>
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
$f=$_POST['fees'];

$b=$_POST['bank'];

$r=$_POST['reg'];


$query55=$con->query("delete from settings where prog='$p' and levels='$l' " ) or die(mysqli_error($con)) ;



	 $ats=$con->query("insert into  settings  set  
prog='$p',levels='$l',
fees='$f',bank='$b',reg='$r'") or die(mysqli_error($con)) ;



;

echo '<meta http-equiv="Refresh" content="0; url=?set_fees&link=Set%20Fees%20per%20Program">';	
	
}
	
?>
          </div>
        </div>
     
     
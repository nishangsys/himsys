<?PHP
$year=date('y')-2;


  $d=$con->query("SELECT * FROM direct_entry where id='".$_GET['fid']."'") or die(mysqli_error($con));
  while($bu=$d->fetch_assoc()){
	 $code=$bu['code'];
	  $name=$bu['name'];
	   $fid=$bu['id'];
	  $last=$bu['last'];
  }
$d=$con->query("SELECT * FROM special where id='".$_GET['id']."'") or die(mysqli_error($con));
	   while($df=$d->fetch_assoc()){
		   $dept=$df['prog_name'];
		   $ik=$df['gh'];
	   }
	   
	   
	 $ass=$con->query("SELECT * from direct_entry where name='$name' ") or die(mysqli_error($con));
	  $bn=$ass->num_rows;
	while ($bs=$ass->fetch_assoc()){
		 
		   $num=$bs['last'];
		  $iid=$bs['id'];
		  
		  }
		  if($num<1){
			 $n=1;
			$new_num=$n+1;
		  }
		  else {
			  $n=$num+1;
		 $new_num=$num+1;
		 
		   
	}
    $L=$n;
	   if($n<10){
		   $ml="000".$L;
	   }
	   else if($n<100){
		   $ml="00".$L;
	   }
	    else if($n<1000){
		   $ml="0".$L;
	   }
	   else {
		   $ml=$L;
	   }
	   
	   $mat="$code/".$ik."/".$year."/".$ml."";
	   ?>
   
   <div class="row">
    <div class="col-sm-10" style="margin-left:30px">


 <form method="post" enctype="multipart/form-data" class="form-horizontal" action="" role="form" >
    
     <table class="table table-bordered">

              <tr><td>Student's Names</td><td><input type="text" name="name" required="required" value="<?php echo $bs['fname'];; ?>" style="width:400px" autocomplete="off"  class="form-control" id="sel1" /></td></tr>
              
               <tr><td>Program: </td><td>
                <select class="form-control" id="sel1" name="dept">
    <option value="<?php
				
			if($_GET['id']=='others'){
				echo $_GET['ydept'];
			}
			else {
			echo	 $_GET['id']; 
			}?>"><?php
				
			if($_GET['id']=='others'){
				echo $_GET['ydept'];
			}
			else {
				 echo $dept; 
			}?></option>
    
  </select>
               
               </td></tr>
               
                <tr><td>Matricule</td><td><input type="text" name="matric" value="<?php
			
				 echo $mat; 
			?>"  required="required"  style="width:400px; color:#f00; text-align:center; font-weight:bold" class="form-control" id="sel1" /></td></tr>
               
               
                 <tr><td>School Year</td><td> 
                  <select class="form-control" id="sel1" name="ayear">
                <option value="<?php echo $ayear; ?>"><?php echo $ayear_name; ?></option>
              
              </select>
                </td></tr>
            
              
              
            <tr><td>Level</td><td> <select class="form-control" id="sel1" name="lev" required>
          
             
       <?php
	   
	   if($_GET['id']=='others'){
		   $l=$_GET['ydept'];;
echo '<option value="'.$l.'">'.$l.'</option>';		
	}
			else {
	   $d=$dbcon->query("SELECT * FROM sets where name='$name' order by levels") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['levels']; ?></option>
    <?php } } ?>
 
  </select></td></tr>
  
  
          <input type="hidden" name="ids"  value="<?php
		 echo $id;		 ?>" required="required"  />


                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-success"   >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	


	$_POST = array_map("ucwords", $_POST);
	

	
$level=$_POST['level'];


$fname=$_POST['name'];

$month=$_POST['month'];
$part=$_POST['part'];
$day=$_POST['day'];

$year=$_POST['year'];
$year_id=$_POST['ayear'];
$dbirth=$_POST['month'];

$matric=$_POST['matric'];

$sex=$_POST['sex'];


$fee=$_POST['fees'];
$part=$_POST['part'];
$accepted=$feeamt/2;
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;
$levels=$_POST['lev'];
$ids=$_POST['ids'];
$yid=$_POST['yid'];
$ass=$_POST['ass'];
$class1=$_POST['dept'];
$matriculex=$_POST['matriculex'];

$matricule=$_POST['matricule'];
$cc=$_POST['department'];
$month=date('m');
$year=date('Y');

$cm=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' ") or die(mysqli_error($conn)) ;
$count=$cm->num_rows;

$c=$conn->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$ayear' ") or die(mysqli_error($conn)) ;

$cD=$conn->query("SELECT * FROM students WHERE 
fname='$fname' and year_id='$ayear' ") or die(mysqli_error($conn)) ;
$name=$cD->num_rows;


	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already registered in the system this year')</script>";
	}
	else if($name>0){
		echo "<script>alert('ERROR. $fname is already registered in the system this year')</script>";
	}
	else {

	 $ats=$conn->query("insert into  students  set  
matricule='$matric',fname='$fname',
level_id='$levels',dept_id='$class1',sex='$sex',year_id='$ayear',sector='".$_GET['fid']."' ") or die(mysqli_error($conn)) ;


 $query55=$con->query("UPDATE direct_entry set last='$L'   where id='".$_GET['fid']."'" ) or die(mysqli_error($con)) ;








echo "<script>alert('Record Created Successfully!'); </script>";
echo '<meta http-equiv="Refresh" content="0; url=?fb&link=%20First%20Block/%20Registration%20Fees%20Payments">';	
	
}
	
}
	
?>
          </div>
          </div>
          
        
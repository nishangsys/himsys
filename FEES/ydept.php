<?PHP
$year=date('y');


  $d=$dbcon->query("SELECT * FROM main_sects where id='".$_GET['fid']."'") or die(mysqli_error($dbcon));
  while($bu=$d->fetch_assoc()){
	 $code=$bu['code'];
	  $name=$bu['name'];
	   $fid=$bu['id'];
	  $last=$bu['last'];
  }
$d=$dbcon->query("SELECT * FROM special where id='".$_GET['id']."'") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
		   $dept=$df['prog_name'];
		   $ik=$df['gh'];
	   }
	   
	   
	 $ass=$dbcon->query("SELECT * from main_sects where name='$name' and  year_id='$ayear'  ") or die(mysqli_error($dbcon));
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
	   
	   $mat="$code/".$ik."/".$ssyear."/".$ml."";
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
				  
			?>"  required="required"  style="width:400px; color:#f00; text-align:left; font-weight:bold" class="form-control" id="sel1" /></td></tr>
               
              
               
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
  
  
                        
                  <tr><td></td><td><button type="submit" name="add" class="btn btn-success"  >SAVE</button></td></tr>
                  <input type="hidden" name="id"  value="<?php echo $l+1; ?>"  />
            </table>
    
    </form><br /><br />
   
        </a>
        </div>
          <?php 
if(isset($_POST['add'])){
	
echo 212223;

	$_POST = array_map("ucwords", $_POST);
	

	
$usr_email = $data['usr_email'];
$user_name = $data['user_name'];
$level=$_POST['level'];


$fname=$_POST['name'];

$part=$_POST['part'];
$day=$_POST['day'];


$matric=$_POST['matric'];

$sex=$_POST['sex'];

$accepted=$feeamt/2;
$guide=$_POST['guide'];
$reg=$_POST['reg'];
$bbm=$_POST['feeamt']-$_POST['part'];
$all=$part+$reg;




$cateory=$_POST['category'];

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

$c=$dbcon->query("SELECT * FROM students WHERE 
matricule='$matric' and year_id='$ayear' ") or die(mysqli_error($dbcon)) ;

$cD=$dbcon->query("SELECT * FROM students WHERE 
fname='$fname' and year_id='$ayear' ") or die(mysqli_error($dbcon)) ;
echo $gg=$cD->num_rows;


	if(mysqli_num_rows($c)>0){
		echo "<script>alert('ERROR. $matric is already registered in the system this year')</script>";
	}
	else if($gg>0){
		echo "<script>alert('ERROR. $fname is already registered in the system this year')</script>";
	}
	else {



	 $ats=$dbcon->query("insert into  students  set  
matricule='$matric',fname='$fname',
level_id='$levels',dept_id='$class1',sex='$sex',year_id='$ayear',sector='".$_GET['fid']."' ") or die(mysqli_error($dbcon)) ;


 $query55=$dbcon->query("UPDATE main_sects set last='$L', year_id='$ayear'  where id='".$_GET['fid']."'" ) or die(mysqli_error($dbcon)) ;





echo "<script>alert('Record Created Successfully!'); </script>";

echo '<meta http-equiv="Refresh" content="0; url=?fb&link=%20First%20Block/%20Registration%20Fees%20Payments">';	
	
}
	
}
	
?>
          </div>
          </div>
          
        
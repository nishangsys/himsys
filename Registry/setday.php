<?php

$level=$_GET['level'];

$sem=$_GET['sem'];
$prog=$_GET['prog'];
$month=$_GET['sname'];



?>
<style>
h4{
	font-weight:bold;
	margin:0px 0px;
	padding:0px 0px;
	line-height:1.2;
}
</style>				<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
<div class="container">

<h4>Program: <span style="color:#f00"><?php echo $prog; ?></span>   Level: <span style="color:#f00"><?php echo $level; ?></span> Semester :  <span style="color:#f00"><?php echo $month; ?>  </span></h4><br />



	<div class="row justify-content-center gst20">
<form id="hdTutoForm" method="POST" action="">



		<div class="col-sm-3">

			
				<div class="input-gpfrm input-gpfrm-lg">
 <label for="inputEmail4">Starts</label>
				<select class="form-control" id="sel1" name="starts" required>
                <option></option>
                <?php
			
	  
	   $d=$dbcon->query("SELECT * from time_table ") or die(mysqli_error($dbcon));
while($bu=$d->fetch_assoc()){ ?>	
				 ?>
   <option value="<?php echo $bu['id'];?>"><?php echo $bu['starts'];?> O'Clock- <?php echo $bu['ends'];?> O'Clock </option>
   <?php } ?>
  </select>
                    
                    	

		</div>

                </div>
                
                <div class="col-sm-3">
                 <label for="inputEmail4">Day</label>
                 <select class="form-control" id="sel1" name="day" required>
                <option></option>
                <?php
			
	  
	   $d=$dbcon->query("SELECT * from days_of_week ") or die(mysqli_error($dbcon));
while($bu=$d->fetch_assoc()){ ?>	
				 ?>
   <option value="<?php echo $bu['name'];?>"><?php echo $bu['name'];?> </option>
   <?php } ?>
  </select>
                </div>
                
                <div class="col-sm-6">

			
				<div class="input-gpfrm input-gpfrm-lg">
 <label for="inputEmail4">Course: </label>
				<select class="form-control" id="sel1" name="course" required>
                <option></option>
                <?php
			
	  
	   $d=$dbcon->query("SELECT * from subject where department='$prog' and level='$level' and sem='$sem' order by subject ") or die(mysqli_error($dbcon));
while($bu=$d->fetch_assoc()){ ?>	
				 ?>
   <option value="<?php echo $bu['roll'];?>"><?php echo $bu['title'];?> (<?php echo $bu['subject'];?>)</option>
   <?php } ?>
  </select>

			 
	</div>
    </div>
    
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="SAVE" name="oks" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['oks'])){
$id=mysqli_real_escape_string($dbcon,$_POST['starts']);
echo $course= $_POST['course'];
$day=mysqli_real_escape_string($dbcon,$_POST['day']);

$dss=$dbcon->query("SELECT * FROM time_table where id='".$id."'   ") or die(mysqli_error($dbcon));
while($rows=$dss->fetch_assoc()){
	 $starts=$rows['starts'];
	  $ends=$rows['ends'];
}

///////what is the subject and code
$dss=$dbcon->query("SELECT * FROM subject where roll='".$course."'   ") or die(mysqli_error($dbcon));
while($rows=$dss->fetch_assoc()){
	 $course_code=$rows['subject'];
	  $title=$rows['title'];
}



$dss=$dbcon->query("SELECT * FROM custom_timetbl where starts='$starts' and ends='$ends' and prog='$prog' and ayear='$ayear' and   level='$level' and day='$day' ") or die(mysqli_error($dbcon));


/////
$counts=$dss->num_rows;
if($counts>0){
	
echo "<script>alert('ERROR. $prog has already a class that starts from $starts to $ends on $day')</script>";

echo '<meta http-equiv="Refresh" content="0; url=?setday ">';	
	
		
}


else {
	
$dS=$dbcon->query("INSERT INTO custom_timetbl SET starts='$starts',ends='$ends',prog='$prog',ayear='$ayear',title='$title',code='$course_code',level='$level',sem='$sem',day='$day'   ") or die(mysqli_error($dbcon));

echo "<script>alert('Success. Time has been Saved')</script>";


echo '<meta http-equiv="Refresh" content="0; url=?setday=&prog='.$_GET['prog'].'&sem='.$_GET['sem'].'&level='.$_GET['level'].'&sname='.$_GET['sname'].'">';		
	
							}
							}
												
           $d=$dbcon->query("SELECT * FROM `days_of_week` ") or die(mysqli_error($dbcon));
	     
	$i=1;	
		
?>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															S/N
														</th>
														<th>Day</th>
	                                           <?php
												 $d=$dbcon->query("SELECT * FROM `time_table`  ") or die(mysqli_error($dbcon));
												 	$a=1;	
												  while($bu=$d->fetch_assoc()){						 
						                         ?>													
											<th><?php echo $bu['starts']; ?> Hrs ---- <?php echo $bu['ends']; ?> Hrs</th>
                                            <?php } ?>		
    										
																										
														
													</tr>
												</thead>
                                                
                                                
                                                
                                                <tbody>
                                                <?php
												 $d=$dbcon->query("SELECT * FROM `days_of_week` ") or die(mysqli_error($dbcon));
												 	
												  while($bu=$d->fetch_assoc()){						 
						                         ?>
   												<tr>
														<td class="center">
                                              <?php echo $a++; ?>
														</td>

								
														</td>
									<td><?php  echo $bu['name']; ?> </td>
                                    
                                    <!----Load all time from the db in the order as above---------->
                                    
                                   
                                   
                                   <?php
												 $ds=$dbcon->query("SELECT * FROM `time_table`  ") or die(mysqli_error($dbcon));
												 	$i=1;	
												  while($bus=$ds->fetch_assoc()){						 
						                         ?>													
											<td>
											
										<?php
											
											$dm=$dbcon->query("SELECT * FROM `custom_timetbl` where starts='".$bus['starts']."' and 
											ends='".$bus['ends']."' and prog='".$prog."' and level='".$level."' and day='".$bu['name']."' ") or die(mysqli_error($dbcon));
													
												  while($bm=$dm->fetch_assoc()){
													  $subjec=$bm['title']."<br>";
													 $code=$bm['code'];
												  
                                            
											?>
                                        	<a href="?setday&prog=<?php echo $_GET['prog']; ?>&sem=<?php echo $_GET['sem']; ?>&level=<?php echo $_GET['level']; ?>&sname=<?php echo $_GET['sname']; ?>&del=<?php echo $bm['id']; ?>"  style="color:#000;" onclick="return confirm('Are you sure you wish to delete this?')"><?php echo $subjec; ?> (<?php echo $code; ?>)  </a>  
                                            <?php } ?> 
                                            
                                            </a><br />
                                             </td>
                                            <?php } ?>	


													</tr>


		<?php   }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
                                
                                

                                                 <?php
	
 
 if(isset($_GET['del'])){
	 
	 $id=$_GET['del'];
	 
	 $checks = $dbcon->query("DELETE FROM custom_timetbl WHERE  id='$id' ");
	 echo "<script>alert('Action Successfull')</script>";
	  
	  
echo '<meta http-equiv="Refresh" content="0; url=?setday=&prog='.$_GET['prog'].'&sem='.$_GET['sem'].'&level='.$_GET['level'].'&sname='.$_GET['sname'].'">';		
	 
 }
 ?>

<?php

$level=$_POST['level'];
$sem=$_POST['sem'];
$prog=$_POST['querystr'];




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

<h4>Program: <span style="color:#f00"><?php echo $prog; ?></span>   Level: <span style="color:#f00"><?php echo $level; ?></span> Semester :  <span style="color:#f00"><?php echo $sem; ?>  </span></h4><br />



     
     
											                                            <?php
									
												
           $d=$dbcon->query("SELECT * FROM `subject` where department='$prog' and level='$level' and sem='$sem' GROUP BY subject ") or die(mysqli_error($dbcon));
	     
	$i=1;	
		
?>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															S/N
														</th>
														<th>Course Code</th>
	                                                    <th>Course Title</th>
                                                        <th>Action</th>
																										
														
													</tr>
												</thead>
                                                
                                                
                                                
                                                <tbody>
                                                <?php
												
												 	
												  while($bu=$d->fetch_assoc()){						 
						                         ?>
   												<tr>
										<td class="center"><?php echo $a++; ?></td>
									<td><?php  echo $bu['title']; ?> </td>
                                    <td><?php  echo $bu['subject']; ?> </td>
                                    
                                    <!----Load all time from the db in the order as above---------->
                                    
                                   
                                            <?php } ?>	


													</tr>

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

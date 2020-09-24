
    									                                            <?php
																						
					
					 $name=mysqli_real_escape_string($dbcon,$_POST['querystr']);
					$sectors=mysqli_real_escape_string($dbcon,$_POST['names']);
					
					  
	
           $d=$dbcon->query("SELECT * FROM  courses where db1>0 GROUP BY db1 ORDER BY db1 DESC  ") or die(mysqli_error($dbcon));
	     
	$i=1;	
		
?>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
                                                                                                        
                                                        <th>Program</th>
                                                        
                                                             
                                                        <th>Action</th> 
        														
													</tr>
												</thead>
                                                
                                                
                                                
                                                <tbody>
                                                <?php
												  while($bu=$d->fetch_assoc()){


						 
						 ?>
   												<tr>
														<td class="center">
                                                        <?php echo $i++; ?>
														</td>

								                
                                               <td><?php echo $bu['db1']; ?></td>   

        <td>
        
        <a href="?goto_mgtupload&did=<?php echo $bu['db1']; ?>&dgdgdg"><button class="btn btn-success"   >Upload <?php echo $bu['course_code']; ?> Ca Mark</button>
        
        
        
        
        </td>
													</tr>


		<?php   }?>
												</tbody>
											</table>
      
    </tbody>
  </table>
  </div> </div>
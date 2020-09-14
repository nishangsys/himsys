
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
   LAST 10 ADMITTED <?PHP echo $_GET['fid'];  ?> STUDENTS
      </div>             
 
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Matricle</th>
                                    <th style="text-align:center;">Level</th>
                                     <th style="text-align:center;">ProgramYear</th>      
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= mysql_query("select  * from students where sector='".$_GET['fid']."' and year_id='$ayear' ORDER BY id DESC LIMIT 10  " ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['matricule']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['levels']; ?></td>
                                    <td style="text-align:center; word-break:break-all; width:180px;"> <?php echo $row ['departmet']; ?></td>
                                    
  
          		
           
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                        
                         
                         
                         
                         </table>


          
        </div>
     
</body>
</html>

       
</div>
<style>
table{
	text-align:left;
}
</style>

  <?php
 
	  		$result= $dbcon->query("SELECT * from levels,special,students  where  special.id=students.dept_id AND levels.id=students.level_id AND students.year_id='$ayear' " ) or die (mysqli_error($dbcon));
 
  ?>
	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                                          <th style="text-align:center;">Matricule</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                         
                            
                                   
                   <th style="text-align:center;">Action</th>
                                                  

                                </tr>
                            </thead>
                            <tbody>
								<?php
							
							
								$num=1;
								while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row['fname']; ?></td>
                                                        <td style="text-align:center; word-break:break-all; width:130px;"> <?php echo $row ['matricule']; ?></td>

								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['prog_name']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $lev=$row ['levels']; ?></td>
                                    
								
                                       
			
            <td style="text-align:center; word-break:break-all; width:100px;">					
                   
       <a href="?uname=<?php echo $name; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>&levelss=<?php echo $lev; ?>">      <button type="button" class="btn btn-primary btn-sm">UPDATE</button> </a>    </td>     
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>


          
                   <div class="row">
     
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

          
        </div>
        </div>
        </div>
    </div>

</div>
</body>
</html>

       <?php
	   /*
	   if(isset($_GET['delete'])){
	   $id=$_GET['delete'];
	   $name=$_GET['name'];
	   $year_id=$_GET['ayear'];
	   $result12= $dbcon->query("delete from historic where roll='$id' " ) or die(mysqli_error($dbcon)) ;
	     $result123= $dbcon->query("delete from students where fname='$name' and year_id='$ayear' " ) or die(mysqli_error($dbcon)) ;
		 echo "<script>alert('Delete Successfull')</script>";
	   }
	   */
	   ?>
</div>
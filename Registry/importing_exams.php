<?php  $prog=$_POST['prog'];
?>
<div class="container">
 <div class="row">
 
  <h4>Program : <span style="font-weight:bold; color:#f00"><?php echo $prog;  ?></span> ||
   
  
    
      Semester : <span style="font-weight:bold; color:#f00"><?php echo $sem=$_POST['sem'];   ?></span> ||
      
       Level : <span style="font-weight:bold; color:#f00"><?php echo $level=$_POST['level'];  ?></span>
   
   </h4>  
 
      
  <div class="col-sm-5">

            <div class="form-group">
                <h4 style="color:#f00; font-weight:bold; padding:10px 10px; background:#ff0">UPLOAD EXAMS MARKS IN EXCEL ONLY</h4>
            </div>
            <form method="post" action="Exams/import_excel.php?prog=<?php echo  $prog ; ?>&sem=<?php echo $sem; ?>&level=<?php echo $level; ?>" enctype="multipart/form-data">

                <div class="form-group">
                   <input type="file" name="excelfile" id="excelfile" />
               </div>
               <input type="hidden" name="dept" value="<?php echo $prog; ?>" />

                <div class="form-group">
                    <button class="btn btn-info">Upload <?php echo  $prog ; ?> Exams Marks</button>
                </div>

            </form>
            
             <img src="../img/uploadexams.png" />
        </div>
   
   
     <div class="row">
        
  <div class="col-sm-6" style="border:2px solid#000">
  <div class="alert alert-info text-center" style="margin-top:20px;">
						UPLOADED MARKS OF <?PHP echo $prog; ?> LEVEL <?PHP echo $level; ?>  THIS <?PHP echo $ayear; ?>
                        
                        <a href="?uploading_ca&did=<?php echo $_GET['did']  ?>&id=<?php echo $_GET['id'] ?>&level=<?php echo $_GET['level']; ?>&sch_id=<?php echo $_GET['sch_id']; ?>&del=<?PHP echo $code; ?>&ayear=<?PHP echo $ayear; ?>&dept=<?PHP echo $dept_name; ?>&gsgsggs" class="btn btn-danger" onclick="return confirm('Are you sure you wish to Delete. If yes , make sure you upload again')"> Undo /Delete Uploaded <?PHP echo $code; ?> EXAMS for <?PHP echo $ayear; ?> 
</a>
                        </div>
  
  <table class="table table-bordered table-striped">
				<thead>
					</thead><th>S/N</th>
                    <th>Matricule</th>
					<th>Course Code</th>
					<th>Academic Year</th>
					<th>Ca Marks</th>
				
				<tbody>
					<?php
					//connection
					

					$sql = "SELECT * FROM my_Registry where sem='".$_GET['term']."'
					AND levels='".$_GET['level']."' AND ayear='".$_GET['ayear']."' 
					AND code='".$_GET['code']."'";
					$query = $conn->query($sql) or die(mysqli_error($conn));
					
					$a=1;

					while($row = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $a++; ?></td>
                           <td><?php echo $row['matric']; ?></td>

							<td><?php echo $row['code']; ?></td>
							<td><?php echo $row['ayear']; ?></td>
							<td><?php echo $row['ca']; ?></td>
						</tr>
						<?php
					}

					?>
				</tbody>
			</table>
  
  </div>
  </div>
    
 
 <!--
 <h3 style="font-family:'Arial Black', Gadget, sans-serif">Importing <?php echo $prog; ?>  Exams Marks</h3>
 
        <div class="col-sm-12">
 <iframe src="Exams/index.php?dept=<?php echo  $prog ; ?>&ayear=<?php echo $ayear; ?>&term=<?php echo $term; ?>&level=<?php echo $level; ?> " allowFullScreen style="width: 97%;
			float:left;
			background: #FFF;
            border:none;
            height:2000px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div></div></div>
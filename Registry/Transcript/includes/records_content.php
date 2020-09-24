
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                    
                      <div class="row">
        <div class="col-sm-4">
          <div class="well">
         <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#060">  <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"> </a> <?php echo $secto; ?> LOGIN</h4>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p>
            <h4 >
            <strong>School Year: <span style="color:#f00"><?php echo $ayear; ?></span></strong>
            
            
            | &nbsp;&nbsp;&nbsp;&nbsp; 
            
            
             <strong>Semester: <span style="color:#f00"><?php if($semester==1){
				 echo "First Semester";
			 }
			 else {
				 echo "SECOND SEMESTER";
			 }; ?></span></strong>
            </h4>
            </p>
          </div>
        </div>
      </div>
                      
                    </div>
                </div>
               <H3 style="margin:0PX"> HIMS SCHOOL MANAGEMNT SYSTEM <i class="icon-fast-forward"></i> <span style="color:#f00"> <?PHP echo $_GET['link']; ?></span></H3>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
					
	if(isset($_GET['new'])){
	include '../Registry/new_intake.php';
	}
	if(isset($_GET['old'])){
	include '../Registry/old_students.php';
	}
	if(isset($_GET['generate'])){
	include '../Registry/our_list.php';
	}
	if(isset($_GET['foreigners'])){
	include '../Registry/foreigners.php';
	}	
	if(isset($_GET['nf'])){
	include '../Registry/nf.php';
	}		
	/*if(isset($_GET['edits'])){
	include '../Registry/edit.php';
	}*/
	
	if(isset($_GET['edits'])){
	include '../Registry/edit_student1.php';
	}
	
	if(isset($_GET['c_list'])){
	include '../Registry/c_lists.php';
	}
	if(isset($_GET['change'])){
	include '../Registry/change.php';
	}
	if(isset($_GET['others'])){
	include '../Registry/other_s.php';
	}	
	if(isset($_GET['settings'])){
	include '../Registry/settings.php';
	}		
	if(isset($_GET['resit'])){
	include '../Registry/resit.php';
	}
	if(isset($_GET['promote'])){
	include '../Registry/promote.php';
	}
	if(isset($_GET['imports'])){
	include '../Registry/import.php';
	}	
	
	if(isset($_GET['stats'])){
	include '../Provost/tstats.php';
	}
	
		if(isset($_GET['upload'])){
	include '../Exams/upload.php';
	}
	
	
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
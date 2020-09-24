
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
            <strong>School Year: <span style="color:#f00"><?php echo $ayear_name; ?></span></strong>
            
            
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
               <H3 style="margin:0PX"> BUIB SCHOOL MANAGEMNT SYSTEM <i class="icon-fast-forward"></i> <span style="color:#f00"> <?PHP echo $_GET['link']; ?></span></H3>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
					
	if(isset($_GET['all_programs'])){
	include '../HOD/all_programs.php';
	}
		if(isset($_GET['dload_clists'])){
	include '../HOD/dload_clist.php';
	}
		if(isset($_GET['prog_clists'])){
	include '../HOD/prog_clist.php';
	}
	if(isset($_GET['upload_ca'])){
	include '../HOD/upload_ca.php';
	}
	if(isset($_GET['uploading_ca'])){
	include '../HOD/uploading_ca.php';
	}
	if(isset($_GET['edit_ca'])){
	include '../HOD/edit_ca.php';
	}
	if(isset($_GET['edit_mks'])){
	include '../HOD/edit_mks.php';
	}
	if(isset($_GET['print_uploaded'])){
	include '../HOD/all_programs.php';
	}
	if(isset($_GET['uploaded_copy'])){
	include '../HOD/dload_clist.php';
	}
	if(isset($_GET['print_uploadedca'])){
	include '../HOD/print_uploadedca.php';
	}
	if(isset($_GET['mgt_upload'])){
	include '../HOD/chose_mgtyear.php';
	}
	if(isset($_GET['goto_mgtupload'])){
	include '../HOD/mgt_upload.php';
	}
	if(isset($_GET['evaluate'])){
	include '../HOD/evaluate.php';
	}
	if(isset($_GET['my_programs'])){
	include '../HOD/my_programs.php';
	}
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
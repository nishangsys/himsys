
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
					
	if(isset($_GET['new_user'])){
	include 'chosen.php';
	}
	
	if(isset($_GET['first'])){
	include '../Admission/first.php';
	}
	if(isset($_GET['academic_year'])){
	include '../Admission/academic_year.php';
	}
	if(isset($_GET['current_ayear'])){
	include '../Admission/current_ayear.php';
	}
	
	if(isset($_GET['mark'])){
	include '../Admission/save_marks.php';
	}
	if(isset($_GET['generate'])){
	include '../Admission/generate.php';
	}
	if(isset($_GET['pof'])){
	include '../Admission/setting_pass.php';
	}
	
	if(isset($_GET['successful'])){
	include '../Admission/successful.php';
	}
	if(isset($_GET['okg'])){
	include '../Admission/okg.php';
	}
	if(isset($_GET['entrance'])){
	include '../Admission/entance.php';
	}
	
	if(isset($_GET['final'])){
	include '../Admission/entrance_list.php';
	}
	
	if(isset($_GET['nentrance'])){
	include '../Admission/nentrance_list.php';
	}
	
	if(isset($_GET['get_nentrance'])){
	include '../Admission/nentrance.php';
	}

	if(isset($_GET['our_list'])){
	include '../Admission/our_list.php';
	}
	if(isset($_GET['our_elist'])){
	include '../Admission/our_elist.php';
	}
	
	if(isset($_GET['admission_letters'])){
	include '../Admission/admission_letters.php';
	}
	if(isset($_GET['stats'])){
	include '../Admission/stat.php';
	}
	
	if(isset($_GET['materials'])){
	include '../Admission/materials.php';
	}
	
	if(isset($_GET['marks'])){
	include '../Admission/programs.php';
	}
	
	if(isset($_GET['continue'])){
	include '../Admission/continue.php';
	}
	if(isset($_GET['two'])){
	include '../Admission/two.php';
	}
	if(isset($_GET['three'])){
	include '../Admission/three.php';
	}
	
	if(isset($_GET['one'])){
	include '../Admission/page3.php';
	}
	
	if(isset($_GET['level'])){
	include 'chosen.php';
	}
	if(isset($_GET['add_dept'])){
	include '../Admission/add_dept.php';
	}
	if(isset($_GET['add_sect'])){
	include '../Admission/add_sect.php';
	}
	if(isset($_GET['create_hod'])){
	include '../Admission/new_account.php';
	}
	
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
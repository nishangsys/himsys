
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                    
                      <div class="row">
        <div class="col-sm-4">
          <div class="well">
         <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#060">  <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"> </a> SUPER ADMIN LOGIN</h4>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p>
            <h4 >
            <strong>Current School Year: <span style="color:#f00"><?php echo $ayear; ?></span></strong>
            
            
            | &nbsp;&nbsp;&nbsp;&nbsp; 
            
            
             <strong>Current Semester: <span style="color:#f00"><?php if($semester==1){
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
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
					
	if(isset($_GET['new_user'])){
	include 'chosen.php';
	}
	if(isset($_GET['academic_year'])){
	include '../Admission/academic_year.php';
	}
	if(isset($_GET['current_ayear'])){
	include '../Admission/current_ayear.php';
	}
	
	if(isset($_GET['Registry'])){
	include '../Admission/Registry.php';
	}
	if(isset($_GET['our_list'])){
	include '../Admission/our_list.php';
	}
	if(isset($_GET['stats'])){
	include '../Admission/stat.php';
	}
	
	if(isset($_GET['marks'])){
	include '../Admission/programs.php';
	}
	
	if(isset($_GET['generate'])){
	include '../Admission/generate.php';
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
	if(isset($_GET['create_hod'])){
	include '../Admission/new_account.php';
	}
	
	if(isset($_GET['all_HODs'])){
	include 'all_HOD.php';
	}
	
	if(isset($_GET['assign'])){
	include 'assign_course.php';
	}
	if(isset($_GET['chosen'])){
	include 'new_user.php';
	}
	if(isset($_GET['view'])){
	include 'viewing_course.php';
	}
	if(isset($_GET['assignments'])){
	include 'my_ass.php';
	}
	if(isset($_GET['submit_ass'])){
	include 'submiting_ass.php';
	}
	if(isset($_GET['my_profile'])){
	include 'my_profile.php';
	}
					
					?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
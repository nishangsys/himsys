
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
               
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
					
	if(isset($_GET['new'])){
		
	//include '../Registry/new_intake.php';
	include '../Registry/new.php';
	}
	if(isset($_GET['pgnew'])){
	
	include '../Registry/pgnew.php';
	}
					
	if(isset($_GET['pnew'])){
		
	include '../Registry/pnew.php';
	}
	if(isset($_GET['old'])){
	include '../Registry/old_students.php';
	}
	if(isset($_GET['admitting'])){
	include '../Registry/newing.php';
	}
	if(isset($_GET['getdata'])){
	include '../Registry/getdata.php';
	}
	if(isset($_GET['admit'])){
	include '../Registry/admit.php';
	}
	if(isset($_GET['phadmit'])){
	include '../Registry/phadmit.php';
	}
	if(isset($_GET['print_ent'])){
	include '../Registry/print_ent.php';
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
	if(isset($_GET['edits'])){
	include '../Registry/edit.php';
	}
	if(isset($_GET['c_list'])){
	include '../Records/c_lists.php';
	}
	if(isset($_GET['pgc_list'])){
	include '../Registry/pgc_lists.php';
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
	if(isset($_GET['imports'])){
	include '../Registry/import.php';
	}	
	if(isset($_GET['edit'])){
	include '../Exams/edit.php';
	}
	if(isset($_GET['single'])){
	include '../Exams/add.php';
	}
	if(isset($_GET['import_ca'])){
	include '../Registry/HOD/upload_ca.php';
	}
	if(isset($_GET['import_marks'])){
	include '../Registry/chose_involve.php';
	}
	if(isset($_GET['import_subjects'])){
	include '../Registry/chose_sectcode.php';
	}
	if(isset($_GET['edit_course'])){
	include '../Registry/edit_course.php';
	}
	
	if(isset($_GET['importing_marks'])){
	include '../Registry/import_marks.php';
	}
	
	
	if(isset($_GET['importing_subjects'])){
	include '../Registry/seeimport_subjects.php';
	}
	
	
	if(isset($_GET['importing_mysubjects'])){
	include '../Registry/import_subjects.php';
	}
	
	if(isset($_GET['ph_marks'])){
	include '../Registry/pbm_marks.php';
	}
	if(isset($_GET['stats'])){
	include '../Provost/tstats.php';
	}
	
	if(isset($_GET['academic_year'])){
	include '../Cash/academic_year.php';
	}
	
		if(isset($_GET['upload'])){
	include '../Exams/upload.php';
	}
	if(isset($_GET['move'])){
	include '../Registry/move.php';
	}
	
		if(isset($_GET['moving'])){
	include '../Registry/moving.php';
	}	
	
	if(isset($_GET['set_prog'])){
	include '../Registry/set_prog.php';
	}	
	if(isset($_GET['set_as'])){
	include '../Registry/set_as.php';
	}
	if(isset($_GET['transcript'])){
	include '../Registry/transcript.php';
	}
	if(isset($_GET['diploma'])){
	include '../Registry/diploma.php';
	}	
	if(isset($_GET['result_slip'])){
	include '../Registry/result_slip.php';
	}	
	if(isset($_GET['presult_slip'])){
	include '../Registry/presult_slip.php';
	}
	if(isset($_GET['hnd'])){
	include '../Registry/hnd.php';
	}
	if(isset($_GET['record_hnd'])){
	include '../Registry/recor_hnd.php';
	}
	if(isset($_GET['general_slip'])){
	include '../Registry/general_slip.php';
	}
	if(isset($_GET['pgeneral_slip'])){
	include '../Registry/pgeneral_slip.php';
	}
	if(isset($_GET['time_table'])){
	include '../Registry/time_table.php';
	}
	if(isset($_GET['set_day'])){
	include '../Registry/set_day.php';
	}
	if(isset($_GET['setday'])){
	include '../Registry/setday.php';
	}
	if(isset($_GET['nexts'])){
	include '../Registry/nexts.php';
	}
	
	if(isset($_GET['spread'])){
	include '../Registry/spread.php';
	}
	if(isset($_GET['buildfor'])){
	include '../Registry/buildfor.php';
	}
	if(isset($_GET['frequency'])){
	include '../Registry/frequency.php';
	}
	if(isset($_GET['add_edit'])){
	include '../Registry/add_edit.php';
	}
	if(isset($_GET['edit_pubhmks'])){
	include '../Registry/edit_pubhmks.php';
	}
	if(isset($_GET['edit_nonpubhmks'])){
	include '../Registry/edit_nonpubhmks.php';
	}
	if(isset($_GET['edit_mks'])){
	include '../Registry/edit_mks.php';
	}
	if(isset($_GET['set_cv'])){
	include '../Registry/set_leastcv.php';
	}
	if(isset($_GET['build'])){
	include '../Registry/rank.php';
	}
	if(isset($_GET['ranking'])){
	include '../Registry/ranking.php';
	}
	if(isset($_GET['course_validation'])){
	include '../Registry/course_validation.php';
	}
	if(isset($_GET['import_names'])){
	include '../Registry/chose_dept.php';
	}
	if(isset($_GET['importing_names'])){
	include '../Registry/importing_names.php';
	}
		if(isset($_GET['import_exams'])){
	include '../Registry/import_exams.php';
	}
	if(isset($_GET['importing_exams'])){
	include '../Registry/importing_exams.php';
	}
		
		if(isset($_GET['importing_names'])){
	include '../Registry/importing_names.php';
	}
	
		if(isset($_GET['active_students'])){
	include '../Registry/active_students.php';
	}
	if(isset($_GET['m_sheet'])){
	include '../Registry/m_sheet.php';
	}
	if(isset($_GET['contacts'])){
	include '../Registry/contacts.php';
	}
	if(isset($_GET['edit_course'])){
	include '../Registry/edit_course.php';
	}
	if(isset($_GET['editing_subj'])){
	include '../Registry/editing_subj.php';
	}
	if(isset($_GET['add_course'])){
	include '../Registry/add_course.php';
	}
	if(isset($_GET['import_resits'])){
	include '../Registry/import_resits.php';
	}
	if(isset($_GET['resits_results'])){
	include '../Registry/resits_results.php';
	}
	if(isset($_GET['resits'])){
	include '../Registry/resit_ca.php';
	}
	if(isset($_GET['buib_matricule'])){
	include '../Registry/buib_matric.php';
	}
	
	if(isset($_GET['round_up'])){
	include '../Registry/round_up.php';
	}
	if(isset($_GET['uploading_exams'])){
	include '../Registry/uploading_exams.php';
	}
	
	if(isset($_GET['evaluate'])){
	include '../DVCA/evaluate.php';
	}
	if(isset($_GET['evaluate_exams'])){
	include '../DVCA/evaluate_exams.php';
	}
	if(isset($_GET['evaluating'])){
	include '../DVCA/evaluating.php';
	}
	
	if(isset($_GET['sms_exams'])){
	include '../Registry/sms_exams.php';
	}
	if(isset($_GET['promote'])){
	include '../Registry/promote.php';
	}
	
	if(isset($_GET['goto_mgtupload'])){
	include '../Registry/mgt_exams.php';
	}
		?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
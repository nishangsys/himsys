<?php
include '../includes/acc_heads.php';
?>
<style>
body{
	font-size:16px;
}

ul li{
	padding:10px 10px;
	border-bottom:2px solid#CCC;
}
ul li a{
	color:#093;
	font-weight:bold;
	font-size:16px;
}
ul li a:hover{
	color:#f00;
	background:#09C;
	font-weight:bold;
}

</style>

 
       <div class="col-sm-2 sidenav" style="background:#eee; height:100%; color:#fff">
     
      <ul class="nav nav-pills nav-stacked">
      
      <li class="active"><a href="?"><span class="pull-left hidden-xs showopacity glyphicon glyphicon-home"></span> &nbsp Home</a></li>
      
      
         <li><a href="?requisiting&link=Preparing Requisition : Choose a staff to prepare Requisitions">Prepare Requisition</a></li>
         
         <li><a href="?chosing_staff&link=Todays Requisition">Todays Requisition</a></li>
        <li><a href="?req_records">Requisitions Records </a></li>
        
         <li><a href="?completed_fee&link=Fee situation">Completed Fees</a></li>
         
         <li><a href="?fee_records&link=General Fee Statistics and Records">Fee Statistics</a></li>
         
             <li><a href="?complete_records&link=General Fee Statistics and Records">Complete Fees</a></li>
             
             
           
         <li><a href="?all_requisitions&link=View Requistions">View Requistions</a></li>
          
      </ul><br>
     
      </div>





 <div class="col-sm-9">
  <h3 style="text-align:center; background:#CF9; padding:10px 10px; border:1px solid#CCC"> <?php echo $_GET['link']; ?></h3>



<?php
if(isset($_GET['home'])){
	include 'acc_menu.php';
}

if(isset($_GET['first'])){
		include 'fees.php';
	}
	
	if(isset($_GET['current'])){
	include 'current_year_id.php';
	}
	
	if(isset($_GET['bank_first'])){
		include 'bank_fees.php';
	}
	
	
	if(isset($_GET['fee_records'])){
		include '../fees/stats.php';
	}
	if(isset($_GET['completed_fee'])){
		include '../fees/fee_completed.php';
	}
	
	if(isset($_GET['prepareit'])){
		include 'prepareit.php';
	}
	
	
	
	
	
	
	
	
	
	
	if(isset($_GET['record_others'])){
		include 'record_others.php';
	}
	if(isset($_GET['record'])){
		include 'recording.php';
	}
	if(isset($_GET['bank_record'])){
		include 'bank_record.php';
	}
	
	if(isset($_GET['completed_fees'])){
		include 'completed_fees.php';
	}
	
	if(isset($_GET['recording'])){
		include 'bank_recording.php';
	}
	
	if(isset($_GET['save_requisitions'])){
		include 'save_requisitions.php';
	}
		if(isset($_GET['deposits'])){
		include 'deposits.php';
	}
		if(isset($_GET['my_deposits'])){
		include 'depositing.php';
	}
		if(isset($_GET['withdrawals'])){
		include 'withdrawals.php';
	}
	if(isset($_GET['my_withdrawal'])){
		include 'withdrawing.php';
	}
	
	if(isset($_GET['recording'])){
		include 'recordings.php';
	}
	if(isset($_GET['expreq'])){
		include 'requisits.php';
	}
	
	if(isset($_GET['req_records'])){
		include 'recordings12.php';
	}
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_GET['2'])){
		include 'page3.php';
	}
 if(isset($_GET['add_mclass'])){
	   include 'add.php';
   }
   if(isset($_GET['income_class'])){
	   include 'income_class.php';
   }

 if(isset($_GET['add_class'])){
	   include 'add_class.php';
   }
   if(isset($_GET['moreexp'])){
	   include 'moreexp.php';
   }
   if(isset($_GET['add_classes'])){
	   include 'add_classes.php';
   }
   if(isset($_GET['requisition'])){
	   include 'requisition.php';
   }
   if(isset($_GET['requisiting'])){
	   include 'requisiting.php';
   }
   
    if(isset($_GET['chosing_staff'])){
	   include 'chose_staff.php';
   }
   
   
   
   
   if(isset($_GET['receives'])){
	   include 'receives.php';
   }
    if(isset($_GET['receiving'])){
	   include 'receiving_them.php';
   }
     if(isset($_GET['add'])){
	   include 'add.php';
   }
    if(isset($_GET['raw_material'])){
	   include 'raw_materials.php';
   }
    if(isset($_GET['sell'])){
	   include 'selling.php';
   }
     if(isset($_GET['to_ward'])){
	   include 'to_ward.php';
   }
    
   if(isset($_GET['look'])){
	   include 'to_staff.php';
   }
   if(isset($_GET['chose_staff'])){
	   include 'chose_staff.php';
   }
    if(isset($_GET['our_staff'])){
	   include 'sales.php';
   }
    if(isset($_GET['nonstaff'])){
	   include 'non_staff.php';
   }
    if(isset($_GET['sell_drug'])){
	   include 'chose_who.php';
   }
   if(isset($_GET['cash_sales'])){
	   include 'cash_sales.php';
   }
    if(isset($_GET['daily_reports'])){
	   include 'daily_report.php';
   }
     if(isset($_GET['sector'])){
	   include 'sector.php';
   }
    if(isset($_GET['lab'])){
	   include 'lat_tecs.php';
   }
   if(isset($_GET['lab_staff'])){
	   include 'chose_labstaff.php';
   }
  
   if(isset($_GET['who'])){
	   include 'run_qury.php';
   }
    if(isset($_GET['my_labtec'])){
	   include 'to_lab.php';
   }
   
     if(isset($_GET['seeit'])){
	   include 'see_it.php';
   }
   
     if(isset($_GET['all_requisitions'])){
	   include 'requisitions.php';
   }
?>


	
</div>	


</body>
</html>


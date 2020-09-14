

<?php

?>
<style>
.com1{
	width:30px;

	background:url(../img/com.png);
	
	float:left;
	
}
.com{
	
	background:#f00;
	height:25px;
	padding:0px 5px;
	font-size:12px;
	border-radius:15px 15px 15px 15px;
	color:#fff;
	float:left;
	position:absolute;
	top:0px;
	margin-left:20px;	
}

</style>
<script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script language="JavaScript" src="js/pop-up.js"></script>
 <div class="left" style="height:1100px">  
  
    
  <div id='cssmenu' style="height:1000px">
<ul style="line-height:2">

 <!---
    <li ><a href='<?PHP echo $_SERVER['_SELF']; ?>?add_depts'><span><i class="fa fa-home fa-2x"></i>  Add/Edit Department.</span></a>
    <li ><a href='<?PHP echo $_SERVER['_SELF']; ?>?add_cate'><span><i class="fa fa-home fa-2x"></i>  Add/Edit Category.</span></a>

   
  <li ><a href='<?PHP echo $_SERVER['_SELF']; ?>?register_staff'><span><img src="../img/newc.png" />  Register Staff</span></a>
 
   </li>
   ---->
   
     
   <li class='active has-sub'><a href="<?PHP echo $_SERVER['_SELF']; ?>?our_staff"><span><img src="../img/res.png" /> eMPLOY  Staff</span></a>
   <ul>
                             <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?our_staff"><span>New Staff</span></a>
                             <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?all_staffs"><span>Unsolved Cases</span></a>

                              <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?update_staff"><span>Add job details</span></a>
                      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?edit_details"><span>Edit job details</span></a>

                
            
      </ul>
   </li>
   
   
 
    <li class='active has-sub'><a href='<?PHP echo $_SERVER['_SELF']; ?>?my_bonus'><span><img src="../img/newc.png" />  Assign Bonuses</span></a>

	
	
    <li class='active has-sub'><a href='<?PHP echo $_SERVER['_SELF']; ?>?my_deduction'><span><img src="../img/sum.png" />  Assign Deductions</span></a>
    <ul>
                              <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?my_deduction"><span>add loan</span></a>
                             <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?sanctions"><span >add sanctions</span></a>

                
            
      </ul>
   </li>   

     
     
   <li class='active has-sub'><a href="<?PHP echo $_SERVER['_SELF']; ?>?our_staff"><span><img src="../img/recycle.png" /> empty items</span></a>
   <ul>
                             <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?empty_bonuses"><span>EMPTY BONUSES</span></a>
                             <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?empty_deducts"><span style="font-size:12px">EMPTY DEDUCTIONS</span></a>

                
            
      </ul>
   </li>  
   
   
   
 
          
       
      <li class='active has-sub'><a href="#"><span><img src="../img/mem.png" />Our Staffs </span></a>
      
      <ul>
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?our_staff"><span>See All </span></a>
	        <li ><a href="pforms/index.php" target="_blank"><span>print staff </span></a>

      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?change_pic"><span>Change Photo </span></a>
        <li ><a href="../barcode/html/BCGcode39.php" target="_blank"><span>Staff Cards </span></a>
      
         
       
      </ul></li>
     
      <li class='active has-sub'><a href="#"><span style="color:#f00"><img src="../img/mem.png" />Suspension/ Leave</span></a>
      
      <ul>
      
         <li><a href="<?php echo $_SERVER['SELF']; ?>?suspend"><span>Suspend a staff</span></a>


      <li><a href="<?php echo $_SERVER['SELF']; ?>?unsuspend_staff"><span>unSuspend staff</span></a>
            
     <li ><a href="<?php echo $_SERVER['SELF']; ?>?grant_leave"><span style="color:#f00">Grant Leave</span></a>
       <li><a href="<?php echo $_SERVER['SELF']; ?>?all_onleave" style="font-size:14px"><span>All on Leave</span></a>
              <li><a href="<?php echo $_SERVER['SELF']; ?>?all_onleave" style="font-size:14px"><span>Cancel a Leave</span></a>


       </ul></li>
     
      <li class='active has-sub'><a href="#"><span><img src="../img/MONY.png" />SALARY CENTER</span></a>
      
      <ul>
      
            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?note"><span>Make Voucher </span></a>
                     <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?undo_voucher"><span style="color:#f00">caNcel Voucher </span></a>


      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?before_tax"><span>Bonuses </span></a>

      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?after_tax"><span>Deductions </span></a>
      
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?undo_taxgenerate"><span>caNcel Deductions </span></a>
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?redo_taxgenerate"><span>redo Deductions </span></a>
      
       
      
         
       
      </ul></li>
      
      
      <li class='active has-sub'><a href="#"><span><img src="../img/pg.png" />PAY SLIP</span></a>
      
      <ul>
            <li ><a href="generate.php" target="_blank"><span>gENERATE NOW</span></a>
            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?add_deductions" ><span style="color:#F0F">add deductions</span></a>
              <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?edit_slip" ><span style="color:#F0F">Edit PAYSLIP</span></a>
                    <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?our_salaries" ><span>print one / All </span></a>


      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?undo_generate"><span>cancel generate </span></a>
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?generate"><span>redo generate </span></a>
      
         
       
      </ul></li>
      
      
      
       <li class='active has-sub'><a href="#"><span><img src="../img/pg.png" /> DEPARTMENTAL SLIP</span></a>
      
      <ul>
      
      <?PHP
	  $d=mysql_query("SELECT * FROM all_departments order by name") or die(mysql_error());
	  while($row=mysql_fetch_assoc($d)){
	  
	  ?>
            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?dept=<?php echo $row['name']; ?>"><span><?php echo $row['name']; ?></span></a>
               
        <?php } ?> 
       
      </ul></li>
      
      
      
      
      <li class='active has-sub'><a href="#"><span><img src="../img/log.png" /> Scanning Center</span></a>
      
      <ul>
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?check_in"><span>Check IN Staffs </span></a>
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?check_out"><span>Check OUT Staffs </span></a>
         
       
      </ul></li>
      
   
      
     <li  class='active has-sub'><a href="<?php echo $_SERVER['SELF']; ?>?permission">
        <span>  <img src="../img/ss.png" />  Change Center</span></a>
        <ul>
      
   </li
      ><li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?change_cate"><span style="color:#f00">Change Category</span></a>
      
      <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?change_dept" ><span>Change Department</span></a>
      
            <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?change_salary" ><span>Change Salaries</span></a>


      
          
      </ul></li>
      
   
       
   <li class='active has-sub'><a href="#"><span><img src="../img/cl.png" /> Attendance Zone</span></a>
      
      <ul>
      
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?today_rec"><span>Daily Records</span></a>
      
      <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?download" style="font-size:14px"><span>Monthly Records</span></a>
            <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?myown" style="font-size:14px"><span>Individual Records</span></a>

      
      
      </ul></li>
  
     
     
      
            
      <li class='active has-sub'><a href="#"><span style="color:#09C"><i class="fa fa-folder-open fa-2x"></i> CNPS ZONE</span></a>
      
      <ul>
      
      
      <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?declare_cnps" style="font-size:14px"><span>Declare Staff</span></a>
            <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?declare_cnps" style="font-size:14px"><span>PRINT A COPY</span></a>
                        <li><a href="graph.php" target="_blank" style="font-size:14px"> <span>Salaries Trend</span></a>
                        <li><a href="dept_graph.php" target="_blank" style="font-size:14px"> <span>Department Trend</span></a>



      
      
      </ul></li>
      
             
      <li class='active has-sub'><a href="#"><span ><i class="fa fa-print fa-2x"></i> PRINT AREA</span></a>
      
      <ul>
       <li><a href="../staffs/printcontracts.php" target="_blank" style="font-size:14px"><span>Contract workers</span></a>
      
      <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?monthly_details" style="font-size:14px"><span>mONTHLY DETAILS</span></a>
      
      
      <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?monthly_printing" style="font-size:14px"><span>Summarized</span></a>
      
      
            <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?declare_taxes" style="font-size:14px"><span>DECLARE TAXES</span></a>
                        <li><a href="graph.php" target="_blank" style="font-size:14px"> <span>Salaries Trend</span></a>
                        <li><a href="dept_graph.php" target="_blank" style="font-size:14px"> <span>Department Trend</span></a>



      
      
      </ul></li>
  
    
    
      
         
          <li class='has-sub'> <a href="<?php $_SERVER['SELF']; ?>?chat"><span> <img src="../img/com.png" /><div class="com1"></div><div class="com">
       
       <?php
	  
$todaye=date('d-m-Y');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");
	   $today=date('d-m-Y');
	   $cu=mysql_query("SELECT COUNT(message) as totcount from chat where name='".$_SESSION['user_name']."'and date2='$today' ")  or die(mysql_error());
	   while($tt=mysql_fetch_assoc($cu)){
		   echo $tt['totcount'];
	   }
	   
	   
	   ?>
       
       
       
       </div> Chat&nbsp;&nbsp; </span></a>
      
       
       
      </li>
      
     

      
  
   

</div>
    </div>
    
   


<?php
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="2; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		echo "<script>window.open('index.php?names','_self')</script>";
		
			
	}
	else {
?>
<script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script language="JavaScript" src="js/pop-up.js"></script>
 <div class="left" >  
  
    
  <div id='cssmenu'>
<ul >

 <li ><a href='frontpage.php?allrooms'><span><img src="../img/house.png" /> All Rooms</span></a>
  
   </li>
   
   
  <li class='active has-sub'><a href='#'><span><img src="../img/newc.png" /> New Client</span></a>
   <ul>
            <li ><a href="frontpage.php?new_student"><span>Register Client</span></a>
          


      <li ><a href="frontpage.php?assign"><span>Assign a Room</span></a>
      <li ><a href="frontpage.php?pays"><span>Receive Payments</span></a>
                        <li ><a href="frontpage.php?room_change" ><span style="color:#f00">Change Room</span></a>

      <li ><a href="frontpage.php?overtime"><span>Overtime </span></a>
            <li ><a href="frontpage.php?checkout"><span>Check Out </span></a>

            
      </ul>
   </li>
   
   <li class='active has-sub'><a href='frontpage.php?return'><span><img src="../img/user_go.png" /> Returning Client</span></a>
   <ul>
            <li ><a href="frontpage.php?return"><span>Register Client</span></a>

      <li ><a href="frontpage.php?assign"><span>Assign a Room</span></a>
      <li ><a href="frontpage.php?pays"><span>Receive Payments</span></a>
            
      </ul>
   </li>
   
   <li class='active has-sub'><a href='#'><span><img src="../img/res.png" /> Reservations</span></a>
   <ul>
            <li ><a href="frontpage.php?reservations"><span>Make Reservation</span></a>
                  <li ><a href="frontpage.php?roomchange"><span>Change Room</span></a>

      <li ><a href="frontpage.php?allreserves"><span>See All</span></a>
      <li ><a href="frontpage.php?cancelre"><span>Cancel / Confirm</span></a>
            
      </ul>
   </li>
   
   
   
   
 
          
       
      <li class='active has-sub'><a href="#"><span><img src="../img/ss.png" />  New Members </span></a>
      
      <ul>
      <li ><a href="frontpage.php?add_facil"><span>Add a Facility </span></a>
      <li ><a href="frontpage.php?add_member"><span>Add a member </span></a>
      
            <li><a href="frontpage.php?tosolv_member"><span>Confirm Member</span></a>
            
            <li><a href="frontpage.php?memcontri"><span>Members Paymts </span></a>    
            

 
       
      </ul></li>
      <!-----------Existing membesr----------------->
      
      <li class='active has-sub'><a href="#"><span><img src="../img/mem.png" />  Existing Members </span></a>
      
      <ul>
      <li ><a href="frontpage.php?all_members"><span>All Members</span></a>
      <li ><a href="frontpage.php?members_payagain"><span>Update Finance</span></a>
      
            <li><a href="frontpage.php?change_package"><span>Change Category</span></a>
            
            <li><a href="frontpage.php?mem_block"><span>Suspend Member</span></a>
            
                        <li><a href="frontpage.php?unmem_block"><span>Unsuspend Mem</span></a>

            
            
 
       
      </ul></li>
      
        <!-----------Existing membesr----------------->
      
      <li class='active has-sub'><a href="#"><span><img src="../img/log.png" />  My Members </span></a>
      
      <ul>
      <li ><a href="frontpage.php?our_register"><span>Our Register </span></a>
      <li ><a href="frontpage.php?members_receipt"><span>Print Receipt</span></a>
      
            
            
 
       
      </ul></li>
      
   
      
   
      
   
      <li class='active has-sub'><a href="#"><span><img src="../img/user_green.png" /> Visitors</span></a>
      
      <ul>
      
      <li class='has-sub'><a href="frontpage.php?inquiries"><span>New Visitor</span></a>
          <li class='has-sub'><a href="frontpage.php?all_inquiries"><span>See All</span></a>
            
          
      </ul></li>
 
  
     
     
      
      
      
      <li class='active has-sub'><a href="#"><span><img src="../img/edit_button.png" />  Update Center </span></a>
      
      <ul>
      
      <li class='has-sub'><a href="frontpage.php?trigger1"><span>Update Name </span></a>
      
       
       
      </ul></li>
         
         
          <li class='has-sub'><a href="frontpage.php?chat"><span> <img src="../img/comment.png" />Chat </span></a>
      
       
       
      </ul></li>
      
     
        
        
       <!---
                 <li  ><a href="spend.php" ><span> <img src="acc.png" /> Spend</span> </a></li>

          <li  ><a href="spend.php" ><span> <img src="acc.png" /> Spend</span> </a></li>
      
      --->
    
	  
	
      
     </li>
       
       
       
        </ul>
          
       
 
 <!--------
  <li  ><a href="frontpage.php?unsub" ><span> Unsubscribe</span> <i class="fa fa-user-times  fa-2x"></i> </a></li>
  
   <li  ><a href="frontpage.php?resub" ><span> Resubscribe</span> <i class="fa fa-user-plus  fa-2x"></i> </a></li>
   
   ------------->
  
    
    
      
  
   

</div>
    </div>
    
    <?php } } ?>
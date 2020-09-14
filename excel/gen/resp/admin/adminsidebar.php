<?php
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="2; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='20'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		echo "<script>window.open('index.php?names','_self')</script>";
		
			
	}
	else {
		
?>
<div class="left" style="line-height:1">   
    
  <div id='cssmenu'  >
<ul  >

 <li ><a href='adminpage.php?allrooms'><span><img src="../img/house.png" /> All Rooms</span></a></a>
  
   </li>
   
    
   
   
   
    <li class='active has-sub'><a href='#'><span><img src="../img/newc.png" /> New Client/Discount</span></a>
   <ul>
         
                        <li ><a href="adminpage.php?room_change" ><span style="color:#f0f">Change Room</span></a>

            <li ><a href="adminpage.php?checkout"><span style="color:#f00; text-decoration:blink">Check Out </span></a>
            
                        <li ><a href="adminpage.php?discount"><span >Discount a Room </span></a>


            
      </ul>
   </li>
   
   
   
   
   
  <li class='active has-sub'><a href='#'><span><img src="../img/hp.png" /> Room's Status</span></a>
   <ul>
            <li ><a href="adminpage.php?occupied"><span>Occupied Rooms</span></a>
          <li ><a href="adminpage.php?vacated"><span>Vaccated Rooms</span></a>


      <li ><a href="adminpage.php?reserved"><span>Reserved Rooms</span></a>
      
            
      </ul>
   </li>
   
         
   
   
   
   
   <li class='active has-sub'><a href="#"><span><i class="fa fa-folder-open fa-2x"></i> Financial Records</span></a>
      
      <ul>
      
     
      <li ><a href="adminpage.php?today"><span>Daily Records</span></a>
       <li ><a href="?which_day"><span>Search Day</span></a>
      
      <li><a href="adminpage.php?seeee" style="font-size:14px"><span>Monthly Records</span></a>
               <li ><a href="<?php $_SERVER['SELF'] ?>?monthlypie" ><span>Monthly Sector </span></a>
                              <li ><a href="<?php $_SERVER['SELF'] ?>?yearlypie" ><span>Yearly Sector </span></a>

   
      </ul></li>
      
      
      
       <li class='active has-sub'><a href="#"><span><i class="fa fa-user fa-2x"></i> Productivity records</span></a>
      
      <ul>
      
     
       <li ><a href="?others"><span>Others' </span></a>
     <li ><a href="?waitress"><span>Waitress</span></a>
   
      </ul></li>
      
      
      
      
  
   
   
      <li class='active has-sub'><a href="#"><span><img src="../img/gad.png" /> All Stocks</span></a>
      
      <ul>
      <?php
	  $rt=$con->query("SELECT * FROM products GROUP BY serial") or die(mysqli_error($con));
	  while($df=$rt->fetch_assoc()){
	  ?>
     
      
          <li class='has-sub'><a href="adminpage.php?bstock=<?php  echo $df['serial']; ?>"><span><?php  echo $df['serial']; ?></span></a>
          
                  </li>
            
          <?php } ?>
      </ul>
   
   
   
 
   <li class='active has-sub'><a href="adminpage.php?client_records"><span><img src="../img/coins1.png" /> CLOSING BALANCES</span></a>
      
      <ul>
      
      <li ><a href="?closings"><span>BY DEPARTMENT</span></a>
      
       <li ><a href="?weekly"><span>BY week Days</span></a>
       
      </li></ul>
  
  
  
  
   <li class='active has-sub'><a href="adminpage.php?client_records"><span><img src="../img/log.png" /> Check In/out Records</span></a>
      
      <ul>
      
      <li ><a href="adminpage.php?client_records"><span>All Records</span></a>
  
      
      
      
      </ul></li>
  
  
  
 
  <li class='active has-sub'><a href="#"><span><img src="../img/tower.png" />  Add Room </span></a>
      
      <ul>
      
      <li class='has-sub'><a href="adminpage.php?addroom"><span>Add a Room </span></a>
      
      <li class='has-sub'><a href="adminpage.php?addblock"><span>Add a Block </span></a>
      
       <li class='has-sub'><a href="adminpage.php?addcate"><span>A Category </span></a>
       
       
       
      </ul></li>
         
          
      
             <li class='active has-sub'><a href="#"><span>  <i class="fa fa-users fa-2x"></i> Create Account </span></a>
      
      <ul>
      
      <li class='has-sub'><a href="adminpage.php?new_account"><span>Users Account </span></a>
              <li class='has-sub'><a href="adminpage.php?changepwd"><span>Change Password </span></a>

      <!----
       <li class='has-sub'><a href="adminpage.php?register"><span>Class Account </span></a>
      ---->
    
      
       
          
      </ul></li>
      
      
      <li class='active has-sub'><a href="#"><span>  <img src="../img/env.png" /> Inbox </span></a>
      
      <ul>
      
              <li class='has-sub'><a href="adminpage.php?all_deletes"><span>Deleted Goods </span></a>      
                    <li class='has-sub'><a href="adminpage.php?all_paybacks"><span>Pay Backs </span></a>      
    
          
      </ul></li>
          
           
        <li class='active has-sub'><a href="#"><span>  <img src="../img/sett.png" /> Settings Zone </span></a>
      
      <ul>
      
              <li class='has-sub'><a href="adminpage.php?overtime"><span>Set Overtime </span></a>      
    
          
      </ul></li>
       
       
    
	  
	
      
   
     
          <li ><a href="adminpage.php?update_name" ><span><i class="fa fa-refresh fa-2x "></i>  Update Address</span> </a>
         
          </li>
          
       
     
     
 
    
      
  
   

</div>
    </div>
    

      
  
   


    
    <?php } } ?>
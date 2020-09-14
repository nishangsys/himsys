


<?PHP


@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}
$level=$_SESSION['banned'];

		
?>
<script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script language="JavaScript" src="js/pop-up.js"></script>
 <div class="left" style="height:700px" >   
    
  <div id='cssmenu'>
<ul > 
    
   
    <li class='active has-sub'><a href='#'><span><i class="fa fa-home fa-2x"></i> Department Zone</span></a>
   <ul>
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?add_dept"><span>Add Department</span></a>

          

      </ul>
   </li>
   
   
   <li class='active has-sub'><a href='<?PHP echo $_SERVER['_SELF']; ?>?return'><span><img src="../img/cal.png" /> Ware House  </span></a>
   <ul>
                                <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?all_fixedstocks"><span> Add Stocks</span></a>
                                
                                 <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?excel_upload"><span> Excel upload</span></a>
            
            
            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?excel_download"><span> Excel download</span></a>
  
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?stock_sector"><span>Supply Sectors</span></a>



       
      </ul>
   </li>
   
     <li class='active has-sub'><a href='<?PHP echo $_SERVER['_SELF']; ?>?return'><span><img src="../img/add.png" /> Available Stocks </span></a>
   <ul>
          
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?all_stocks"><span>See All Stocks</span></a>


                        <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?take_note"><span> Take Note stocks</span></a>
                        
                        <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?depleted_stocks"><span> Depleted stocks</span></a>


       
      </ul>
   </li>
   
   
   
   
   
   
      <li class='active has-sub'><a href='<?PHP echo $_SERVER['_SELF']; ?>?return'><span style="color:#f00"><img src="../img/add.png" /> Stock Returns </span></a>
   <ul>
          
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?remove_stocks"><span>Return Stocks</span></a>


                        <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?depreciation"><span>Depreciation</span></a>
                  
                  
                    <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?all_returns"><span>All Returns </span></a>


                        <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?all_depreciation"><span>All Depreciation</span></a>
                        
                      

       
      </ul>
   </li>
   
   
   
   
 
   
   
      <li class='active has-sub'><a href='#'><span><img src="../img/an.png" /> Supply Reports </span></a>
   <ul>
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?daily_supplies"><span>Daily Reports</span></a>

            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?depts"><span>Departmental</span></a>
            
               
            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?excel_download2"><span> Excel download</span></a>
  
                        <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?all_reports"><span>All Reports</span></a>

            
         
      </ul>
   </li>
   
   
   

      <li class='active has-sub'><a href='#'><span><img src="../img/rep.png" /> Print Daily Reports </span> <ul>
         <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?individual"><span>Individual</span></a>

            <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?depart"><span>Departmental</span></a>
            
            
         
      </ul>
      </li>
        
       
  
 
          

  
      
     
        
        
       <!---
                 <li  ><a href="spend.php" ><span> <img src="acc.png" /> Spend</span> </a></li>

          <li  ><a href="spend.php" ><span> <img src="acc.png" /> Spend</span> </a></li>
      
      --->
    
	  
	
      
     </li>
       
       
       
        </ul>
               
    
 
 <!--------
  <li  ><a href="<?PHP echo $_SERVER['_SELF']; ?>?unsub" ><span> Unsubscribe</span> <i class="fa fa-user-times  fa-2x"></i> </a></li>
  
   <li  ><a href="<?PHP echo $_SERVER['_SELF']; ?>?resub" ><span> Resubscribe</span> <i class="fa fa-user-plus  fa-2x"></i> </a></li>
   
   ------------->
  
    
    
      
  
   

</div>
    </div>
    
  
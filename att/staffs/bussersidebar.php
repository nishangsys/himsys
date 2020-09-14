

<?php 
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="2; url=login.php">';

}

else {
	

$username=$_SESSION['user_name'];
 $branch='BUEA';
$_SESSION['full_name']= $names;
  $level=$_SESSION['banned'];
 if($level==20 or $level==19){
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
 <div class="left" >  
  
    
  <div id='cssmenu'>
<ul style="line-height:2">

 <!---
    <li ><a href='<?PHP echo $_SERVER['_SELF']; ?>?add_depts'><span><i class="fa fa-home fa-2x"></i>  Add/Edit Department.</span></a>
    <li ><a href='<?PHP echo $_SERVER['_SELF']; ?>?add_cate'><span><i class="fa fa-home fa-2x"></i>  Add/Edit Category.</span></a>

   
  <li ><a href='<?PHP echo $_SERVER['_SELF']; ?>?register_staff'><span><img src="../img/newc.png" />  Register Staff</span></a>
 
   </li>
   ---->
   
   
      
   
       
   <li class='active has-sub'><a href="#"><span><img src="../img/cl.png" /> Attendance Zone</span></a>
      
      <ul>
      
      <li ><a href="<?PHP echo $_SERVER['_SELF']; ?>?today_rec"><span>Daily Records</span></a>
      
      <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?download" style="font-size:14px"><span>Monthly Records</span></a>
            <li><a href="<?PHP echo $_SERVER['_SELF']; ?>?myown" style="font-size:14px"><span>Individual Records</span></a>

      
      
      </ul></li>
  
     
     
    
      
         
      
     

      
  
   

</div>
    </div>
    
    <?php } } ?>
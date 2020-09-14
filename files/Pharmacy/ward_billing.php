
<script language="JavaScript" src="../js/pop-up.js"></script>





    <?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$con = mysqli_connect('localhost','nishang','google1234','hospital');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","hospital"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

//////////////////////////////////////////////////////////////////////////////////////////////////////
 $table=$_GET['tabs'];
 $db_basket=$ybasket;
$name=$_GET['good'];
$dept=$_GET['dept'];
	
	 
	?>
      
    
      
             <div class="clear"></div>
        
  
        
        
     

      

      </span>
     </h1>  
 
    	<div class="chat_data">
        
        
        <div class="col-sm-12" style="padding:10PX 0PX; background:#006; border:1PX solid#fff; font-weight:bold; color:#ff0">
       <a href=javascript:popcontact('rec.php?roll=<?php echo $table; ?>&area=0') style="color:#fff; text-decoration:blink">
        
     <div class="col-sm-7" style="padding:10PX 0PX; background:#006; border:1PX solid#fff">
        
    Print Receipt
        </div></A>
        
        <a href=javascript:popcontact('validate.php?roll=<?php echo $table; ?>&name=<?php echo $table; ?>') style="color:#fff; text-decoration:blink">   
        <div class="col-sm-5" style="padding:10PX 0PX; background:#300;border:1PX solid#fff">   
        
        
    Validate
        </div></A>
        
       
        </div>
        
        
        
            <?PHP
			$a = $con->query("SELECT SUM(qty),SUM(total),price,product,category,ids,id,price,qty,total FROM basket where tab='".$_GET['tabs']."' and status='0' and qty>0 GROUP BY category,product order by product ") or die(mysqli_error($con));
			$i=1;
			?>
            
            
           
     
   
       <div class="col-sm-12" style="background:#000; padding:0px 0px; text-align:CENTER; border:1px solid#fff">
       <ul class="list-group">
       <?php
		while($rows = $a->fetch_assoc()) {
			?>
     
  <li class="list-group-item" style="background:#000; overflow:hidden;"><span style="float:left; overflow:hidden; color:#FF0; font-weight:bold" >
  <a href="index.php?our_staff=<?php echo $name; ?>&dep=<?php echo $dept; ?>&id=<?php echo $table; ?>&adds=<?php echo $rows['id']; ?>">

  <button type="submit" class="btn btn-default" style="float:left; color:#000; font-size:13px; font-weight:bold " >
  <?php echo $rows['product']; ?><span style="color:#F00; font-weight:bold" > (<?php echo $rows['price']; ?>)</span></button></a>
  
 <a href="index.php?our_staff=<?php echo $name; ?>&dep=<?php echo $dept; ?>&id=<?php echo $table; ?>&reduce=<?php echo $rows['id']; ?>">
 <button type="button" class="btn btn-warning" style="float:right; color:#000; font-size:13px; margin-left:5px "><?php echo $rows['SUM(qty)']; ?></button></a><br /></li>
 
<?php } ?>  
     
            
 </ul>     
      
      
  
 <!--------TOTAL---->   
   <div class="col-sm-12" style="background:#003; padding:0px 0px; text-align:CENTER; border:1px solid#fff">
     <span style="background:#090; padding:15px 20px; float:right; font-size:18px; color:#fff; font-weight:bold ">  
      <?PHP
      	$a = $con->query("SELECT SUM(price*qty) as totbill FROM basket where tab='".$_GET['tabs']."' and status='0' GROUP BY tab") or die(mysqli_error($con));
			
		while($rows = $a->fetch_assoc()) {
			echo $tot=$rows['totbill'];
		}
			?> XAF</span> 
       </div>
       
       <!-----TOTAL--------->
      
  </div> 
    </div>
  <?php
  ?>

       
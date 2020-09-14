<?php

//include '../dbc.php';
require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {
	
		
?>
    
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay Now</title>

        <link href="../style.css" rel="stylesheet" type="text/css" />
		<!--//webfonts-->
</head>


<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>


<link href="../jss/examples.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.common.min.css" rel="stylesheet"/>
        <link href="../jss/kendo.kendo.min.css" rel="stylesheet"/>
        <script src="../jss/jquery.min.js"></script>
        <script src="../jss/kendo.all.min.js"></script>
<script>
$(document).ready(function() {
 $("#datepicker").kendoDatePicker();
});
</script>
<script type="text/javascript">
function doCalc(form) {
  form.exp.value = ((parseInt(form.oldpa.value) ));
   form.bal.value = ((parseInt(form.exp.value) - parseInt(form.paid.value)));
  
}
</script>


<body>
<?php
if(isset($_GET['change'])){
		
	    $ids=$_GET['change'];
		
	  $cus="SELECT * from customers,reserves where customers.client_id='$ids' and reserves.cust_id=customers.client_id  ";
	$run=mysql_query($cus) or die (mysql_error());
	while ($rows=mysql_fetch_assoc($run)){
		  $name=$rows['stu_name'];
		 $nation=$rows['pof'];
		 $room=$rows['room'];
		 
		 $cat=$rows['category'];
		  $id=$rows['client_id'];
		  
		  $r=mysql_query("SELECT * FROM rooms where num='$room' and cateogry='$cat'") or die("Query failed: ".mysql_error());
		  while($c=mysql_fetch_assoc($r)){
			  $fl=$c['floor'];
			 $roomid=$c['id'];
		  }
		  
		 
		 $query_parent = mysql_query("SELECT * FROM categories") or die("Query failed: ".mysql_error());

	
	
?>
    
<div class="right">    
<div class="clear">    
    
    
    <h1 class="he" style="padding:10px 10px"> <span style="color:#Ff0"><?php  echo $name ?> 
Is changing the room reserved </span></h1>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?change=<?php echo $id; ?>" enctype="multipart/form-data" >
    
    <table>
         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $id; ?>" style="width:300px" readonly="readonly" /></td></tr>
                    <tr><td></td><td><input type="hidden" name="froomid" value="<?php echo  $roomid; ?>" style="width:300px" readonly="readonly" /></td></tr>

               <tr><td>Client's Name</td><td><input type="text" name="name" value="<?php echo  $rows['stu_name']; ?>" style="width:300px" readonly="readonly" /></td></tr>
                <tr><td></td><td><input type="hidden" name="cust_id" value="<?php echo  $rows['cust_id']; ?>" style="width:300px" readonly="readonly" /></td></tr>

               
           
              <tr><td>New Room  Category</td><td><select name="parent_cat" id="parent_cat" required>
        <?php while($row = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
        <?php endwhile; ?>        
        </td></tr>               
                 <tr><td>New Room Choosen </td><td> <select name="sub_cat" id="sub_cat" required></select></td></tr>              
   
     <tr><td>Formal Room Category</td><td><input type="text" readonly name="fcat" style="background:#F9F" value="<?php echo  $cat; ?>" id="parent_cat">
           
        </td></tr> 
                         <tr><td> </td><td> <input type="hidden" readonly name="froom" style="background:#F9F" value="<?php echo  $room; ?> of Block <?php echo $fl; ?>" id="sub_cat"></td></tr>              
              
                 <tr><td>Formal Room Chosen </td><td> <input type="text" readonly name="om" style="background:#F9F" value="<?php echo  $room; ?> of Block <?php echo $fl; ?>" id="sub_cat"></td></tr>              
              
                   
               
                <tr>
                  <td>Today's Date</td><td><input type="text" name="total" value="<?php echo date('d-m-Y'); ?>" style="width:300px" onBlur="doCalc(this.form)" required="required"  />
                </td></tr>

                
                <tr>
                
                
               
              
            
                        
                  <tr><td></td><td><button type="submit" name="saves" class="myButton"> Change Reserved Room</button></td></tr>
            </table>
    
    </form><br /><br />
    
    </div>
 </tr></tr>
	 </div>
  		
           <div class="clear"></div>
		
  
   
			
	<?php } } } ?>	 	
</body>
</html>

 <?php if(isset($_POST['saves'])){
	  
				
		 $name=$_POST['name'];		
		$id=$_POST['id'];
		$cust_id=$_POST['cust_id'];
		$cat=$_POST['parent_cat'];
		$room=$_POST['sub_cat'];
		$ocat=$_POST['fcat'];
		$fr_rid=$_POST['froomid'];
		$oroom=$_POST['froom'];		
		$date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   
$hg=mysql_query("SELECT * from rooms where id='$room'  ") or die(mysql_error()) ;

while($ri=mysql_fetch_assoc($hg)){
	 $croom=$ri['num'];
	 $ccate=$ri['cateogry'];
}


 $h=mysql_query("SELECT * from rooms where id='$room' and status!=1 ") or die(mysql_error()) ;
$num=mysql_fetch_assoc($h);
if($num>0){
	echo "<script>alert('ERROR. Room ".$room." is still under use . Choose another')</script>";

}
else {
	
		
			   
			//historique 
		     $histo=mysql_query("UPDATE reserves set category='$ccate',room='$croom' where cust_id='$id' ")or die(mysql_error()) ;
		  
	  $updaterooms=mysql_query("UPDATE rooms set status='1',who='0' where id='$fr_rid' and status='3'  ") or die(mysql_error()) ;

		   		  $updaterooms2=mysql_query("UPDATE rooms set status='3',who='$cust_id' where id='$room' and status='1'") or die(mysql_error());

			
			 echo "<script>alert('SUCCESS. ".$name." Room has been changed from ".$oroom." to ".$room." . THANK YOU')</script>";
			echo '<meta http-equiv="Refresh" content="1; url=adminpage.php?see_allreserves">';
			
		   
}
		
			
		}
	 ?>
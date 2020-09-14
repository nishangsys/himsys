

<?PHP


session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANG SOFTWARES PRODUCTS</title>
		<meta charset="utf-8">
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" type="text/css" />
       

        
		<!--//webfonts-->
</head>
<script type="text/javascript" src="../calendar.js"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script type="text/javascript">
function doCalc(form) {
	    form.expamt.value = (((parseInt(form.day.value) * parseInt(form.expect.value))+parseInt(form.added.value)-parseInt(form.disc.value)));

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<body>


<?php include 'head.php'; ?>

	<div class="contain">
   <div class="subcontain">
     <div class="subcontain">
       <?php include 'bussersidebar.php'; ?>
       <div class="right">
         <div class="calender">
           <script type="text/javascript">
            calendar();
        </script>
         </div>
         
                <div class="calender" style="margin-top:330px; height:auto; overflow:hidden; padding-bottom:20px">
         
         <H1 style="background:#333; color:#FF0">This Month's Statistics</H1>
         <div style="height:20px;  font-weight:bold; float:left; width:220px">Total N<sup>o</sup> Registered so Far :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px"><?php total_clients() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of Cameroonians :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php national() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of  Foreigners :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php foreign() ;?></div>
         
         
         
         
         
         </div>
         
         
         <div class="calender" style="margin-top:500px; height:auto; overflow:hidden; padding-bottom:20px">
         
         <H1 style="background:#333; color:#FF0"><?php echo date('Y'); ?> Statistics</H1>
         <div style="height:20px;  font-weight:bold; float:left; width:220px">Total N<sup>o</sup> Registered so Far :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px"><?php allnationas() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of Cameroonians :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php allnational() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of  Foreigners :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php allforeign() ;?></div>
         
         
         
         
         
         </div>
       
<div class="right">
<?php
//echo "Study " . $_GET['id'] . " at " . $_GET['cat']. " as " . $_GET['n'];;

$ids=$_GET['id'] ;
$floor=$_GET['floor'] ;
	  $cure="SELECT * from customers where client_id='" . $_GET['id'] . "'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $name=$rows['stu_name'];
		 $nation=$rows['pof'];

$query_parent = mysql_query("SELECT * FROM rooms where num='" . $_GET['cat']. "' and floor='" . $_GET['floor']. "' limit 1") or die("Query failed: ".mysql_error());
while($rows=mysql_fetch_assoc($query_parent)){
	
	//what is the mx and min prices
	$query_parent = mysql_query("SELECT * FROM categories where cat='" . $rows['cateogry']. "' limit 1") or die("Query failed: ".mysql_error());
while($ro=mysql_fetch_assoc($query_parent)){
	 $max=$ro['lastprice'];
	 $min=$ro['amt'];
	 $idr=$rows['id'];
	  $roim=$rows['num'];

?>



<h1 style="background:#333; color:#fff; padding:10px 0px">You're Are Giving Out a Room to <span style="color:#ff0"><?php  echo $name ?></span>
<span style="color:#FFF">  || <a href=javascript:popcontact('../reception/roomsreserves.php?roll=<?php echo $idr; ?>&room=<?php echo $roim; ?>') style="color:#fff">See All Reservations for Room <?php echo $roim; ?> </a>
</span></h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?roll=<?php echo $ids; ?>&cat=<?php echo $rows['num']; ?>" enctype="multipart/form-data" >
    
    <table>         
          <tr><td></td><td><input type="hidden" name="id" value="<?php echo  $ids; ?>"   /></td></tr>
                    <tr><td></td><td><input type="hidden" name="nation" value="<?php echo  $nation; ?>"   /></td></tr>          
            <tr><td></td><td><input type="hidden" name="block" value="<?php echo  $floor; ?>"   /></td></tr>          

                    <tr><td>Customer's Names</td><td><input type="text" name="yname" value="<?php echo  $name; ?>"  /></td></tr>               
                   <tr><td>Room Category</td><td><input type="text" name="parent_cat" value="<?php echo  $rows['cateogry']; ?>" readonly  />    
        </td><td>Least Price</td><td><input type="text" value="<?php echo  $max; ?>" style="color:#f00; text-decoration:blink" readonly></td></tr>               
                 <tr><td>Room Number </td><td> <input type="text" name="sub_cat" value="<?php echo  $rows['num']; ?>"  readonly  /></td><td>
                 Maximum Price</td><td><input type="text" value="<?php echo  $min; ?>" style="color:#f00; text-decoration:blink" readonly></td></tr> 
                 
                                <tr><td> Cost of a Room</td><td><input type="text" name="expect"  onBlur="doCalc(this.form)"   style="width:300px;"/></td></tr>              
             
                <tr><td>No of Days/Hours to Stay</td><td><select name="day" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=01;$day<=41;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td></tr> 
               
                <tr><td> Expected Amount</td><td><input type="text" name="expamt"  onBlur="doCalc(this.form)"    style="width:300px; background:#F9C;"/></td></tr>

                <tr><td>Amount Paid</td><td><input type="text" name="paid" style="width:300px" onBlur="doCalc(this.form)" required  /></td></tr>
                      
                <tr><td>Balance</td><td><input type="number" name="bal" style="width:300px; background:red;color:white;" required readonly   /></td></tr>
                <tr><td> </td><td><input type="hidden" name="added" value="0" onBlur="doCalc(this.form)"   /></td></tr>
                
                 <tr><td> </td><td><input type="hidden" name="disc" value="0"    /></td></tr>
                  <tr><td> </td><td><input type="hidden" name="paidto"    /></td></tr>

                
              
            
                        
                  <tr><td></td><td><button type="submit" name="save" class="myButton">Save</button></td></tr>
            </table>
    
    </form>
 
      
     
    </div>
   </div></div></div>
   
    
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php 
}	}
	
}
}
}?>

<?php
	  giveout_room();
	   
	   ?>
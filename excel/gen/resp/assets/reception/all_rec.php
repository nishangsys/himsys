<?php

require_once '../functions/functions.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry. Page restriction by the administartor')</script>";
		;
		
			
	}
	else {
?>
    

<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
        <style>
	
	
	
	#login, #newCustomer, #resetYourPassword {min-height:210px; float:left;}

#login {margin:0 15px 0 40px; width:440px; padding:20px 0 20px;}
#login fieldset {clear:left; padding:0 20px 10px 30px;}
#login .btn, #resetYourPassword .btn {width:208px;}
#login ol {clear:left;}
#login li {margin:0 0 15px 0; list-style-type:none;}
#login label, #resetYourPassword label {width:200px; display:block; padding:0 5px 4px 0; font-size:14px;}
#login input, #resetYourPassword input {width:200px;}
#login .fNote {line-height:17px; text-indent:13px;}
#login .forgot {margin:0 0 0 10px;}
submitError {background:#feeee6 !important; border:1px solid #f25b00 !important;}
.submit {width:100%; font-size:14px; margin:0 -20px 20px -30px; border-width:1px 0;}
.submitError span {display:block;}
#login.cont .submitError li {display:block; margin:10px 0;}
#login .legalAgreement {padding:10px; font-size:10px; border:1px solid #D9EEFA; border-width:1px 0; background:#ECF8FF;}

#loginEmail, #resetEmail {font:italic 13px Georgia, serif;}

#newCustomer {width:440px; padding:20px 0 20px 10px; font-size:10px;}
.ie7 #newCustomer .bVneck {margin-right:350px;}
#newCustomer ul {margin:6px 0 15px 20px;}
#newCustomer ul li {margin:0 0 7px;}
#newCustomer .new, #newCustomer .amazon {float:left; width:180px;}
#newCustomer .new {clear:left; margin:0 10px 0 15px; clear:left;}
#newCustomer b.or {float:left; margin:7px 20px 0 0;}
#newCustomer .amazon .link {width:156px; height:32px; background-image:url(/tng/imgs/login/spLogin.20131114112442.png); background-repeat:no-repeat; background-position:0 0px; margin:0 0 0 5px; padding:0; zoom:1; text-indent:-9999px; overflow:hidden; border:0; display:block;}
#newCustomer .amazon p {margin:16px 0 0 0;}
	
	.bVneck {font-weight:normal; font:italic 18px 'Georgia', serif; background:#2c5987; color:#fff; position:relative; margin:0; line-height:39px; padding:0 28px 0 23px; overflow:visible; float:left;}
.bVneck:after {content:""; background:#2c5987 right -1107px; width:14px; height:40px; position:absolute; top:0; right:0;}

	.cont .inlineErr,
.cont .inputErr input,
.cont .submitError {background:#feeee6 !important; border:1px solid #f25b00 !important;}
.cont .inputErr label {color:#f25b00;}
.cont .submitError {line-height:1.4em; clear:left; padding:12px 25px; border-width:1px 0 !important;}
.cont .submitError span {display:block;}
.cont .action {line-height:18px; margin:0 0 7px 0; display:inline-block; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px;}
body .cont .action {white-space:nowrap; background:#FA5700 !important; color:#fff;}
.cont input {box-shadow:inset 2px 2px 2px #e8e8e8; -webkit-transition:border-color 0.25s 0s ease-in-out; -moz-transition:border-color 0.25s 0s ease-in-out; transition:border-color 0.25s 0s ease-in-out;}
.cont input:focus {border-color:#759AC7; box-shadow:0 0 10px rgba(117, 154, 199, .8); outline:none;}
table,td,tr{cellspacing:2px;}
	
	
	</style>
		<!--//webfonts-->
</head>




<body>

<div class="right">

    <?php
	
	$cust="SELECT * from finances order by name DESC  ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
 
    
<form name="look" method="post" action="frontpage.php?search">
<table style=" border:1px solid silver; line-height:1.7; text-align:justify; font-size:14px; text-transform:uppercase;" cellpadding="5px"  cellspacing="0px" align="center" border="0" width="640px">
<tr bgcolor="#660000">
<td colspan="4" style=" color:#333; font-size:15px;background:#ccc">Search</td>
</tr>
<tr style=" color:#FFF; font-size:15px;background:#1188aa" >
<td  >Enter Search Keyword</td>
<td><input type="text" name="name" size="15"placeholder="use name #" /></td>
<td><input type="submit" value="Search" name="lookfor" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td ><font style="color:#fff;">Name of student</font> </td>
<td><font style="color:#fff;">Class</font></td>
<td ><font style="color:#fff;">Receipt</font></td>

<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];

?>
<?php } ?>
<?php

$search=$_POST["search"];
$flag=0;
$query="select * from finances where  name like '%$search%'  order by name";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr  style='background:
#f4f4f4;



?>'><td >",$row[2],"</td><td>&nbsp;Room ",$row[6],"</td><td style='width:150px;'><a href='print.php?roll=",$row[0],"'>&nbsp;receipt.</a></td></tr>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>
<tr>
<td colspan="3">&nbsp;</td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>

</div>




    </div>
	
    
   
			
		 		
</body>
</html>
<?php } } ?>
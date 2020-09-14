<?php
include('db.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Live Table Edit</title>
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).hide();
$("#last_"+ID).hide();
$("#first_input_"+ID).show();
$("#last_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&firstname='+first+'&lastname='+last;
$("#first_"+ID).html('<img src="load.gif" />');


if(first.length && last.length>0)
{
$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{

$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

$(".editbox").mouseup(function() 
{
return false
});

$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>
<style>
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
.editbox
{
display:none
}
td
{
padding:7px;
}
.editbox
{
font-size:14px;
width:270px;
background-color:#ffffcc;

border:solid 1px #000;
padding:4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
cursor:pointer;
}


th
{
font-weight:bold;
text-align:left;
padding:4px;
}
.head
{
background-color:#333;
color:#FFFFFF

}

</style>

</head>

<body bgcolor="#dedede">
<div style="margin:0 auto; width:750px; padding:10px; background-color:#fff; height:800px;">
 
<h1>Live Table Edit with Jquery Demso</h1>
Tutorial Link <a href="http://9lessons.info">Click Here</a><br /><br/>
<table width="100%">
<tr class="head">
<th>First Name</th><th>Last Name</th>
</tr>

<?php
$today=date('d-m-Y');
$sql=mysql_query("select * from basket where date='$today'");
$i=1;
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$firstname=$row['product'];
$lastname=$row['authorize'];

if($i%2)
{
?>
<tr id="<?php echo $id; ?>" class="edit_tr">
<?php } else { ?>
<tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="edit_tr">
<?php } ?>
<td width="50%" class="edit_td">
<span id="first_<?php echo $id; ?>" class="text"><?php echo $firstname; ?></span>
<input type="text" value="<?php echo $firstname; ?>" class="editbox" id="first_input_<?php echo $id; ?>" readonly="readonly" />
</td>
<td width="50%" class="edit_td">
<span id="last_<?php echo $id; ?>" class="text"><?php echo $lastname; ?></span> 
<input type="text" value="<?php echo $lastname; ?>"  class="editbox" id="last_input_<?php echo $id; ?>"/>
</td>
</tr>

<?php
$i++;
}
?>

</table>
</div>
</body>
</html>

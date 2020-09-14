<?php
//include connection file 
include ("connection.php");

$a1=mysql_query("SELECT * FROM rushs where roll='1'") or die(mysql_error());
 while ($ad=mysql_fetch_assoc($a1)){
	 $ad1[''];
	echo $year_id=$ad['year'];
	 $as=$ad['extra'];
	$ass=$ad['extra2'];
 } 
$dept=$_POST['dept'];
$level=$_POST['levels'];
echo $sql = "SELECT * FROM students where departmet='$dept'  and year_id='$ayear' ";
$queryRecords = mysql_query( $sql) or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<title>NISHANG SYSTEM</title>
</head>
<style>
body{
	line-height:1.8;
	font-size:14px;
}
table{
border-collapse:collapse;
border:1px solid#000;
}
th,td,tr{
border-collapse:collapse;
border:1px solid#000;
}
</style>
<body>



<div class="container" style="padding:0px 100px;">
<h1>UPDATING WAREHOUSE RECORDS</h1><br>
<span style="font-size:16px; color:#F00; margin-top:-50px">Press CTRL+F on your keyboard and type in the product Name in the search bar to Update </span>
<div id="msg" class="alert"></div>
<table id="employee_grid" class="table table-condensed table-hover table-striped bootgrid-table" width="60%" style="margin-top:-50px" cellspacing="0">
   <thead>
      <tr>
         <th>Name</th>
         <th>Level</th>
         <th>Matricule</th>
                <th>Matricule</th>

      </tr>
   </thead>
   <tbody id="_editable_table">
      <?php while( $res=mysql_fetch_assoc($queryRecords)) { ?>
      <tr data-row-id="<?php echo $res['id'];?>">
         <td class="editable-col" contenteditable="true" col-index='0' oldVal ="<?php echo $res['fname'];?>"><?php echo $res['fname'];?></td>
         <td class="editable-col" contenteditable="true" col-index='1' oldVal ="<?php echo $res['levels'];?>"><?php echo $res['levels'];?></td>
         <td class="editable-col" contenteditable="true" col-index='2' oldVal ="<?php echo $res['m atricule'];?>"><?php echo $res['matricule'];?></td>
         
          <td class="editable-col" contenteditable="true" col-index='3' oldVal ="<?php echo $res['departmet'];?>"><?php echo $res['departmet'];?></td>
         
      </tr>
	  <?php } ?>
   </tbody>
</table>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$('td.editable-col').on('focusout', function() {
		data = {};
		data['val'] = $(this).text();
		data['id'] = $(this).parent('tr').attr('data-row-id');
		data['index'] = $(this).attr('col-index');
	    if($(this).attr('oldVal') === data['val'])
		return false;

		$.ajax({   
				  
					type: "POST",  
					url: "server.php",  
					cache:false,  
					data: data,
					dataType: "json",				
					success: function(response)  
					{   
						//$("#loading").hide();
						if(!response.error) {
							$("#msg").removeClass('alert-danger');
							$("#msg").addClass('alert-success').html(response.msg);
						} else {
							$("#msg").removeClass('alert-success');
							$("#msg").addClass('alert-danger').html(response.msg);
						}
					}   
				});
	});
});

</script>
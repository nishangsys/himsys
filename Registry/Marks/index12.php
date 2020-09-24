<!DOCTYPE html>
	
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
<body>
<?php
include '../../includes/dbc.php';
 $_GET['code'];
$FG=$con->query("SELECT * from gen_info,mycerti where mycerti.id='".$_GET['code']."' and mycerti.matric=gen_info.matric") or die (mysqli_error($con));
 while($io=$FG->fetch_assoc()){
	$yname=$io['names'];
	 $c=$io['certia'];
	 $schol=$io['certib'];
	$code=$io['matric'];
 }
 
 
?>
	
	<div class = "row">
		<div class = "col-md-3"></div>
		<div class = "col-md-6 well">
			<h3 class = "text-primary"> <?php echo $yname ?> <?php echo $c; ?> Subjects Obtain from <?php echo $schol; ?></h3>
            
            
            <form name="add_name" id="add_name"   >
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td><input type="text" name="name[]" placeholder="Enter your Subject" class="form-control name_list" /></td>
                                <td><input type="text" name="grade[]" class="form-control name_list" required="required" style="width:120px" placeholder="GRADE/GPA" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				
				
                    
                    
				</form>	
				<br /><br />
			</div>
			<div id = "result">	
	
			</div>	
		</div>
	</div>
</body>


<script>


$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  <td><input type="text" name="grade[]" placeholder="GRADE/GPA" class="form-control name_list"  style="width:120px" required="required" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php?code=<?php echo $code; ?>&school=<?php echo $schol; ?>&cer=<?php echo $c; ?>",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				window.open('thank.php');
				
			}
		});
	});
	
});
</script>


<?php
	
		$q_post = $con->query("SELECT * FROM `mycerti` WHERE matric='".$_GET['mat']."' AND certia='$c' and subject!='' ORDER BY `id` ASC") or die(mysqli_error($con));
		
?>	
		<div class = "col-md-12 content" style = "word-wrap:break-word; background-color:#fff; padding:20px;">



  <table class="table table-bordered" style="width:100%">
    <thead>
      <tr>
        <th style="width:70%">Subject</th>
                <th style="width:70%">CERTICATE</th>
                <th style="width:70%">School</th>

        <th style="width:30%">Grade/GPA</th>
        
        <th>ActioN</th>
      </tr>
    </thead>
    <tbody>
    <?php while($rows  = $q_post->fetch_array()){ ?>
      <tr>
        <td><?php echo $rows['subject']; ?></td>
        <td> <?php echo $rows['certia']; ?></td>
        <td><?php echo $rows['certib']; ?></td>
           <td><?php echo $rows['grade']; ?><?php echo $rows['gpa']; ?></td>
              <td><a href="?code=<?PHP echo $_GET['code']; ?>&area=0&del=<?php echo $rows['id']; ?>&mat=<?PHP echo $_GET['mat']; ?>">DELETE</a></td>
      </tr>
    <?php } ?> 
    </tbody>
  </table>
<?php  
   if(isset($_GET['del'])){
	 $id=$_GET['del'];
	  $df=$con->query("DELETE FROM mycerti where id='$id' ") or die(mysqli_error($con));
	  echo '<meta http-equiv="Refresh" content="0; url=?code='.$_GET['code'].'&area=0&mat='.$_GET['mat'].'">';
   }
	  ?>  

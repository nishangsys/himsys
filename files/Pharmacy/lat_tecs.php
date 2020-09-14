
<!DOCTYPE html>
<html>
	
<head>
	<title>New Student</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="style.css" rel="stylesheet" type="text/css" />
        <style>
		.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
		</style>
		<!--//webfonts-->
</head>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "labs.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>


<body>

              <div class="row">
                       
         <H3 style="text-align:center">LAB TECHNICIANS DASHBOARD</H3 >                <?PHP
						 echo $message;
						?>
                        
                        
<div class="col-sm-8 text-left"> 
      <div class="alert alert-danger">
        <strong>The system says!</strong> Choose a staff to sell to  <a href="?lab_staff">  <button type="button" class="btn btn-primary" style="color:#fff; text-shadow:none" >Sell to Existing staff</button>   </a> 
      </div>

<div class="content">
<form method="post" action="" autocomplete="off">
<table style="background:#CFF" class="table">
<tr>
<td>
<input type="text" class="search" id="searchid" placeholder="Search for people" name="names" /></td>
<td><button type="submit" name="send" class="myButton"   >Search</button></td></tr>

<div id="result">
</div>
</div>
  
  </table>
    </div>
    
    
   
    </div>
	
    
   <?php
   if(isset($_POST['send'])){
$name=$_POST['names'];
	  
		   $date=date('d-m-Y');
		   
		   $mk=$con->query("INSERT INTO customers set stu_name='".$name."',class='$dept',reg_date='$date',gname='lab' ") or die(mysqli_error($con));
		    echo '<meta http-equiv="Refresh" content="0; url=index.php?lab_staff">';
	   
	  }
  
   
   ?>
			

<p>
  <?php
	$_POST = array_map("ucwords", $_POST);
	
	////////////////insert item

if(isset($_POST['OK'])){
$shape=$_POST['name'];
$tel=$_POST['tel'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];

//$df=$con->query("DELETE FROM lab_tecs where name='$shape' and tel='$tel' and branch='$branch'") or die(mysqli_error($con));




$do=$con->query("INSERT INTO lab_tecs SET name='$shape' ") or die(mysqli_error($con));
$message= "<div class='alert alert-success'>".$_POST['name']." Successfully Registered. Thank You</div>";
}

///////////////delete item
if(isset($_GET['delete'])){
	 $id=$_GET['delete'];
	  $dfG=$con->query("DELETE FROM lab_tecs where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Deleted. Thank You</div>";

  }
  
  /////////////for updates
  $doU=$con->query("SELECT * FROM lab_tecs WHERE id='".$_GET['update']."'") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 echo $sha=$nam['name'];
	  $dis=$nam['tel'];
  }
  
  // now update
  if(isset($_POST['Update'])){
	  $shape=$_POST['name'];
	  $cont=$_POST['tel'];
	   $ville=$_POST['cost'];
	 $id=$_GET['update'];
	  $dfGu=$con->query("UPDATE lab_tecs SET name='$shape' where id='$id'") or die(mysqli_error($con));
	   $message= "<div class='alert alert-success'>Item Successfully Updated. Thank You</div>";

  }
 
  
?>
</p>
<p>&nbsp; </p>
<div style="clear:both"></div>
                        <form class="form-inline" action="" method="post">
                      
  
  
  
                        
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Name</label>
    <div class="col-sm-10"> 
      <input type="text"  class="form-control" id="pwd" value="<?php echo $sha; ?>" name="name" placeholder="Labtec Name:" style="width:330px" >
    </div>
  </div>
  
  
  
     <button type="submit" name="OK" class="btn btn-info">Add Lab Technician</button>
  <?php
  if($_GET['update']!=''){
	  echo '<button type="submit" name="Update" class="btn btn-primary">UPDATE</button>';
  }
  ?>
</form>
          
      <?php
	  $do12=$con->query("SELECT * from lab_tecs  order by name ") or die(mysqli_error($con));
	  $i=1;
      
      
      ?>     
        <table class="table table-bordered" style="background:#FFF">
    <thead>
      <tr>
        <th>S/N</th>
        <th> NAME</th>
       
        <th>ACTION</th>
        
      </tr>
    </thead>
    
    
    <tbody>
    <?php while($df=$do12->fetch_assoc()){ ?>
      <tr>
                 <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="white">';
 }
 else
 {
    echo '<tr bgcolor="AliceBlue">';
 }
		
		?>
        <td><?php  echo $i++; ?></td>
        <td><?php echo $name=$df['name']; ?></td>
        
         <td>
            <a href="?lab&branch=<?php echo $branch; ?>&update=<?php echo $df['id']; ?>">
        <button type="button" class="btn btn-info">UPDATE</button>    
          <a href="?lab&branch=<?php echo $branch; ?>&delete=<?php echo $df['id']; ?>"onclick="return (confirm('Are you sure you wish to delete this item'))">
        <button type="button" class="btn btn-danger">DELETE</button>

</a>

<a href="?my_labtec&branch=<?php echo $branch; ?>&name=<?php echo $df['name']; ?>&id=<?php echo $df['id']; ?>" onclick="return (confirm('Are you sure you wish supply to <?php echo $name;  ?>'))">
        <button type="button" class="btn btn-success">SUPPLY ITEMS</button>
</a>




 <?php
	   if(isset($_GET['my_labtec'])){
		   $date=date('d-m-Y');
	    $mk=$con->query("INSERT INTO customers set stu_name='".$_GET['my_labtec']."',class='$dept',reg_date='$date',gname='lab' ") or die(mysqli_error($con));
		    echo '<meta http-equiv="Refresh" content="0; url=index.php?my_labtec2">';
	   }
	   ?>




</td>

       
      </tr>
      
    <?php } ?>
    </tbody>
    
  </table>  
  
  <?php
  
  ?>
       
</div>
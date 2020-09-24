<?PHP
include  '../includes/dbc.php';
 //////////select academic year//////////////
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	  $ayear=$bu['year'];
	 $year=$bu['extra'];
	 $year2=$bu['extra1'];
}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PRINT CA RESULTS</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
}
  @page { size: portrait; }
  .sub{
	  width:645px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  .head1{
	  width:100%;
	  height:auto;
	   margin-top:50px;
	 
  }
  table{
	   width:100%;
  }
 table,tr,td,th{
	 border:1px dashed#000;
	 border-collapse:collapse;
	 padding:5px 5px;
	 font-size:12px;
	 line-height:1.5;
	
 }
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
  .left_box{
	  float:left;
	  height:125px;
	  width:445px;
	  border:1px solid#000;
	  
  }
  .right_box{
	  float:left;
	  height:115px;
	  width:185px;
	  border:1px solid#000;
	  font-size:10px;
	  padding:5px 5px;
	  
  }
  .left_box_textbox{
	  width:98%;
	  padding:5px 5px;
	  border:1px dashed#000;
	  height:20px;
	  
  }
  .for_grades{
	width:20px;
	 margin:0px;
	 padding:0px;
	  float:left;
	  line-height:1.5;
	 
}
.span{
	font-weight:bold;
	font-style:italic;
}
.sn{
	width:20px;
	height:25px;
	float:left;
	border:1px dashed#000;
	clear:both;
}
.main_thing{
	width:100%;
	height:auto;
	overflow:hidden;
	padding-bottom:0px;
	border:1px dashed#000;
	clear:both;
	
}
.footer_box{
	width:98%;
	padding:5px 5px;
	margin-top:20px;
	border:1px solid#000;
	height:25px;
}
.footer_box_left{
	width:50%;
	float:left;
	padding:0px 5px;
	border-right:1px solid#000;
	
	
}
.footer_box_right{
	width:40%;
	
	float:left;
	
}

</style>
</head>

<body>
<div class="sub">
	<?php include '../Cash/header.php';  ?>
	 

    
    <h2>Ca Upload Statistics</h2>
    
    <div class="main_thing">
    
                    <?php           
					 $dm=$conn->query("SELECT special.prog_name as prog, levels.levels as level,special.id as prog_id,levels.id as level_id  FROM special,subjects,levels where special.id=subjects.prog_id and subjects.prog_id='".$_GET['did']."'  
					 and subjects.level_id=levels.id  and subjects.sem='".$_GET['sem']."'  GROUP BY subjects.prog_id,subjects.level_id ") or die(mysqli_error(              $conn));
							
					while($bum=$dm->fetch_assoc()){
						?>
                        <h3><?php echo $bum['prog']; ?> LEVEL <?php echo $bum['level']; ?> <h3>
                        
                        <table>
                        <th>S/N</th><th>Course</th><th>Course Code</th><th>Credit Value</th>
                        <th>Status</th> <th>Ca <br /> Uploaded?</th>
                        <?php           
					 $dc=$conn->query("SELECT * from subjects where prog_id='".$bum['prog_id']."' 
					 and level_id='".$bum['level_id']."' and sem='".$_GET['sem']."'") or die(mysqli_error($conn));
					 $a=1;
							
					while($buc=$dc->fetch_assoc()){
						?>
                        <tr>
                         <td><?php echo $a++; ?></td><td><?php echo $buc['title']; ?></td>
                         <td><?php echo $buc['code']; ?></td><td><?php echo $buc['cv']; ?></td>
                         <td><?php echo $buc['status']; ?></td>
                         <td> <?php           
					 $dcm=$conn->query("SELECT * from my_marks where code='".$buc['code']."' 
					 and dept_id='".$bum['prog_id']."' and year_id='".$_GET['ayear']."' and ca!='' and sem='".$_GET['sem']."' ") or die(mysqli_error($conn));
					$hh=$dcm->num_rows;
					if($hh>=1){
						echo "<span style='color:blue'>&#9989</span>";
					}
					else {
						echo "<span style='color:#f00'>X</span>";
					}
					 ?></td>
                         </tr>
                         <?php } ?>
                        </table>
                        
                        
         <?php } ?>
    
    
    
</div>
</div>

</body>
</html>

<?php
ini_set('max_execution_time', 300000); //300 seconds = 5 minutes
?>
<?php
define('IN_CB', true);

define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "sofocol"); // set database user
define ("DB_PASS","sofocol"); // set database password
define ("DB_NAME","university"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");


if (version_compare(phpversion(), '5.0.0', '>=') !== true) {
    exit('Sorry, but you have to run this script with PHP5... You currently have the version <b>' . phpversion() . '</b>.');
}

if (!function_exists('imagecreate')) {
    exit('Sorry, make sure you have the GD extension installed before running this script.');
}

include_once('function.php');

// FileName & Extension
$department=$_POST['class'];

$levels=$_POST['levels'];
$system_temp_array = explode('/', $_SERVER['PHP_SELF']);
$filename = $system_temp_array[count($system_temp_array) - 1];
$system_temp_array2 = explode('.', $filename);
$availableBarcodes = listBarcodes();
$barcodeName = findValueFromKey($availableBarcodes, $filename);
$code = $system_temp_array2[0];

// Check if the code is valid
if (file_exists('config' . DIRECTORY_SEPARATOR . $code . '.php')) {
    include_once('config' . DIRECTORY_SEPARATOR . $code . '.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT ID CARD</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="style.css" />
        <link rel="shortcut icon" href="pef.png" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="barcode.js"></script>
    </head>
    <body ">
<?php
$roll=$_GET["1"];
$query="select * from school where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $ji16= $row[1];

?>
<?php }?>
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php $ji1= $row[1];

$ji12= $row[2];

?>
<?php }?>
 <?php
$roll=$_GET["1"];
$query="select * from school where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>


<?php 


$ji2= $row[2];

?>
<?php }?>

<?php
$roll=$_GET["1"];
$query="select * from classes where  roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1in=$row['class'];


?><?php } ?>

 <?php
 
$roll=$_GET["1"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php   $takes=$row[1];?><br>

<?php  $takes2=$row[2];?>
</b>

<br>
 <?php

$levels=$_POST["levels"];

$class=$_POST["class"];
?>
<?php } ?>
 <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $take=$row[1];



?>
		 

<?php } ?>
<?php

  $department='ENROLLED NURSING';
 $levels='200';
$table='students';
$class=$_POST["class"];
$roll=$_GET["1"];
echo $query="select * from students where  year_id='$take'  and departmet='$department'  and levels='$levels' order by matricule DESC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) { 
		 
		  $flag=1;
		  ?>


<HTML>
<HEAD>
<title>STUDENT ID CARD</title>
<style>
#pretcon{float:left;margin-left:30px;height:350px;width:493px;margin-top:1px;}
#container{float:left;
width:490px; height:300px;}

#containery{float:left;
width:480px; height:380px;}


#container2{float:left;margin-left:0px;
width:450px; height:200px;}


#container3{float:left;
width:480px; height:100px;}



#container4{float:left;
width:480px; height:20px;}


#coh1{float:left;MARGIN-LEFT:20PX;
width:350px; height:25px;FONT-FAMILY:Iskoola Pota;FONT-SIZE:13px;FONT-WEIGHT:BOLD;


}



#coh2{float:left;margin-left:10px;
width:265px; height:35px;TEXT-ALIGN:CENTER;FONT-WEIGHT:BOLD;COLOR:rgb(80,10,20); FONT-SIZE:30PX;MARGIN-TOP:-15PX;}


#coh3{float:left;
width:390px; height:20px;margin-left:10px;
FONT-FAMILY:Iskoola Pota;FONT-SIZE:11px;FONT-WEIGHT:BOLD;COLOR:#1188dd;}



#container5{float:left;margin-left:-60px;
width:120px; height:80px;margin-top:22px;}

#container6{float:left;margin-left:-10px;
width:380px; height:80px;background:url(image/fish.png);margin-top:22px;}



#container422{float:left;margin-left:1px;
width:127px; height:5px;color:#fff;font-size:13px;background:#75d5fa;}

#container41{float:left;
width:100px; height:17px;}

#container42{float:left;margin-left:-27px;
width:370px; height:17px;color:#fff;font-size:13px;background:#75d5fa;}
.reflected {
    position: relative;
}
.reflected:after {
    content: 'MINISTRY OF HIGHER EDUCATION';
    display: block;
    position: right;
    bottom: -.8em; /* You should change this value to fit your font */
    left: 10px;
    right: 22px;
    opacity: .9;

    /* This is how the text is flipped vertically */
    -webkit-transform: scaleY(-1,1);
    -moz-transform: scaleY(-1,1);
    -o-transform: scaleY(-1,1);
}
.mirror{
display:block;
 -webkit-transform: matrix(-1,0,0,1,0,0);
    -moz-transform: matrix(-1,0,0,1,0,0);
    -o-transform: matrix(-1,0,0,1,0,0);
}
.mirror-icon:befor{
   -webkit-transform: scaleY(-1,1);
    -moz-transform: scaleY(-1,1);
    -o-transform: scaleY(-1,1);
}









</style>
</HEAD>
<BODY>
<div style="margin:auto; width:1100px;margin-top:-50px;">
<div id="pretcon">
<div id="containery">
<div id="container">


<div id="container2">


<div id="container3">


<div id="container5"style="background:url(image/fish.png);">


<div style="float:left;margin-top:15px;margin-left:30px;">
<img src="logoS.png" width="83px" height="80px" STYLE="















">
</div>
<div id="container422" style="text-align:center;"><i></i></div></div>


<div id="container6"style="float:left:margin-top:30px;">


<div id="coh1"style="margin-top:20px;MARGIN-LEFT:-60PX;font-size:11px;"><div class="mirror">MIN. OF EMPLOYMENT & VOCATIONAL TRAINING</div>

<div class="mirror" style="color:#1188aa;margin-left:50px ; ">ST. FRANCIS ADVANCED SCHOOL OF HEALTH SCIENCES</div>




</div>
<div id="coh2" style="text-shadow:1px 1px 1px #000;">
<div class="mirror" style="font-size:24px;"><div style="float:left; margin-top:07px; margin-left:50px;">
<?php echo $takes2;?> 
</DIV></DIV>
<?php
$fnames=$row['first_name'];
$fname=$row['fname'];
$mat=$row['matricule'];
 $cxx2s=$row['cxx2'];
$last=$row['last_name'];
$levels=$row['levels'];
$deptt=$row['departmet'];
$barcode=$row['barcode'];
?>
</div>

<div id="coh3">
<div class="mirror"><DIV STYLE="FLOAT:LEFT; MARGIN-LEFT:90PX; MARGIN-TOP:5PX;">
 </div></div></div>

<div id="coh3"style="font-weight:normal; color:#000;margin-top:-2px;color:#787878;text-align:center;">

</div>
</div>

</div>

<div id="container4" style="margin-left:-7px;">
<div id="container41"></div>

<div id="container42" style="text-align:center;">
<div class="mirror"><DIV STYLE="FLOAT:LEFT; MARGIN-LEFT:140PX;"><i>MENS SANA IN CORPORE SANO</i></div></div>

</div>
</div>


<div style="float:left; width:50px; height:150px;">

<div style="float:left;margin-left:0px; width:20px; height:100px;margin-top:15px;">

		
					<?php
				 $mxx=$row['matricule'];
				 $cxx2=$row['cxx2'];
				$qry = mysql_query("select id as total
from employees where empname='$mxx'"); 
$row = mysql_fetch_assoc($qry); 
 $savep4=$row['total']; 
				
				 ?>
					
					
			<?php  $roll=$row['id'];?>	
			
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="40px" height="35px" style="border:1px solid #efefef;">
					


</div>
<div style="float:left;margin-left:2px;width:150px; height:42px;font-size:12px;font-weight:normal;margin-top:-10px;font-family:Script MT Bold;">
<br>
<div id="float:left; margin-left:50px;color:#ff6666;"></div> </div>
</div>
<div style="float:left;margin-left:-20px;
width:300px;height:180px;background:url(image/long.png);">


<div style="float:left;
width:250px; height:20px;color:#ff6666;text-align:center;">
<div class="mirror"STYLE="FLOAT:LEFT; MARGIN-LEFT:70PX;margin-top;5PX;">STUDENT - IDENTITY - CARD</div>
<div style="float:left; width:50px; height:20px;margin-left:240px;margin-top:-15px;">
<div style="float:left;margin-left:5px; width:40px; height:100px;margin-top:5px;">
<div style="float:left; margin-top:10px; margin-left:-20px">
			<?php $roll=$row['id'];?>	
<img src="load_image.php?pic_id=<?php echo $savep4;?>" width="133px" height="110px"style="border:3px solid #efefef;">
</div>
<div style="float:left;margin-left:-72px;margin-top:-30px;width:42px; height:42px;"><img src="image/stamp.png" width='50px' height='50px'>
<div style="float:left;width:100px; margin-left:30px;margin-top:-25px;"></div></div>
</div></div>
</div>

<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-weight:normal;font-size:11px;">
<div class="mirror"STYLE="FLOAT:LEFT; margin-left:57px;"><?php echo $cxx2s;?></div></div>



<div style="float:left;
width:90px;;height:15px;FONT-WEIGHT:NORMAL;text-transform:uppercase;text-align:left;left;font-size:13px;font-weight:bold;text-transform:uppercase;">

<div class="mirror"STYLE="FLOAT:LEFT;MARGIN-LEFT:-20PX; ">

Born on:</div></div>

<div style="float:left;
width:140px;margin-left:7px;height:15px;font-weight:normal;">
<div class="mirror"STYLE="FLOAT:LEFT; margin-left:69px;text-align:left;"><?php echo $levels;?></div></div>

<div style="float:left;
width:90px;;height:15px;FONT-WEIGHT:NORMAL;text-transform:uppercase;text-align:left;left;font-size:13px;font-weight:bold;text-transform:uppercase;">

<div class="mirror"STYLE="FLOAT:LEFT;MARGIN-LEFT:-20PX; ">


Level:</div></div>




<div style="float:left;
width:140px;margin-left:7px;height:15px;font-weight:normal;">
<div class="mirror"STYLE="FLOAT:LEFT; margin-left:9px;text-align:left;"><?php echo $deptt;?></div></div>



<div style="float:left;
width:90px;;height:15px;FONT-WEIGHT:NORMAL;text-transform:uppercase;text-align:left;left;font-size:13px;font-weight:bold;text-transform:uppercase;">

<div class="mirror"STYLE="FLOAT:LEFT;MARGIN-LEFT:-20PX; ">


Programe:</div></div>







<div style="float:left;
width:140px;margin-left:7px;height:15px;font-weight:normal;">
<div class="mirror"STYLE="FLOAT:LEFT; margin-left:59px;text-align:left;"><?php echo $mat;?></div></div>

<div style="float:left;
width:90px;;height:15px;FONT-WEIGHT:NORMAL;text-transform:uppercase;text-align:left;left;font-size:13px;font-weight:bold;text-transform:uppercase;">

<div class="mirror"STYLE="FLOAT:LEFT;MARGIN-LEFT:-20PX; ">


<i><b> Matricule:</i></div></div>







<div style="float:left;
width:140px;margin-left:7px;height:15px;font-weight:normal;">
<div class="mirror"STYLE="FLOAT:LEFT; margin-left:49px;text-align:left;">07<?php echo $day;?>/10
/<?php  $y=date("Y"); echo $y+1;?></div></div>



<div style="float:left;
width:90px;;height:15px;FONT-WEIGHT:NORMAL;text-transform:uppercase;text-align:left;left;font-size:13px;font-weight:bold;text-transform:uppercase;">

<div class="mirror"STYLE="FLOAT:LEFT;MARGIN-LEFT:-20PX; ">

<i><b>Valid:</i></div><div class="mirror"><div style="float:left;width:350px;font-size:11px;height:15px;margin-left:5px; margin-top:20px;">Registrar : Mr. Maboh M. N.</div></div></div>










<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;color:#ff6666;"></div>



<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;"></div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;"><?php echo $last;?></div>




<div style="float:left;
width:140px;margin-left:7px;height:15px;text-align:left;font-size:13px;"></div>



<div style="float:left;
width:150px;;height:15px;text-align:left;font-size:13px;font-weight:normal;"><?php  $take;?></div>



<div style="float:left;
width:300px;;height:15px;text-align:left;font-size:12px;font-weight:normal;color:#989898;">



		 <div style='float:left;width:250px;height:25px;  margin-top:-45px;color:$989898;margin-left:-24px;'>
<?php
 $matricule=$barcode;
$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 0;
$default_value['text'] = '';
$default_value['a1'] = '';
$default_value['a2'] = '';
$default_value['a3'] = '';

$filetype = isset($_POST['filetype']) ? $_POST['filetype'] : $default_value['filetype'];
$dpi = isset($_POST['dpi']) ? $_POST['dpi'] : $default_value['dpi'];
$scale = intval(isset($_POST['scale']) ? $_POST['scale'] : $default_value['scale']);
$rotation = intval(isset($_POST['rotation']) ? $_POST['rotation'] : $default_value['rotation']);
$font_family = isset($_POST['font_family']) ? $_POST['font_family'] : $default_value['font_family'];
$font_size = intval(isset($_POST['font_size']) ? $_POST['font_size'] : $default_value['font_size']);
$text = isset($_POST['text']) ? $_POST['text'] : $default_value['text'];
$text=$matricule;
registerImageKey('filetype', $filetype);
registerImageKey('dpi', $dpi);
registerImageKey('scale', $scale);
registerImageKey('rotation', $rotation);
registerImageKey('font_family', $font_family);
registerImageKey('font_size', $font_size);
registerImageKey('text', $text);

$default_value['checksum'] = '';
$checksum = isset($_POST['checksum']) ? $_POST['checksum'] : $default_value['checksum'];
registerImageKey('checksum', $checksum);
registerImageKey('code', 'BCGcode39');

$characters = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '-', '.', '&nbsp;', '$', '/', '+', '%');

?>

            <?php  getSelectHtml('type', $filename, $availableBarcodes); ?>
   
<?php getSelectHtml('filetype', $filetype, array('PNG' => 'PNG - Portable Network Graphics', 'JPEG' => 'JPEG - Joint Photographic Experts Group', 'GIF' => 'GIF - Graphics Interchange Format')); ?>
                    
                        <?php getInputTextHtml('dpi', $dpi, array('type' => 'number', 'min' => 72, 'max' => 300, 'required' => 'required')); ?> 
  <?php  getInputTextHtml('scale', $scale, array('type' => 'number', 'min' => 1, 'max' => 4, 'required' => 'required')); ?>
                    <?php  getSelectHtml('rotation', $rotation, array(180 => '180&deg; clockwise', 180 => '180&deg; clockwise', 270 => '270&deg; clockwise')); ?>
                    <?php  getSelectHtml('font_family', $font_family, listfonts('../font')); ?> <?php  getInputTextHtml('font_size', $font_size, array('type' => 'number', 'min' => 1, 'max' => 30)); ?>
                  <?php  getInputTextHtml('text', $text, array('type' => 'text', 'required' => 'required')); ?> 

        
                    <?php
                        $finalRequest = '';
                        foreach (getImageKeys() as $key => $value) {
                            $finalRequest .= '&' . $key . '=' . urlencode($value);
                        }
                        if (strlen($finalRequest) > 0) {
                            $finalRequest[0] = '?';
                        }
                    ?>
                    <div id="imageOutput">
                        <?php if ($imageKeys['text'] !== '') { ?><img src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?><?php } ?>
                    </div>
                   
</div>       </section>
          
</div>
<div  style="float:left;width:490px;background:#75d5fa; height:50px;margin-left:-83px; margin-top:-08px;">
<div style="float:left; color:#fff;margin-top:0px;margin-left:40px;margin-top:3px; color:#000;text-align:left; text-transform:uppercase;">


<div style="float:left;font-size:18px;font-family:Century Gothic;color:#000;margin-left:40px; "><div class="mirror"><DIV STYLE="FLOAT:LEFT; margin-left:7px;">
<b>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; NAME : <?php echo $fname;?></b></div></div> </div>



</div>


</div>


<div style="float:left; color:;margin-top:-57px;margin-left:10px; width:80px; height:25px;">

</div>


</div>
</div>



</div>





















			</div>
			</div>	</div>

</div>





</div>



</div>


</div>



			</div>
			</div>	</div>


			</div>
			</div>	</div>

			</div>
			</div>	</div>
			</div>	</div>
        </form>
<?php } ?>

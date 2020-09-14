<strong>
<?php include  'dbc.php';


if (!defined('IN_CB')) { die('You are not allowed to access to this page.'); }

if (version_compare(phpversion(), '5.0.0', '>=') !== true) {
    exit('Sorry, but you have to run this script with PHP5... You currently have the version <b>' . phpversion() . '</b>.');
}

if (!function_exists('imagecreate')) {
    exit('Sorry, make sure you have the GD extension installed before running this script.');
}

include_once('function.php');

// FileName & Extension
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

 
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_errora());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	$vil=$rows['as2'];
 }
//echo $mat=$_GET['id'];



$cust="SELECT * from member,members_times where  member.matric=members_times.matricule  order by members_times.name ";
	$run=mysql_query($cust) or die (mysql_error());
	while($ro=mysql_fetch_assoc($run)){

?>
<div style="width:400px; height:300px; float:left; border:1px solid#000">

<div style="width:150px; float:left; height:300px;  margin-top:-20px">
<img src="../../../album/<?php echo $ro['photo']; ?>" style="width:150px; height:150px" />
<div style="width:150px;  margin-top:10px; margin-left:10px">
<?php
define('IN_CB', true);

$huyu=$_GET['id'];

$default_value = array();
$default_value['filetype'] = 'PNG';
$default_value['dpi'] = 72;
$default_value['scale'] = isset($defaultScale) ? $defaultScale : 1;
$default_value['ncode'] = isset($defaultScale1) ? $defaultScale1 : 1;
$default_value['rotation'] = 0;
$default_value['font_family'] = 'Arial.ttf';
$default_value['font_size'] = 8;
$default_value['text'] = $huyu;
$default_value['a1'] = '';
$default_value['a2'] = '';
$default_value['a3'] = '';

$filetype = isset($_POST['filetype']) ? $_POST['filetype'] : $default_value['filetype'];
$dpi = isset($_POST['dpi']) ? $_POST['dpi'] : $default_value['dpi'];
$scale = intval(isset($_POST['scale']) ? $_POST['scale'] : $default_value['scale']);
$ncode = intval(isset($_POST['ncode']) ? $_POST['ncode'] : $default_value['ncode']);
$rotation = intval(isset($_POST['rotation']) ? $_POST['rotation'] : $default_value['rotation']);
$font_family = isset($_POST['font_family']) ? $_POST['font_family'] : $default_value['font_family'];
$font_size = intval(isset($_POST['font_size']) ? $_POST['font_size'] : $default_value['font_size']);
$text = isset($_POST['text']) ? $_POST['text'] : $default_value['text'];

registerImageKey('filetype', $filetype);
registerImageKey('dpi', $dpi);
registerImageKey('scale', $scale);
registerImageKey('rotation', $rotation);
registerImageKey('font_family', $font_family);
registerImageKey('font_size', $font_size);
registerImageKey('text', $text);

registerImageKey('checksum', $checksum);
registerImageKey('code', 'BCGcode39');
  foreach (getImageKeys() as $key => $value) {
                            $finalRequest .= '&' . $key . '=' . urlencode($value);
                        }
                        if (strlen($finalRequest) > 0) {
                            $finalRequest[0] = '?';
                        }
                    ?>
                    <div id="imageOutput">
						<?php
						$N=$ncode;
						for($i=0; $i < $N; $i++)
						{
						?>
                        <?php if ($imageKeys['text'] !== '') { ?><img style="margin: 0 20px 20px 0;" src="image.php<?php echo $finalRequest; ?>" alt="Barcode Image" /><?php }
                        else { ?>Fill the form to generate a barcode.<?php } }?>


?></div>


</div>

<div style="width:245px; height:300px; float:left;  margin-top:-20px">
<h1 style="background:#9CC; font-size:12px; margin:0px; font-family:Arial, Helvetica, sans-serif; padding:10px 0px; text-align:center; color:#333"><?php echo $clients; ?></h1>
</div>

</div>
<?php } ?>

</div>

</div>

</strong>
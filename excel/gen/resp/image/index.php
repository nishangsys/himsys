<?php
/**
 * Image resize while uploading
 * @author Resalat Haque
 * @link http://www.w3bees.com/2013/03/resize-image-while-upload-using-php.html
 */

include( 'function.php');
include '../dbc.php';
// settings
$max_file_size = 1024*200; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
$sizes = array( 250 => 250);

if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
	if( $_FILES['image']['size'] < $max_file_size ){
		// get file extension
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			/* resize image */
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
			}

		} else {
			$msg = 'Unsupported file';
		}
	} else{
		$msg = 'Please upload image smaller than 200KB';
	}
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Image resize while uploading - w3bees.com demo</title>
	<link rel="stylesheet" href="style.css">
    
    
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>

</head>
<body>
	<div class="wrap">
		<h1><a href="http://www.w3bees.com/2013/03/resize-image-while-upload-using-php.html">Image resize while uploading</a></h1>
		<?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
		
		<!-- file uploading form -->
		<form action="" method="post" enctype="multipart/form-data">
        
        <label>
			
                
				<input type="text" name="name" placeholder="NAME"/>
			</label>
            
            
            
            
                 <label>
				
                
				<input type="text" name="price" placeholder="PRICE"/>
			</label>
            
              
				<input type="text" name="prices" placeholder="PRICE TWO"/>
			</label>
            
            
            <label>
            
           <textarea name="disc">
           
           </textarea>
			</label>
            
            <label>
				
              
            
			<label>
				<span>Choose image</span>
                
                <img id="uploadPreview" style="width: 100px; height: 100px;" />
<input id="uploadImage" type="file" name="image" onchange="PreviewImage();" accept="image/*" />
			</label>
			<input type="submit" value="Upload" />
		</form>
		
		<?php
		// show image thumbnails
		if(isset($files)){
				$_POST = array_map("ucwords", $_POST);

			foreach ($files as $image) {
				$price1=$_POST['price'];
				$price2=$_POST['prices'];
				$name=$_POST['name'];
				$disc=nl2br($_POST['disc']);
				$bk=$name."{$image}";
				$date=date('Y-m-d G:i');
				
				 $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$imgData_name=addslashes($_FILES['image']['name']);		
		 $imgData_size=getimagesize($_FILES['image']['tmp_name']);
		 $photo=mysql_real_escape_string($_FILES['image']['name']);
		
	$photo_temp=$_FILES['image']['tmp_name'];
	
	
				 $fg=$con->query("INSERT INTO images set image='{$image}',name='$name',fprice='$price1',sprice='$price2',disc='$disc',date='$date',bk='$bk'") or die(mysqli_error($con)) ;
				
			}
		}
		?>
		
	</div>
</body>
</html>
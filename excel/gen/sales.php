<?php
include '../dbc.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans);

body { 
  font-family: 'Open Sans', sans-serif;
  color: #666;
  	width: 100%;
	
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');
-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";
}

/* STRUCTURE */

#pagewrap {
	padding: 5px;

	margin: 20px auto;
	height:100%;

	
}
header {
	height: 100px;
	padding: 0 15px;
}
#content {
	width: 190px;
	float: left;
	padding: 5px 15px;
}

#middle {
	width: 500px; /* Account for margins + border values */
	float: left;
	padding: 5px 15px;
	margin: 0px 5px 5px 5px;
}

#sidebar {
	width: 680px;
	padding: 5px 15px;
	float: left;
}
footer {
	clear: both;
	padding: 0 15px;
}

/************************************************************************************
MEDIA QUERIES
*************************************************************************************/
/* for 980px or less */
@media screen and (max-width: 980px) {
	
	#pagewrap {
		width: 94%;
	}
	#content {
		width: 41%;
		padding: 1% 4%;
	}
	#middle {
		width: 41%;
		padding: 1% 4%;
		margin: 0px 0px 5px 5px;
		float: right;
	}
	
	#sidebar {
		clear: both;
		padding: 1% 4%;
		width: auto;
		float: none;
	}

	header, footer {
		padding: 1% 4%;
	}
}

/* for 700px or less */
@media screen and (max-width: 600px) {

	#content {
		width: auto;
		float: none;
	}
	
	#middle {
		width: auto;
		float: none;
		margin-left: 0px;
	}
	
	#sidebar {
		width: auto;
		float: none;
	}

}

/* for 480px or less */
@media screen and (max-width: 480px) {

	header {
		height: auto;
	}
	h1 {
		font-size: 2em;
	}
	#sidebar {
		display: none;
	}

}


#content {
	background: #f8f8f8;
}
#sidebar {
	background: #f0efef;
}
header, #content, #middle, #sidebar {
	margin-bottom: 5px;
}

#pagewrap, header, #content, #middle, #sidebar, footer {
	border: solid 1px #ccc;
}

#fullscreen:-moz-full-screen {
  padding: 42px;
  background-color: pink;
  border:2px solid #f00;
  font-size: 200%;
}
#fullscreen:-ms-fullscreen {
  padding: 42px;
  background-color: pink;
  border:2px solid #f00;
  font-size: 200%;
}
#fullscreen:-webkit-full-screen {
  padding: 42px;
  background-color: pink;
  border:2px solid #f00;
  font-size: 200%;
}

#fullscreen:-moz-full-screen > h1 {
  color: red;
}
#fullscreen:-ms-fullscreen > h1 {
  color: red;
}
#fullscreen:-webkit-full-screen > h1 {
  color: red;
}

#fullscreen:-moz-full-screen > p {
  color: DarkRed;
}
#fullscreen:-ms-fullscreen > p {
  color: DarkRed;
}
#fullscreen:-webkit-full-screen > p {
  color: DarkRed;
}

#fullscreen:-moz-full-screen > button {
  display: none;
}
#fullscreen:-ms-fullscreen > button {
  display: none;
}
#fullscreen:-webkit-full-screen > button {
  display: none;
}
#fullscreen:fullscreen {
  padding: 42px;
  background-color: pink;
  border:2px solid #f00;
  font-size: 200%;
}

#fullscreen:fullscreen > h1 {
  color: red;
}

#fullscreen:fullscreen > p {
  color: DarkRed;
}

#fullscreen:fullscreen > button {
  display: none;
}
/* resets */
*,
*:before,
*:after {
  box-sizing: border-box;
}
.clearfix:after {
	content: "";
  display: table;
  clear: both;
}

.wrapper {
  margin: 0 auto;
  padding: 20px;
  max-width: 95%;
  background-color: #fff;
}
h1 {
  font-family: "Lobster", cursive;
  font-size: 2em;
  margin-bottom: 10px;
}
h2 {
  font-weight: 700;
}

/* grid */
.row {
  margin: 0 -10px;
  margin-bottom: 20px;
}
.row:last-child {
  margin-bottom: 0;
}
[class*="col-"] {
  padding: 10px;
}

@media all and ( min-width: 600px ) {
  
  .col-2-3 {
    float: left;
    width: 66.66%;
  }
  .col-1-2 {
    float: left;
    width: 50%;
  }
  .col-1-3 {
    float: left;
    width: 33.33%;
  }
  .col-1-4 {
    float: left;
    width: 25%;
  }
  .col-1-8 {
    float: left;
    width: 12.5%;
  }
  
}
 a{
	text-decoration:none;
	font-weight:bold;
}
</style>
</head>
<script>
var fullscreenButton = document.getElementById("fullscreen-button");
var fullscreenDiv    = document.getElementById("fullscreen");
var fullscreenFunc   = fullscreenDiv.requestFullscreen;
if (!fullscreenFunc) {
  ['mozRequestFullScreen',
   'msRequestFullscreen',
   'webkitRequestFullScreen'].forEach(function (req) {
     fullscreenFunc = fullscreenFunc || fullscreenDiv[req];
   });
}
function enterFullscreen() {
  fullscreenFunc.call(fullscreenDiv);
}
fullscreenButton.addEventListener('click', enterFullscreen);

</script>

<body  >

<div id="pagewrap">

	<header>
		<h1>3 Column Responsive Layout</h1>
	</header>
 <section id="content">
                 
  <?php
 $dfh=mysql_query("SELECT * FROM stocks where quatity>0 and product!='product' group by category") or die(mysql_error()) ;
while($cv=mysql_fetch_assoc($dfh)){                     
 ?>
   <a href="?">
            <div class="col-1"><?php echo $cv['category'];          ?></div>
     </a>
         <?php } ?>
  </section>
	
	<section id="middle">
    
    <div class="row clearfix">
  <div class="col-1-3">n</div>
  <div class="col-1-3">n</div>
  <div class="col-1-3">n</div>
  <div class="col-1-3">n</div>
</div><!-- /.row -->
		<h2>2nd Content Area</h2>
		<p>At full width all three columns will be displayed side by side. As the page is resized the third column will collapse under the first and second. At the smallest screen size all three columns will be stacked on top of one another.</p>
		<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
	</section>

	<aside id="sidebar">
		<h2>3rd Content Area</h2>
		<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
		<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
	</aside>
	
	<footer>
		<h4>Footer</h4>
		<p>Footer text</p>
	</footer>

</div>
</body>
</html>
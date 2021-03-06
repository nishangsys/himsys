
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<style>
@import url(http://fonts.googleapis.com/css?family=roboto);
@charset "UTF-8";

.navigation {
  padding: 0;
  margin: 0;
  border: 0;
  line-height: 1;
  
}

.navigation ul,
.navigation ul li,
.navigation ul ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.navigation ul {
  position: relative;
  z-index: 500;
  float: left;
}

.navigation ul li {
  float: left;
  min-height: 0.05em;
  line-height: 1em;
  vertical-align: middle;
  position: relative;
}

.navigation ul li.hover,
.navigation ul li:hover {
  position: relative;
  z-index: 510;
  cursor: default;
}

.navigation ul ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0px;
  z-index: 520;
  width: 100%;
}

.navigation ul ul li { float: none; }

.navigation ul ul ul {
  top: 0;
  right: 0;
}

.navigation ul li:hover > ul { visibility: visible; }

.navigation ul ul {
  top: 0;
  left: 99%;
}

.navigation ul li { float: none; }

.navigation ul ul { margin-top: 0.05em; }

.navigation {
  width: 13em;
  background: #333333;
  font-family: 'roboto', Tahoma, Arial, sans-serif;
  zoom: 1;
}

.navigation:before {
  content: '';
  display: block;
}

.navigation:after {
  content: '';
  display: table;
  clear: both;
}

.navigation a {
  display: block;
  padding: 1em 1.3em;
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase;
}

.navigation > ul { width: 18em; }

.navigation ul ul { width: 13em; }

.navigation > ul > li > a {
  border-right: 0.3em solid #34A65F;
  color: #ffffff;
}

.navigation > ul > li > a:hover { color: #ffffff; }

.navigation > ul > li a:hover,
.navigation > ul > li:hover a { background: #34A65F; }

.navigation li { position: relative; }

.navigation ul li.has-sub > a:after {
  content: '»';
  position: absolute;
  right: 1em;
}

.navigation ul ul li.first {
  -webkit-border-radius: 0 3px 0 0;
  -moz-border-radius: 0 3px 0 0;
  border-radius: 0 3px 0 0;
}

.navigation ul ul li.last {
  -webkit-border-radius: 0 0 3px 0;
  -moz-border-radius: 0 0 3px 0;
  border-radius: 0 0 3px 0;
  border-bottom: 0;
}

.navigation ul ul {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}

.navigation ul ul { border: 1px solid #34A65F; }

.navigation ul ul a { color: #ffffff; }

.navigation ul ul a:hover { color: #ffffff; }

.navigation ul ul li { border-bottom: 1px solid #0F8A5F; }

.navigation ul ul li:hover > a {
  background: #4eb1ff;
  color: #ffffff;
}

.navigation.align-right > ul > li > a {
  border-left: 0.3em solid #34A65F;
  border-right: none;
}

.navigation.align-right { float: right; }

.navigation.align-right li { text-align: right; }

.navigation.align-right ul li.has-sub > a:before {
  content: '+';
  position: absolute;
  top: 50%;
  left: 15px;
  margin-top: -6px;
}

.navigation.align-right ul li.has-sub > a:after { content: none; }

.navigation.align-right ul ul {
  visibility: hidden;
  position: absolute;
  top: 0;
  left: -100%;
  z-index: 598;
  width: 100%;
}

.navigation.align-right ul ul li.first {
  -webkit-border-radius: 3px 0 0 0;
  -moz-border-radius: 3px 0 0 0;
  border-radius: 3px 0 0 0;
}

.navigation.align-right ul ul li.last {
  -webkit-border-radius: 0 0 0 3px;
  -moz-border-radius: 0 0 0 3px;
  border-radius: 0 0 0 3px;
}

.navigation.align-right ul ul {
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}
.active{
	background:#0C3;
	color:#00F;
	font-family:"Arial Black", Gadget, sans-serif;
}
</style>
</head>


<div class="navigation" style="width:300px">
  <ul>
              <li class="active"><a href="#">OTHER INCOME/ EXPENSE</a></li>



    <li class="has-sub"> <a href="#">Admission Center</a>
      <ul>
        <li > <a href="first.php?first.php?ffirst&link=New%20Students%20Payments">HND/MBA/B.TEC</a>
        </li>
        <li><a href="#">Submenu 1.2</a></li>
      </ul>
    </li>
    <li class="has-sub"> <a href="#">Menu 2</a>
      <ul>
        <li><a href="#">Submenu 2.1</a></li>
        <li><a href="#">Submenu 2.2</a></li>
      </ul>
    </li>
    <li class="has-sub"> <a href="#">Menu 3</a>
      <ul>
        <li><a href="#">Submenu 3.1</a></li>
        <li><a href="#">Submenu 3.2</a></li>
      </ul>
    </li>
  </ul>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>
</body>
</html>

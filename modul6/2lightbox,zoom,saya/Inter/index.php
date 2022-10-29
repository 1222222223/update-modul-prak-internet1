<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Galery Zoom</title>
		<style type="text/css">
		body {
			overflow-y: scroll;
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, sans-serif;
			background: #f4f4f4;
			padding: 0;
			margin: 0;
			background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  			background: linear-gradient(to right, #25c481, #25b7c4);
		}
		h1 {
			font-size: 31px;
			line-height: 32px;
			font-weight: normal;
			margin-bottom: 25px;
		}
		a,
		a:hover {
			border: none;
			text-decoration: none;
		}
		img,
		a img {
			border: none;
		}
		pre {
			overflow-x: scroll;
			background: #ffffff;
			border: 1px solid #cecece;
			padding: 10px;
		}
		
		.clear { clear: both;  }
		
		.zoomed > .container {
			-webkit-filter: blur(3px);
			filter: blur(3px);
		}
		
		.container {
			width: 505px;
			margin: 0 auto;
		}
		
		.gallery {
			float: left;
			background: #ffffff;
			padding: 20px 20px 10px 20px;
			margin: 0;
			-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.25);
			-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.25);
			box-shadow: 0 1px 3px rgba(0,0,0,0.25);
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
		}
		.gallery div {
			float: left;
			padding: 0 10px 10px 0;
		}
		.gallery div:nth-child(6n) {
			padding-right: 0;
		}
		.gallery a,
		.gallery img {
			float: left;
		}
		</style>
		<link rel="stylesheet"  href="css/zoom.css" media="all" />
	</head>
	<body>
<div class="jquery-script-ads" align="center" style="margin:20px auto;"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";

/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->

</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="container">
	<h1>Klik Nama file untuk perbesar</h1>
	<div class="gallery">
		<?php
		$directory = 'gallery';
		$allowed_types=array('jpg','jpeg','gif','png');
		$file_parts=array();
		$ext='';
		$title='';
		$i=0;
		$dir_handle = @opendir($directory) or die("There is an error with your
		image directory!");
		while ($file = readdir($dir_handle))
		{
		if($file=='.' || $file == '..') continue;
		$file_parts = explode('.',$file);
		$ext = strtolower(array_pop($file_parts));
		$title = implode('.',$file_parts);
		$title = htmlspecialchars($title);
		$nomargin='';
		if(in_array($ext,$allowed_types))
		{
		if(($i+1)%4==0) $nomargin='nomargin';
		echo '
		<div class="pic '.$nomargin.'"
		style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
		<a href="'.$directory.'/'.$file.'" title="'.$title.'"
		target="_blank">'.$title.'</a>
		</div>';
		$i++;
		}
		}
		closedir($dir_handle);
		?>
	</div>
	<div class="clear"></div>
	
</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/zoom.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>

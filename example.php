<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CSS Color Chart</title>
	<style type="text/css">
		body {
			color: #3f3f3f;
			font-family: Georgia, "Times New Roman", Times, serif;
			font-size: 14px;
		}
		div.colorHolder {
			overflow: hidden;
		}
			div.colorHolder .colorSwatch {
				float: left;
				width: 90px;
				height: 50px;
			}
			div.colorHolder .colorName {
				float: left;
				width: 90px;
				height: 35px;
				text-align: center;
				padding-top: 15px;
			}
			div.colorHolder .colorToggle {
				float: left;
				width: 150px;
				height: 35px;
				text-align: center;
				padding-top: 15px;
			}
			div.colorMatches {
				display: none;
				white-space: pre-wrap;
				font-size: 13px;
				padding-left: 180px;
			}
			span.colorFilename {text-decoration: underline;}
			span.colorClass {color: #628e15;}
			span.colorProperty {color: #2c747c;}
			span.colorValue {color: #7854ba;}

	</style>
	<script type="text/javascript">
	<!--
	function ViewFiles(id) {
		var e = document.getElementById('matches_'+id);
		if (e.style.display == 'block') e.style.display = 'none';
		else e.style.display = 'block';
	}
	//-->
</script>
</head>
<body>
<?php
	require('csscolorchart.php');
	$cssPath = array('cms/');

	echo '<h1>CSS colors found in: ' .
		(is_array($cssPath) ? implode($cssPath, ', ') : $cssPath) . '</h1>';

	$themes = new CssColorChart;
	$themes->ignoreFiles = array(
		'cms/thirdparty/',
	);
	echo $themes->listColors($cssPath);
?>
</body>
</html>

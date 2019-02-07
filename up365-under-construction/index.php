<!DOCTYPE html>
<?php
$url = $_SERVER['HTTP_HOST'].$_SERVER['HTTP_SELF'];
if (strpos($url, 'solution365') !== FALSE)
	$site = 'solution365';
elseif (strpos($url, 'light365') !== FALSE)
	$site = 'light365';
elseif (strpos($url, 'crystal365') !== FALSE)
	$site = 'crystal365';
elseif (strpos($url, 'solution365') !== FALSE)
	$site = 'solution365';
else
	$site = 'up365';
?>

<html style="">
<head>
	<link rel="icon" href="images/favicon-<?=$site?>.ico" type="image/x-icon">
	<style>
	html, body { height: 100% }
	body {
		background-color: white;
		background-image: url("images/under-construction-<?=$site?>.png");
		background-repeat: no-repeat;
		background-position: center; 
	}
	</style>
</head>
<body>
<?php
	var_dump($site);
?>
</body>
</html>

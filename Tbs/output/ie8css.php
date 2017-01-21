<?php
include("include/phpfunctions.php");
header("Content-Type: text/css");
$file = getQueryString();
$css = myfile_get_contents(getabspath($file), "r");
$css = preg_replace(array(
		"/ :not\(.*?\)/",
		"/ :first-child/",
		"/ :last-child/",
		"/ :nth-last-child\(.*?\)/"),
	" *",$css);
	
$css = preg_replace(array(
		"/:not\(.*?\)/",
		"/:first-child/",
		"/:last-child/",
		"/:nth-last-child\(.*?\)/"),
	"",$css);
echo $css;
?>
<?php
	if($_GET["pict"])
		$pict = $_GET["pict"];
	else
		$pict = "marker.png";
    $im = @imagecreatefrompng('images/'.$pict);
	$string = $_GET["text"];
	$font = 3;
	$width = imagefontwidth($font) * strlen($string) ;
	$x = (imagesx($im) - $width)/2+1;
	$y = 0;
	$textColor = imagecolorallocate ($im, 0,0,0);
	imagestring ($im, $font, $x, $y,  $string, $textColor);
	//$black = imagecolorallocate($im, 0, 0, 0);
	//imagecolortransparen($im);
	imagesavealpha($im,TRUE);
	header('Content-Type: image/png');
	imagepng($im);
	imagedestroy($im);
?>

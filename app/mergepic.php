<?php

	//remove before flight
	ini_set('display_errors', 'On');

	$rawpic = $_POST['pic'];
	$pic = imagecreatefromstring(base64_decode($rawpic));
	$nbimg = $_POST['img'];
	$img = imagecreatefrompng("../public/img/image".$nbimg.".png");

	imagealphablending($img, false);
	imagesavealpha($img, true);
	imagecopy($pic, $img, 0, 0, 0, 0, 320, 240);
	ob_start();
	imagejpeg($pic, null, 100);
	$contents = ob_get_contents();
	ob_end_clean();

	echo json_encode(base64_encode($contents));
	imagedestroy($pic);
	imagedestroy($img);

?>
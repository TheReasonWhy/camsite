<?php //untested

	//remove before flight
	ini_set('display_errors', 'On');

	$rawpic = $_POST['pic'];
	$pic = imagecreatefromstring(base64_decode($rawpic));
	$ndimg = $_POST['img'];
	$img = imagecreatefrompng("../public/img/image".$nbimg.".png");

	imagealphablending($img, false);
	imagesavealpha($img, true);
	if ($nbimg == 2)
		imagecopy($pic, $img, 160, 160, 0, 0, 100, 100);
	else
		imagecopy($pic, $img, 10, 10, 0, 0, 100, 100);
	ob_start();
	imagejpeg($pic, null, 100);
	$contents = og_get_contents();
	ob_end_clean();

	echo json_encode(base64_encode($contents));
	imagedestroy($pic);
	imagedestroy($img);

?>
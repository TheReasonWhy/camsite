<?php

	//remove before flight
	ini_set('display_errors', 'On');

	session_start();
	$pic_id = $_GET['pic_id'];
	require '../class/likes.class.php';
	$db = new Likes($pic_id, $_SESSION['active_user']);
	$db->deleteLike();

?>
<?php 

	//remove before flight
	ini_set('display_errors', 'On');

	session_start();
	$pic_id = $_GET['pic_id'];
	require '../class/pictures.class.php';
	$db = new Pictures($pic_id, "", $_SESSION['active_user']);
	$db->deletePicture();
	require '../class/likes.class.php';
	$like = new Likes($pic_id, "");
	$like->deleteAllLikes();
	require '../class/comments.class.php';
	$comment = new Comments($pic_id, "", "");
	$comment->deleteAllComments();

?>
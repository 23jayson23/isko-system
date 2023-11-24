<?php
	require_once 'auth.php';
	$getid = $_GET['user_id'];
		
	$approve = $conn->query("UPDATE `scholar` SET status = 'D' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	if($approve){
		log_activity($conn, $uid, 'Approve Scholar', "Declined Scholar with User Id#$getid");
		echo json_encode(array("status"=>1,'msg'=>"Scholar Declined!"));
	}
	$conn->close();
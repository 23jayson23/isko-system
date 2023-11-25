<?php
	require_once 'auth.php';
	$getid = $_GET['user_id'];
		
	$declined = $conn->query("UPDATE `scholar` SET status = 'D' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	$declinedReqs = $conn->query("UPDATE `scholar_reqs` SET req_status = 'D' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	if($declined){
		log_activity($conn, $uid, 'Declined Scholar', "Declined Scholar with User Id#$getid");
		echo json_encode(array("status"=>1,'msg'=>"Scholar Declined!"));
	}
	$conn->close();
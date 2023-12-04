<?php
	require_once 'auth.php';
	$getid = $_GET['user_id'];
	$reason = $_GET['reason'];
		
	$delete = $conn->query("UPDATE `scholar` SET status = 'X', remarks = '$reason' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	$deleteReqs = $conn->query("UPDATE `scholar_reqs` SET req_status = 'X' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	if($delete && $deleteReqs){
		log_activity($conn, $uid, 'Deleted Scholar', "Deleted Scholar with User Id#$getid");
		echo json_encode(array("status"=>1,'msg'=>"Scholar Deleted!"));
	}
	$conn->close();
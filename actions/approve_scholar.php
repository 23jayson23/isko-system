<?php
	require_once 'auth.php';
	$getid = $_GET['user_id'];
		
	$approve = $conn->query("UPDATE `scholar` SET status = 'A' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	$approveReqs = $conn->query("UPDATE `scholar_reqs` SET req_status = 'A' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	if($approve && $approveReqs){
		log_activity($conn, $uid, 'Approve Scholar', "Approved Scholar with User Id#$getid");
		echo json_encode(array("status"=>1,'msg'=>"Scholar Approved Successfully"));
	}
	$conn->close();
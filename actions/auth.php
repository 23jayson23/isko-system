<?php
	session_start();
	if(!isset($_SESSION['login_userid'])){
		header('location: /isko-system/log-in/login.php');
	}
	require_once 'db_connect.php';
	$uid = $_SESSION['login_userid'];
    $type = $_SESSION['login_usertype'];
	// $user_qry = $conn->query("SELECT * FROM users WHERE id = '".$_SESSION['login_id']."' ") or die(mysqli_error());
	// $user = $user_qry->fetch_array();
	// $user_name = $user['firstname']." ".$user['lastname'];
?>
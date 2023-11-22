<?php
	$conn = new mysqli('localhost', 'root', '', 'isko_system') or die(mysqli_error());
    
    function log_activity($conn, $user_id, $activity_type, $activity_data) {
        // Insert row into log table
        $log = "INSERT INTO activity_log (user_id, activity_type, activity_data) VALUES ('$user_id', '$activity_type', '$activity_data')";
        $logact = $conn->query($log);
    }
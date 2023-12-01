<?php require_once 'auth.php'; 

extract($_POST);

$query = $conn->query("INSERT INTO announcement (a_title, a_message) VALUES ('$announceTitle', '$announceMessage')") or die(mysqli_error());

if ($query) {
    log_activity($conn, $uid, "Add new announcement", "Announcement added");
    echo json_encode(array('status'=>1,'msg'=>"Data successfully Saved"));
} else {
    echo json_encode(array('status'=>0,'msg'=>"Error inserting data"));
    exit();
}

?>
<?php require_once 'auth.php'; 

extract($_POST);

$query = $conn->query("INSERT INTO program (program_name, program_desc) VALUES ('$programTitle', '$programDesc')") or die(mysqli_error());

if ($query) {
    log_activity($conn, $uid, "Add new program", "Program added");
    echo json_encode(array('status'=>1,'msg'=>"Data successfully Saved"));
} else {
    echo json_encode(array('status'=>0,'msg'=>"Error inserting data"));
    exit();
}

?>
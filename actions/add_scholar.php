<?php require_once 'auth.php'; 

extract($_POST);

$query = $conn->query("INSERT INTO scholar (user_id, lrn_id, fname, mname, lname, province, municipality, barangay, email, phone, gender, civil_status, program_id) VALUES ('$uid', '$lrn', '$fname', '$mname', '$lname', '$province', '$municipality', '$barangay', '$email', '$phone', '$gender', '$civil', '$program')") or die(mysqli_error());

if ($query) {
    log_activity($conn, $uid, "Add new scholar", "Scholar #$uid added");
    echo json_encode(array('status'=>1,'msg'=>"Data successfully Saved"));
} else {
    echo json_encode(array('status'=>0,'msg'=>"Error inserting data"));
    exit();
}

?>
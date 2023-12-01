<?php require_once 'auth.php'; 

$submitted = false;

$query = $conn->query("SELECT * FROM scholar_reqs WHERE user_id = $uid AND req_status = 'P'") or die(mysqli_error());

if ($query->num_rows > 0) {
    $submitted = true;
}

echo json_encode(['submitted' => $submitted]);

$conn->close();
?>
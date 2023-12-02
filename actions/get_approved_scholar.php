<?php require_once 'auth.php'; 

$approved = false;

$query = $conn->query("SELECT * FROM scholar LEFT JOIN scholar_reqs ON scholar.user_id = scholar_reqs.user_id WHERE scholar.user_id = $uid AND scholar.status = 'A' AND scholar_reqs.req_status = 'A'") or die(mysqli_error());

if ($query->num_rows > 0) {
    $approved = true;
}

echo json_encode(['approved' => $approved]);

$conn->close();
?>
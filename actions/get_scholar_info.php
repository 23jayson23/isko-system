<?php require_once 'auth.php'; 

extract($_POST);
$data = array();
$query = $conn->query("SELECT * 
FROM scholar
LEFT JOIN scholar_reqs ON scholar.user_id = scholar_reqs.user_id
LEFT JOIN program ON scholar.program_id = program.program_id
WHERE scholar.status = 'P';
") or die(mysqli_error());

if ($query->num_rows > 0) {
    $data = $query->fetch_array();
}

echo json_encode($data);

$conn->close();
?>
<?php require_once 'auth.php'; 

extract($_POST);
$data = array();
$query = $conn->query("SELECT * FROM program") or die(mysqli_error());

if ($query->num_rows > 0) {
    $data = $query->fetch_array();
}

echo json_encode($data);

$conn->close();
?>
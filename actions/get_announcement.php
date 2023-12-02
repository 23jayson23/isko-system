<?php require_once 'db_connect.php'; 

extract($_POST);
$data = array();
$query = $conn->query("SELECT * FROM announcement ORDER BY a_create_date DESC") or die(mysqli_error());

if ($query->num_rows > 0) {
    $data = $query->fetch_array();
}

echo json_encode($data);

$conn->close();
?>
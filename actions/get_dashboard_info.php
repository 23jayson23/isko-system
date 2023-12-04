<?php require_once 'auth.php'; 

$data = array();
$approved = $conn->query("SELECT * FROM scholar WHERE status = 'A'") or die(mysqli_error());
$pending = $conn->query("SELECT * FROM scholar WHERE status = 'P'") or die(mysqli_error());
$inactive = $conn->query("SELECT * FROM scholar WHERE status = 'I'") or die(mysqli_error());
$declined = $conn->query("SELECT * FROM scholar WHERE status = 'D'") or die(mysqli_error());
$deleted = $conn->query("SELECT * FROM scholar WHERE status = 'X'") or die(mysqli_error());

$data['approved'] = $approved->num_rows;
$data['pending'] = $pending->num_rows;
$data['inactive'] = $inactive->num_rows;
$data['declined'] = $declined->num_rows;
$data['deleted'] = $deleted->num_rows;

echo json_encode($data);

$conn->close();
?>
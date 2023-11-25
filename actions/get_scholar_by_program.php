<?php require_once('auth.php');

$data = array();
$program1 = $conn->query("SELECT * FROM scholar WHERE program_id = '1'") or die(mysqli_error());
$program2 = $conn->query("SELECT * FROM scholar WHERE program_id = '2'") or die(mysqli_error());
$program3 = $conn->query("SELECT * FROM scholar WHERE program_id = '3'") or die(mysqli_error());
$program4 = $conn->query("SELECT * FROM scholar WHERE program_id = '4'") or die(mysqli_error());
$program5 = $conn->query("SELECT * FROM scholar WHERE program_id = '5'") or die(mysqli_error());
$program6 = $conn->query("SELECT * FROM scholar WHERE program_id = '6'") or die(mysqli_error());
$program7 = $conn->query("SELECT * FROM scholar WHERE program_id = '7'") or die(mysqli_error());

$data['program1'] = $program1->num_rows;
$data['program2'] = $program2->num_rows;
$data['program3'] = $program3->num_rows;
$data['program4'] = $program4->num_rows;
$data['program5'] = $program5->num_rows;
$data['program6'] = $program6->num_rows;
$data['program7'] = $program7->num_rows;

echo json_encode($data);

$conn->close();

?>
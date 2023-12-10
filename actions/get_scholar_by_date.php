<?php
require_once('auth.php');

$data = array();

// Replace 'scholar' with your actual table name
$scholar_data = $conn->query("SELECT * FROM scholar") or die(mysqli_error());

// Initialize arrays to store counts for each status
$pending_counts = array();
$other_counts = array();
$allPendingYear = array();
$allScholarYear = array();
// Loop through each scholar
while ($row = $scholar_data->fetch_assoc()) {
    // Extract the month from the create_date column
    $month = date('F', strtotime($row['create_date'])); 
    $Year = date('Y', strtotime($row['create_date'])); 
    // Check the status of the scholar
    $status = $row['status'];

    // Increment the count for the corresponding month and status
    if ($status === 'P') {
        if (!isset($pending_counts[$month])) {
            $pending_counts[$month] = 1;
        } else {
            $pending_counts[$month]++;
        }
    } else {
        // For any other status
        if (!isset($other_counts[$month])) {
            $other_counts[$month] = 1;
        } else {
            $other_counts[$month]++;
        }
    }
    if ($status === 'P') {
        if (!isset($allPendingYear[$Year])) {
            $allPendingYear[$Year] = 1;
        } else {
            $allPendingYear[$Year]++;
        }
    } else {
        // For any other status
        if (!isset($allScholarYear[$Year])) {
            $allScholarYear[$Year] = 1;
        } else {
            $allScholarYear[$Year]++;
        }
    }
}

// Add the counts to the data array
$data['pending_counts'] = $pending_counts;
$data['other_counts'] = $other_counts;
$data['Pending'] = $allPendingYear;
$data['Scholar'] = $allScholarYear;
echo json_encode($data);

$conn->close();
?>

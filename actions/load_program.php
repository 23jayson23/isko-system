<?php
// Include your database connection logic here
require_once 'db_connect.php';

if (isset($_GET['page_no_shared'])) {
    $total_records_per_page_shared = 8;
    $page_no_shared = $_GET['page_no_shared'];
    $offset_shared = ($page_no_shared - 1) * $total_records_per_page_shared;

    // Fetch content from your database
    $result_shared = $conn->query("SELECT * FROM `program` LIMIT $offset_shared, $total_records_per_page_shared");

    // Output content HTML
    while ($row_shared = $result_shared->fetch_assoc()) {
        echo "<div class='prog-container'>
            <div class='prog-image'>
              <img src='../assets/image/prog-imge.png'>
            </div>
            <div class='prog-title'>
              <strong>". $row_shared['program_name'] ."</strong>
            </div>
            <button class='btn view' onclick='viewInfo()' data-id=". $row_shared['program_id'] .">See More</button>
          </div>";
    }
    $conn->close();
}
?>

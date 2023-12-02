<?php
// Include your database connection logic here
require_once 'db_connect.php';

if (isset($_GET['pagination'])) {
    $total_records_per_page_shared = 5;
    $result_count_shared = $conn->query("SELECT COUNT(*) As total_records FROM `program`");
    $total_records_shared = $result_count_shared->fetch_assoc()['total_records'];
    $total_no_of_pages_shared = ceil($total_records_shared / $total_records_per_page_shared);

    $page_no_shared = isset($_GET['page_no_shared']) ? $_GET['page_no_shared'] : 1;

    // Output pagination links HTML
    if ($page_no_shared > 1) {
        echo "<a href='?page_no_shared=1'>&laquo;</a>";
    }

    $start_shared = ($page_no_shared - 5) > 0 ? ($page_no_shared - 5) : 1;
    $end_shared = ($page_no_shared + 5) <= $total_no_of_pages_shared ? ($page_no_shared + 5) : $total_no_of_pages_shared;

    for ($i_shared = $start_shared; $i_shared <= $end_shared; $i_shared++) {
        if ($i_shared == $page_no_shared) {
            echo "<a class='active' href='?page_no_shared=$i_shared'>$i_shared</a>";
        } else {
            echo "<a href='?page_no_shared=$i_shared'>$i_shared</a>";
        }
    }

    if ($page_no_shared < $total_no_of_pages_shared) {
        echo "<a href='?page_no_shared=$total_no_of_pages_shared'>&raquo;</a>";
    }
    $conn->close();
}
?>

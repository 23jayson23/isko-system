<?php
// Include your database connection logic here
require_once 'db_connect.php';

if (isset($_GET['page_no_shared'])) {
    $total_records_per_page_shared = 5;
    $page_no_shared = $_GET['page_no_shared'];
    $offset_shared = ($page_no_shared - 1) * $total_records_per_page_shared;

    // Fetch content from your database
    $result_shared = $conn->query("SELECT * FROM `forum` LIMIT $offset_shared, $total_records_per_page_shared");

    // Output content HTML
    while ($row_shared = $result_shared->fetch_assoc()) {
        echo "<div class='card-main'>
                <div class='card'>
                    <div class='card-image-container'>
                        <img src='assets/image/forum.png'>
                    </div>
                    <div class='card-info'>
                        <strong id='usernameFeedback'>" . $row_shared['forum_user_name'] . "</strong><br><br>
                        <p id='feedbackMessage'>" . $row_shared['forum_message'] . "</p>
                    </div>
                </div>
            </div>";
    }
    $conn->close();
}
?>

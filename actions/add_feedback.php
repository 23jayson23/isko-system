<?php
require_once 'db_connect.php';

extract($_POST);

$query = $conn->query("INSERT INTO forum (forum_user_name, forum_message) VALUES ('$username', '$message')") or die(mysqli_error());

if ($query) {
    // Get the last inserted ID
    $lastInsertedId = $conn->insert_id;

    // Fetch the corresponding row from the database
    $result = $conn->query("SELECT * FROM forum WHERE forum_id = $lastInsertedId");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Return the row data in JSON format
        echo json_encode(array('status' => 1, 'msg' => "Feedback Posted!", 'data' => $row));
    } else {
        echo json_encode(array('status' => 0, 'msg' => "Error fetching feedback data"));
        exit();
    }
} else {
    echo json_encode(array('status' => 0, 'msg' => "Error sending feedback"));
    exit();
}

$conn->close();
?>

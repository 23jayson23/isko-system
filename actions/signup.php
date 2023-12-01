<?php
require_once 'db_connect.php';

function is_strong_password($password) {
    // Add your password strength criteria here
    // For example, requiring a minimum length and a mix of uppercase, lowercase, and numbers
    $min_length = 8;
    $has_uppercase = preg_match('/[A-Z]/', $password);
    $has_lowercase = preg_match('/[a-z]/', $password);
    $has_number = preg_match('/\d/', $password);

    return strlen($password) >= $min_length && $has_uppercase && $has_lowercase && $has_number;
}

extract($_POST);

// Validate password strength
if (!is_strong_password($password)) {
    $response = array('success' => false, 'message' => 'Weak password. Please choose a stronger password.');
    echo json_encode($response);
} else {
    $newpass = md5($password);
    $username = mysqli_real_escape_string($conn, $username);

    $qry = $conn->query("SELECT * FROM user WHERE username = '$username'") or die(mysqli_error());

    if ($qry->num_rows > 0) {
        $response = array('success' => false, 'message' => 'Username already exists.');
        echo json_encode($response);
    } else {
        $qry = $conn->query("INSERT INTO user (username, password) VALUES ('$username', '$newpass')") or die(mysqli_error());
        
        if ($qry) {
            $response = array('success' => true, 'message' => 'Account created successfully!');
            echo json_encode($response);
            log_activity($conn, $username, 'signup', 'Signed up');
        } else {
            $response = array('success' => false, 'message' => 'Error creating account.');
            echo json_encode($response);
        }
    }
}

$conn->close();
?>

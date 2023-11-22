<?php
    require_once 'db_connect.php';
    extract($_POST);
    $newpass = md5($password);
    $username = mysqli_real_escape_string($conn, $username);

    $qry = $conn->query("SELECT * FROM user WHERE username = '$username'") or die(mysqli_error());
    if($qry->num_rows > 0){
        echo "Username already exists.";
    } else {
        $qry = $conn->query("INSERT INTO user (username, password) VALUES ('$username', '$newpass')") or die(mysqli_error());
        if($qry){
            echo true;
            log_activity($conn, $username, 'signup', "Signed up");
        } else {
            echo false;
        }
    }

    $conn->close();
?>
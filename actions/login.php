<?php
    require_once 'db_connect.php';
    extract($_POST);
    $newpass = md5($password);
    $qry = $conn->query("SELECT * FROM user WHERE username = '$username' and  password = '$newpass'") or die(msqli_error());
    $login = $qry->fetch_array();

    if($qry->num_rows > 0){
        session_start();
        foreach($login as $k => $v){
            if(!is_numeric($k) && $k !='password')
            $_SESSION['login_'.$k] = $v;
        }
        $uid = $_SESSION['login_userid'];
        $type = $_SESSION['login_usertype'];
        $registeredStudent = false;
        
        if ($type == 1) {
            // If the user is a student, check if the student is registered
            $checkUserQuery = $conn->query("SELECT user_id FROM scholar WHERE user_id = $uid") or die(mysqli_error());

            if ($checkUserQuery->num_rows > 0) {
                // If login_userid exists in the scholar table, then the user is registered
                $registeredStudent = true;
            } else {
                // If login_userid does not exist in the scholar table, then the user is not yet registered
                $registeredStudent = false;
            }
        }

        log_activity($conn, $uid, 'login', "Logged in");

        // Echo the user type along with the login status
        echo json_encode(['status' => true, 'userType' => $type, 'registeredStudent' => $registeredStudent]);
    } else {
        echo json_encode(['status' => false]);
    }

    $conn->close();
?>

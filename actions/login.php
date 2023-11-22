<?php
    require_once 'db_connect.php';
    extract($_POST);
    $newpass = md5($password);
    $qry = $conn->query("SELECT * FROM user WHERE username = '$username' and  password = '$newpass'") or die(msqli_error());
    $login = $qry->fetch_array();

    if($qry->num_rows > 0){
        echo true;
        session_start();
        foreach($login as $k => $v){
            if(!is_numeric($k) && $k !='password')
            $_SESSION['login_'.$k] = $v;
        }
        $uid = $_SESSION['login_userid'];
        log_activity($conn, $uid, 'login', "Logged in");
    }

    $conn->close();
?>

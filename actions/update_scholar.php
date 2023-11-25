<?php require_once 'auth.php';

extract($_POST);

$q = $conn->query("UPDATE `scholar` SET `email` = '$email', `phone` = '$phone', `gender` = '$gender', `program_id` = '$program_id', `status` = '$status' WHERE `user_id` = '$user_id'") or die(mysqli_error());

if($q)
    {
        // Success message
        log_activity($conn, $uid, 'Update Scholar', "Updated scholar #$user_id");
        echo json_encode(array('status'=>1,'msg'=>"Data successfully Saved"));
    }
    else
    {
        echo json_encode(array('status'=>0,'msg'=>"Error saving data!"));
				exit();
    }

    $conn->close();
?>
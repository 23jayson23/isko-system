<?php
	require_once 'auth.php';

	// Include the PHPMailer class
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/SMTP.php';

	$getid = $_GET['user_id'];
		
	$declined = $conn->query("UPDATE `scholar` SET status = 'D' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	$declinedReqs = $conn->query("UPDATE `scholar_reqs` SET req_status = 'D' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	if($declined && $declinedReqs){
		// Send email to the user
		$userEmail = getUserEmail($conn, $getid);

		if ($userEmail) {
			$mail = new PHPMailer\PHPMailer\PHPMailer();

			// Uncomment the line below if you're using SMTP
			$mail->isSMTP();

			$mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
			$mail->SMTPAuth = true;
			$mail->Username = 'bonifacio.malunesjr.xentra@gmail.com'; //your email
			$mail->Password = 'grpf ihiz wees fjjt'; //app password
			$mail->SMTPSecure = 'tls'; // TLS encryption
			$mail->Port = 587; // TCP port to connect to

			$mail->setFrom('bonifacio.malunesjr.xentra@gmail.com', 'TESDA_ScholarshipSystem'); // Set your email address and name
			$mail->addAddress($userEmail); // Add recipient email address

			$mail->Subject = 'TESDA - Scholarship Update';
			$mail->Body = 'Dear User, Your scholar application has been declined.';

			if (!$mail->send()) {
				echo json_encode(array("status" => 0, 'msg' => "Email could not be sent. Mailer Error: " . $mail->ErrorInfo));
			} else {
				// Log activity
				log_activity($conn, $uid, 'Decline Scholar', "Declined Scholar with User Id#$getid");
				echo json_encode(array("status" => 1, 'msg' => "Scholar Declined Successfully"));
			}
	}
}
	$conn->close();

	// Function to get user's email from the database
    function getUserEmail($conn, $userId) {
        $result = $conn->query("SELECT email FROM `scholar` WHERE `user_id` = '".$userId."'");
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['email'];
        }
        return null;
    }
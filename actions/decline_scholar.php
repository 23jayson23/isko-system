<?php
	require_once 'auth.php';

	// Include the PHPMailer class
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/SMTP.php';

	$getid = $_GET['user_id'];
	$reason = $_GET['reason'];
		
	$declined = $conn->query("UPDATE `scholar` SET status = 'D', remarks = '$reason' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	$declinedReqs = $conn->query("UPDATE `scholar_reqs` SET req_status = 'D' WHERE `user_id` = '".$getid."'") or die(mysqli_error());
	if($declined && $declinedReqs){
		// Send email to the user
		$userEmail = getUserEmail($conn, $getid);
		$fullname = getName($conn, $getid);

		if ($userEmail) {
			$mail = new PHPMailer\PHPMailer\PHPMailer();

			// Uncomment the line below if you're using SMTP
			$mail->isSMTP();

			$mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
			$mail->SMTPAuth = true;
			$mail->Username = ''; //your email
			$mail->Password = ''; //app password
			$mail->SMTPSecure = 'tls'; // TLS encryption
			$mail->Port = 587; // TCP port to connect to

			$mail->setFrom('', 'TESDA_ScholarshipSystem'); // Set your email address and name
			$mail->addAddress($userEmail); // Add recipient email address

			$mail->Subject = 'Scholarship Application Status - TESDA Guiguinto';
			$mail->Body = "Application Update\n\nDear $fullname,\n\nWe hope this message finds you well. Thank you for applying to the scholarship program at TESDA Guiguinto. After reviewing, we regret to inform you that your application was not selected.\n\nWe appreciate the effort you invested in your application and encourage you to explore other educational opportunities. TESDA Guiguinto remains committed to supporting learners, and we hope you will consider applying for future programs.\n\nIf you have any questions or need further information, please do not hesitate to contact us at contactcenter@tesda.gov.ph. We are happy to help you with any questions you may have.\n\nVisit our Website at https://www.tesda.gov.ph";

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
	function getName($conn, $userId) {
        $result = $conn->query("SELECT fname, lname FROM `scholar` WHERE `user_id` = '".$userId."'");
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['fname'] . ' ' . $row['lname'];
        }
        return null;
    }
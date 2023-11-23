<?php
require_once 'auth.php';
extract($_POST);
// Check if images are set
if (
    isset($_FILES['cor']['name']) && $_FILES['cor']['name'] != '' &&
    isset($_FILES['profilepic']['name']) && $_FILES['profilepic']['name'] != '' &&
    isset($_FILES['brgycert']['name']) && $_FILES['brgycert']['name'] != '' &&
    isset($_FILES['signature']['name']) && $_FILES['signature']['name'] != '' &&
    isset($_FILES['idcard']['name']) && $_FILES['idcard']['name'] != ''
) {
    $cor = $_FILES['cor']['name'];
    $profilepic = $_FILES['profilepic']['name'];
    $brgycert = $_FILES['brgycert']['name'];
    $signature = $_FILES['signature']['name'];
    $idcard = $_FILES['idcard']['name'];

    $path = "../uploads/"; /** Path for Uploading your Image **/

    // Create uploads directory if it doesn't exist
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    // Get file extensions
    $cor_extension = pathinfo($cor, PATHINFO_EXTENSION);
    $profilepic_extension = pathinfo($profilepic, PATHINFO_EXTENSION);
    $brgycert_extension = pathinfo($brgycert, PATHINFO_EXTENSION);
    $signature_extension = pathinfo($signature, PATHINFO_EXTENSION);
    $idcard_extension = pathinfo($idcard, PATHINFO_EXTENSION);

    // Rename the images
    $cor_filename = $uid . '_cor.' . $cor_extension;
    $profilepic_filename = $uid . '_profilepic.' . $profilepic_extension;
    $brgycert_filename = $uid . '_brgycert.' . $brgycert_extension;
    $signature_filename = $uid . '_signature.' . $signature_extension;
    $idcard_filename = $uid . '_idcard.' . $idcard_extension;

    $q = "INSERT INTO scholar_reqs (user_id, gwa, cor, profilepic, brgycert, signature, idcard) VALUES ('$uid', '$gwa', '$cor_filename','$profilepic_filename','$brgycert_filename','$signature_filename','$idcard_filename')";
    $query_run = $conn->query($q);

    if ($query_run) {
        // Upload images to uploads folder
        move_uploaded_file($_FILES['cor']['tmp_name'], $path . $cor_filename);
        move_uploaded_file($_FILES['profilepic']['tmp_name'], $path . $profilepic_filename);
        move_uploaded_file($_FILES['brgycert']['tmp_name'], $path . $brgycert_filename);
        move_uploaded_file($_FILES['signature']['tmp_name'], $path . $signature_filename);
        move_uploaded_file($_FILES['idcard']['tmp_name'], $path . $idcard_filename);

        // Success message
        log_activity($conn, $uid, 'Add Requirements', "Added requirements for user #$uid");
        echo json_encode(array('status' => 1, 'msg' => "Data successfully Saved"));
    } else {
        echo json_encode(array('status' => 0, 'msg' => "Sorry, there was an error uploading your files."));
        exit();
    }
} else {
    echo json_encode(array('status' => 0, 'msg' => "Please upload all required images."));
    exit();
}
?>
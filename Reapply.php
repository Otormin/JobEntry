<?php
include 'connect.php';

session_start();

$talentId = $_GET['talentId'];
$jobId = $_GET['jobId'];
$getJobDetails = "SELECT * FROM applied_talents WHERE jobId = $jobId AND talentId = $talentId";
$getJobDetailsResult = mysqli_query($conn, $getJobDetails);

if ($getJobDetailsResult && mysqli_num_rows($getJobDetailsResult) > 0) {
    $isApplied = 1;

    $unApply = "UPDATE applied_talents SET isApplied = '$isApplied' WHERE jobId = $jobId AND talentId = $talentId";

    $unApplyResult = mysqli_query($conn, $unApply);

    if ($unApplyResult) {
        header("Location: ./Profile.php");
    }
    else {
        echo "Error reapplying talent: " . $conn->error;
    }
}
?>
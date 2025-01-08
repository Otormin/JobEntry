<?php
include 'connect.php';

session_start();

$jobId = $_GET['jobId'];
$talentId = $_GET['talentId'];
$getJobDetails = "SELECT * FROM applied_talents WHERE jobId = $jobId AND talentId = $talentId";
$getJobDetailsResult = mysqli_query($conn, $getJobDetails);

if ($getJobDetailsResult && mysqli_num_rows($getJobDetailsResult) > 0) {
    $isApplied = 0;

    $unApply = "UPDATE applied_talents SET isApplied = '$isApplied' WHERE jobId = $jobId AND talentId = $talentId";

    $unApplyResult = mysqli_query($conn, $unApply);

    if ($unApplyResult) {
        header("Location: ./Profile.php");
    }
    else {
        echo "Error unapplying talent: " . $conn->error;
    }
}
?>
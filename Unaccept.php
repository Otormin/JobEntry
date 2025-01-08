<?php
include 'connect.php';

session_start();

$talentId = $_GET['talentId'];
$jobId = $_GET['jobId'];
$getJobDetails = "SELECT * FROM applied_talents WHERE jobId = $jobId AND talentId = $talentId";
$getJobDetailsResult = mysqli_query($conn, $getJobDetails);

if ($getJobDetailsResult && mysqli_num_rows($getJobDetailsResult) > 0) {
    $isAccepted = 0;

    $accept = "UPDATE applied_talents SET isAccepted = '$isAccepted' WHERE jobId = $jobId AND talentId = $talentId";

    $acceptResult = mysqli_query($conn, $accept);

    if ($acceptResult) {
        header("Location: ./Profile.php");
    }
    else {
        echo "Error accepting worker: " . $conn->error;
    }
}
?>
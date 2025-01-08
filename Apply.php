<?php
    session_start();

    include 'connect.php';

    $talentId = $_SESSION['talentId'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $coverLetter = $_POST['cLetter'];
    $jobId = $_POST['jobId'];
    $recruiterId = $_POST['recruiterId'];
    $applicationDate = date('Y-m-d');

    $isApplied = 1;
    $isAccepted = 0;

    $check = "SELECT * FROM applied_talents WHERE jobId = '$jobId' AND talentId = '$talentId'";
    $checkResult = $conn->query($check);

    if ($checkResult->num_rows == 0) {
        $queue = "INSERT INTO applied_talents (jobId, talentId, recruiterId, name, email, coverLetter, isApplied, isAccepted, applicationDate) VALUES ('$jobId', '$talentId', '$recruiterId', '$name', '$email', '$coverLetter', '$isApplied', '$isAccepted', '$applicationDate')";

        $queueResult = mysqli_query($conn, $queue);
        if ($queueResult) {
            header("Location: ./job-list.php");
        } 
        else {
            echo "Error inserting into applied_talents: " . $conn->error;
        }
    } else {
        echo "<p>You already have an application for this job.</p>";
    }
?>
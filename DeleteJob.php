<?php
session_start();

include 'connect.php';

$jobId = $_GET['deleteId'];

$deleteJob = "DELETE FROM jobs WHERE jobId=$jobId";
$deleteJobFromAppliedTalents = "DELETE FROM applied_talents WHERE jobId=$jobId";

$deleteJobResult = mysqli_query($conn, $deleteJob);
$deleteJobFromAppliedTalentsResult = mysqli_query($conn, $deleteJobFromAppliedTalents); 

if($deleteJobResult && $deleteJobFromAppliedTalentsResult){
    header("Location: ./Profile.php");
}
else{
    die(mysqli_error($conn));
}

?>
<?php
session_start();

include 'connect.php';

$recruiterId = $_GET['deleteId'];

$deleteRecruiter = "DELETE FROM recruiters WHERE recruiterId = $recruiterId";
$deleteRecruiterFromAppliedTalents = "DELETE FROM applied_talents WHERE recruiterId = $recruiterId";
$deleteRecruiterFromJobs = "DELETE FROM jobs WHERE recruiterId = $recruiterId";

$deleteRecruiterResult = mysqli_query($conn, $deleteRecruiter);
$deleteRecruiterFromAppliedTalentsResult = mysqli_query($conn, $deleteRecruiterFromAppliedTalents);
$deleteRecruiterFromJobsResult = mysqli_query($conn, $deleteRecruiterFromJobs);

if($deleteRecruiterResult && $deleteRecruiterFromAppliedTalentsResult && $deleteRecruiterFromJobsResult){
    header("Location: Index.html");
}
else{
    die(mysqli_error($conn));
}

?>
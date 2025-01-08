<?php
session_start();

include 'connect.php';

$talentId = $_GET['talentId'];
$jobId = $_GET['jobId'];

$deleteJobFromAppliedTalents = "DELETE FROM applied_talents WHERE talentId=$talentId AND jobId=$jobId";

$deleteJobFromAppliedTalentsResult = mysqli_query($conn, $deleteJobFromAppliedTalents); 

if($deleteJobFromAppliedTalentsResult){
    header("Location: ./Profile.php");
}
else{
    die(mysqli_error($conn));
}

?>
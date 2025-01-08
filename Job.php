<?php
session_start();

include 'connect.php';


$recruiterId = $_SESSION['recruiterId'];

$jobTitle = $_POST['jTitle'];
$jobNature = $_POST['jNature'];
$pay = $_POST['pay'];
$jobDescription = $_POST['jDescription'];
$jobResponsibility = $_POST['jResponsibility'];
$jobQualification = $_POST['jQualification'];
$dateLine = $_POST['dLine'];
$jobLocation = $_POST['jLocation']; 
$jobCategory = $_POST['jCategory'];
$creationDate = date('Y-m-d');
$isAvailable = 1;

$insertJob = "INSERT INTO jobs (recruiterId, jobTitle, jobNature, pay, jobDescription, jobResponsibility, jobQualification, dateLine, jobLocation, jobCategory, creationDate, isAvailable) 
VALUES ('$recruiterId', '$jobTitle', '$jobNature', '$pay', '$jobDescription', '$jobResponsibility', '$jobQualification', '$dateLine', '$jobLocation', '$jobCategory', '$creationDate', '$isAvailable')";

if ($conn->query($insertJob) === TRUE) {
    header("Location: ./Profile.php");
    exit;
} else {
    echo "Error inserting into jobs: " . $conn->error;
}
?>

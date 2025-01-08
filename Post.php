<?php

session_start();

include 'connect.php';


$talentId = $_SESSION['talentId'];

$post=$_POST['post'];
$creationDate = date('Y-m-d');
$image=$_FILES['image']['tmp_name'];
$imgContent = "";
if($image == NULL){
    $imgContent = NULL;
}
else{
    $imgContent = addslashes(file_get_contents($image));
}

$insertQueue = "INSERT INTO posts (talentId, post, creationDate, image) VALUES ('$talentId','$post','$creationDate','$imgContent')";

if ($conn->query($insertQueue) === TRUE) {
    header("Location: Profile.php");
    exit();
}else{
    echo "Error inserting into posts table: " . $conn->error;
}?>
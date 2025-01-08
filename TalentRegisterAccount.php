<?php

include 'connect.php';

$firstName=$_POST['fName'];
$lastName=$_POST['lName'];
$DOB=$_POST['DOB'];
$talentDetails = $_POST['tDetails'];
$workExperience=$_POST['wExperience'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$role = "Talent";
if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
} else {
    echo "Image upload failed.";
    exit();
}

$checkEmail = "SELECT * FROM talents where email='$email'";
$result=$conn->query($checkEmail);
if($result->num_rows>0){
    echo "Email Address Already Exists!";
}
else{
    $insertQueue = "INSERT INTO talents(firstName,lastName, DOB, talentDetails, workExperience,password,email,role,image) VALUES ('$firstName','$lastName', '$DOB', '$talentDetails', '$workExperience', '$password','$email','$role','$imgContent')";

    if($conn->query($insertQueue)==TRUE){
        header("Location: ./index.html");
        exit();
    }
    else{
        echo "Error inserting into talents:".$conn->error;
    }
}
?>
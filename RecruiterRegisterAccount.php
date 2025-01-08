<?php
include 'connect.php';
session_start();

$companyName = $_POST['cName'];
$companyDetail = $_POST['cDetail'];
$companyLocation = $_POST['cLocation'];

if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
} else {
    echo "Image upload failed.";
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$role = "Recruiter";

$checkEmail = "SELECT * FROM recruiters WHERE email='$email'";
$result = $conn->query($checkEmail);

if ($result->num_rows > 0) {
    echo "Email Address Already Exists!";
} else {
    $insertQueue = "INSERT INTO recruiters (companyName, companyDetail, companyLocation, image, password, email, role) 
                    VALUES ('$companyName', '$companyDetail', '$companyLocation', '$imgContent', '$password', '$email', '$role')";

    if ($conn->query($insertQueue) === TRUE) {
        header("Location: ./Index.html");
        exit();
    } else {
        echo "Error inserting into recruiters: " . $conn->error;
    }
}
?>
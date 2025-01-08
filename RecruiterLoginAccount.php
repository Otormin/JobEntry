<?php
include 'connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$sql = "SELECT * FROM recruiters WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['recruiterId'] = $row['recruiterId'];
    $_SESSION['role'] = $row['role'];
    header("Location: ./Homepage.php");
    exit();
} else {
    echo "Incorrect Email or Password.";
}
?>
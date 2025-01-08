<?php
session_start();

include 'connect.php';

$talentId = $_GET['deleteId'];

$deleteTalent = "DELETE FROM talents WHERE talentId = $talentId";
$deleteTalentFromAppliedTalents = "DELETE FROM applied_talents WHERE talentId = $talentId";
$deleteTalentFromPosts = "DELETE FROM posts WHERE talentId = $talentId";

$deleteTalentResult = mysqli_query($conn, $deleteTalent);
$deleteTalentFromAppliedTalentsResult = mysqli_query($conn, $deleteTalentFromAppliedTalents);
$deleteTalentFromPostsResult = mysqli_query($conn, $deleteTalentFromPosts);

if($deleteTalentResult && $deleteTalentFromAppliedTalentsResult && $deleteTalentFromPostsResult){
    header("Location: Index.html");
}
else{
    die(mysqli_error($conn));
}

?>
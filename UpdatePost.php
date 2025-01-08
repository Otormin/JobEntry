<?php
include 'connect.php';

$postId = $_GET['postId'];

$getPostDetails = "SELECT * FROM posts WHERE postId = $postId";
$getPostDetailsResult = mysqli_query($conn, $getPostDetails);


$row = mysqli_fetch_assoc($getPostDetailsResult);

$previousPost = htmlspecialchars($row['post']);
$previousImage = 'data:image/jpeg;base64,' . base64_encode($row['image']);

if(isset($_POST['submit'])){
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

    $updateQueue = "UPDATE posts SET post = '$post', creationDate = '$creationDate', image = '$imgContent' WHERE postId = $postId";

    $updateQueueResult = mysqli_query($conn, $updateQueue);

    if ($updateQueueResult) {
        header("Location: ./Profile.php");
    }
    else {
        echo "Error updating posts: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00795a;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 60px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2B3940;
        }

        form input, 
        form select, 
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #2B3940;
            border-radius: 4px;
            font-size: 14px;
            color: #2B3940;
            background-color: #EFFDF5;
        }

        form textarea {
            resize: none;
        }

        form input[type="submit"] {
            background-color: #00B074;
            color: white;
            cursor: pointer;
            border: none;
            font-weight: bold;
        }

        form input[type="submit"]:hover {
            background-color: #00795a;
        }

        .cancel-btn {
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .cancel-btn a {
            text-decoration: none;
        }

        .cancel-btn button {
            background: #2B9BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .cancel-btn button:hover {
            background: #1e7bd6;
        }

        label {
            font-weight: bold;
            color: #2B3940;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Post</h1>
        <form method="post" enctype="multipart/form-data">                        
            <label for="post">Post</label>
            <textarea name="post" id="post" placeholder="Post" rows="20" cols="10" required><?php echo $previousPost; ?></textarea>
            
            <label for="image">Image</label>
            <div>
                <img src="<?php echo $previousImage; ?>" alt="Previous Image" style="height: 100px; width: 100px; object-fit: cover; margin-bottom: 10px;">
            </div>
            <input type="file" name="image" id="image">
            
            <input type="submit" value="Update" name="submit">
        </form>
        <div class="cancel-btn">
            <a href="Profile.php"><button type="button">Cancel</button></a>
        </div>
    </div>
</body>
</html>

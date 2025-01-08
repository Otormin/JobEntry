<?php
include 'connect.php';

$talentId = $_GET['updateId'];

$getTalentDetails = "SELECT * FROM talents WHERE talentId = $talentId";
$getTalentDetailsResult = mysqli_query($conn, $getTalentDetails);


$row = mysqli_fetch_assoc($getTalentDetailsResult);

$previousFirstName = htmlspecialchars($row['firstName']);
$previousLastName = htmlspecialchars($row['lastName']);
$previousDOB = htmlspecialchars($row['DOB']);
$previousTalentDetails = htmlspecialchars($row['talentDetails']);
$previousWorkExperience = htmlspecialchars($row['workExperience']);
$previousEmail = htmlspecialchars($row['email']);
$previousImage = 'data:image/jpeg;base64,' . base64_encode($row['image']);

if(isset($_POST['submit'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $DOB=$_POST['DOB'];
    $talentDetails = $_POST['tDetails'];
    $workExperience=$_POST['wExperience'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    } else {
        echo "Image upload failed.";
        exit();
    }

    $insertQueue = "UPDATE talents SET firstName = '$firstName', lastName = '$lastName', DOB = '$DOB', talentDetails = '$talentDetails', workExperience = '$workExperience', email = '$email', password = '$password', image = '$imgContent' WHERE talentId = $talentId";

    if($conn->query($insertQueue)==TRUE){
        header("Location: ./Profile.php");
        exit();
    }
    else{
        echo "Error Updating talents:".$conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007856;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #EFFDF5;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 70px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2B3940;
        }

        form input,form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        form input[type="submit"] {
            background-color: #00B074;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #007856;
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

        .text-center {
            text-align: center;
            margin-top: 10px;
        }

        .text-center a {
            color: #2B9BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 15px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Account</h1>
        <form id="registerForm" method="post" enctype="multipart/form-data">
            <input type="text" name="fName" id="fName" placeholder="First Name" value="<?php echo $previousFirstName; ?>" required>
            <input type="text" name="lName" id="lName" placeholder="Last Name" value="<?php echo $previousLastName; ?>" required>
            <p>Date of Birth</p>
            <input type="date" name="DOB" id="DOB" placeholder="Date of Birth" value="<?php echo $previousDOB; ?>" required>
            <p id="dateError" class="error">You must be 18 years or older to register as a worker</p>
            <p>Talent Details</p>
            <input type="text" name="tDetails" id="tDetails" placeholder="Tell us a Little bit about yourself" max=30 value="<?php echo $previousTalentDetails; ?>" required>
            <p>Profile Picture</p>
            <div>
                <img src="<?php echo $previousImage; ?>" alt="Previous Image" style="height: 100px; width: 100px; object-fit: cover; margin-bottom: 10px;">
            </div>
            <input type="file" value="Profile Picture" name="image" required>
            <textarea name="wExperience" id = "wExperience"  placeholder="Work Experience" rows="5" cols="10" max=500 required><?php echo $previousWorkExperience; ?></textarea>
            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $previousEmail; ?>" required>
            <input type="password" name="password" id="password" placeholder="Password" max = 16 min = 8 required>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
            <p id="error" class="error">Passwords do not match</p>
            <input type="submit" value="Update" name="submit">
        </form>
        <div class="cancel-btn">
            <a href="Profile.php"><button type="button">Cancel</button></a>
        </div>
    </div>
    <script>
        const registerForm = document.getElementById('registerForm');
        const password = document.getElementById('password');
        const dob = document.getElementById('DOB');
        const confirmPassword = document.getElementById('confirmPassword');
        const error = document.getElementById('error');
        const dateError = document.getElementById('dateError');

        registerForm.addEventListener('submit', function(event) {
            if (password.value !== confirmPassword.value) {
                event.preventDefault();
                error.style.display = 'block';
            } else {
                error.style.display = 'none';
            }

            const dobValue = new Date(dob.value);
            const today = new Date();
            const age = today.getFullYear() - dobValue.getFullYear();

            if(age < 18){
                dateError.style.display = "block";
                event.preventDefault();
            }
        });
    </script>
</body>
</html>

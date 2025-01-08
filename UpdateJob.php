<?php
include 'connect.php';

$jobId = $_GET['updateId'];

$getJobDetails = "SELECT * FROM jobs WHERE jobId = $jobId";
$getJobDetailsResult = mysqli_query($conn, $getJobDetails);


$row = mysqli_fetch_assoc($getJobDetailsResult);

$previousJobTitle=htmlspecialchars($row['jobTitle']);
$previousJobNature=htmlspecialchars($row['jobNature']);
$previousPay=htmlspecialchars($row['pay']);
$previousJobDescription=htmlspecialchars($row['jobDescription']);
$previousJobResponsibility=htmlspecialchars($row['jobResponsibility']);
$previousJobQualification=htmlspecialchars($row['jobQualification']);
$previousDateLine=htmlspecialchars($row['dateLine']);
$previousJobLocation=htmlspecialchars($row['jobLocation']);
$previousJobCategory=htmlspecialchars($row['jobCategory']);

if(isset($_POST['submit'])){
    $jobTitle=$_POST['jTitle'];
    $jobNature=$_POST['jNature'];
    $pay=$_POST['pay'];
    $jobDescription=$_POST['jDescription'];
    $jobResponsibility=$_POST['jResponsibility'];
    $jobQualification=$_POST['jQualification'];
    $dateLine=$_POST['dLine'];
    $jobLocation=$_POST['jLocation'];
    $jobCategory=$_POST['jCategory'];
    $creationDate = date('Y-m-d');
    $isAvailable = 1;

    $updateQueue = "UPDATE jobs SET jobTitle = '$jobTitle', jobNature = '$jobNature', pay = '$pay', jobDescription = '$jobDescription', jobResponsibility = '$jobResponsibility', jobQualification = '$jobQualification', dateLine = '$dateLine', jobLocation = '$jobLocation', jobCategory = '$jobCategory', creationDate = '$creationDate', isAvailable = '$isAvailable' WHERE jobId = $jobId";

    $updateQueueResult = mysqli_query($conn, $updateQueue);

    if ($updateQueueResult) {
        header("Location: ./Profile.php");
    }
    else {
        echo "Error updating jobs: " . $conn->error;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
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

        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        form input[type="submit"], .cancel-button button {
            background-color: #00B074;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover, .cancel-button button:hover {
            background-color: #007856;
        }

        label {
            font-weight: bold;
            color: #2B3940;
        }

        .cancel-button {
            text-align: center;
            margin-top: 20px;
        }

        .cancel-button a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Job</h1>
        <form method="post">
            <label for="jTitle">Job Title</label>
            <input type="text" name="jTitle" id="jTitle" placeholder="Job Title" value="<?php echo $previousJobTitle; ?>" required>

            <label for="jobNature">Job Nature</label>
            <select name="jNature" id="jobNature" required>
                <option <?php if ($previousJobNature == 'Full Time') echo 'selected'; ?>>Full Time</option>
                <option <?php if ($previousJobNature == 'Part Time') echo 'selected'; ?>>Part Time</option>
            </select>

            <label for="pay">Pay</label>
            <input type="number" name="pay" id="pay" placeholder="Pay" value="<?php echo $previousPay; ?>" required>

            <label for="jDescription">Job Description</label>
            <textarea name="jDescription" id="jDescription" placeholder="Job Description" rows="5" required><?php echo $previousJobDescription; ?></textarea>

            <label for="jResponsibility">Responsibility</label>
            <textarea name="jResponsibility" id="jResponsibility" placeholder="Responsibility" rows="5" required><?php echo $previousJobResponsibility; ?></textarea>

            <label for="jQualification">Qualification</label>
            <textarea name="jQualification" id="jQualification" placeholder="Qualification" rows="5" required><?php echo $previousJobQualification; ?></textarea>

            <label for="dLine">Date line</label>
            <input type="date" name="dLine" id="dLine" placeholder="Date Line" value="<?php echo $previousDateLine; ?>" required>

            <label for="jLocation">Job Location</label>
            <input type="text" name="jLocation" id="jLocation" placeholder="Job Location" value="<?php echo $previousJobLocation; ?>" required>

            <label for="jCategory">Job Category</label>
            <select name="jCategory" id="jCategory" required>
                <option <?php if ($previousJobCategory == 'Marketing') echo 'selected'; ?>>Marketing</option>
                <option <?php if ($previousJobCategory == 'Customer Service') echo 'selected'; ?>>Customer Service</option>
                <option <?php if ($previousJobCategory == 'Human Resource') echo 'selected'; ?>>Human Resource</option>
                <option <?php if ($previousJobCategory == 'Project Management') echo 'selected'; ?>>Project Management</option>
                <option <?php if ($previousJobCategory == 'Business Development') echo 'selected'; ?>>Business Development</option>
                <option <?php if ($previousJobCategory == 'Sales and Communication') echo 'selected'; ?>>Sales and Communication</option>
                <option <?php if ($previousJobCategory == 'Teaching and Education') echo 'selected'; ?>>Teaching and Education</option>
                <option <?php if ($previousJobCategory == 'Design and Creative') echo 'selected'; ?>>Design and Creative</option>
                <option <?php if ($previousJobCategory == 'Others') echo 'selected'; ?>>Others</option>
            </select>
            
            <input type="submit" value="Update" name="submit">
        </form>
        <div class="cancel-button">
            <a href="Profile.php"><button type="button">Cancel</button></a>
        </div>
    </div>
</body>
</html>
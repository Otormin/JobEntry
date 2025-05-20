<?php
include 'connect.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        #jobsSection {
            display: block; 
            padding: 50px;
        }
        #appliedTalentsSection {
            display: none; 
            padding: 50px;
        }
        #acceptedSection {
            display: block; 
            padding: 50px;
        }
        #pendingSection {
            display: none; 
            padding: 50px;
        }
        #postsSection {
            display: none; 
            padding: 50px;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <?php
            if(!isset($_SESSION['role'])){
        ?>
                <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
                    <a href="Homepage.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                        <h1 class="m-0 text-primary">JobEntry</h1>
                    </a>
                    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto p-4 p-lg-0">
                            <a href="Homepage.php" class="nav-item nav-link">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="job-list-allJobs.php" class="dropdown-item">All Jobs</a>
                                    <a href="job-list-marketing.php" class="dropdown-item">Marketing</a>
                                    <a href="job-list-customerService.php" class="dropdown-item">Customer Service</a>
                                    <a href="job-list-humanResources.php" class="dropdown-item">Human Resources</a>
                                    <a href="job-list-projectManagement.php" class="dropdown-item">Project Management</a>
                                    <a href="job-list-businessDevelopment.php" class="dropdown-item">Business Development</a>
                                    <a href="job-list-salesAndCommunication.php" class="dropdown-item">Sales and Communication</a>
                                    <a href="job-list-teachingAndEducation.php" class="dropdown-item">Teaching and Education</a>
                                    <a href="job-list-designAndCreative.php" class="dropdown-item">Design and Creative</a>
                                    <a href="job-list-others.php" class="dropdown-item">Others</a>
                                </div>
                            </div>
                            <a href="Recruiters.php" class="nav-item nav-link">Recruiters</a>
                            <a href="Posts.php" class="nav-item nav-link">Posts</a>
                            <a href="About.php" class="nav-item nav-link active">About</a>
                            <a href="Contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="Index.html" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Sign In<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </nav>
        <?php
            }
            else{
        ?>
                <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
                    <a href="Homepage.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                        <h1 class="m-0 text-primary">JobEntry</h1>
                    </a>
                    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto p-4 p-lg-0">
                            <a href="Homepage.php" class="nav-item nav-link">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="job-list-allJobs.php" class="dropdown-item">All Jobs</a>
                                    <a href="job-list-marketing.php" class="dropdown-item">Marketing</a>
                                    <a href="job-list-customerService.php" class="dropdown-item">Customer Service</a>
                                    <a href="job-list-humanResources.php" class="dropdown-item">Human Resources</a>
                                    <a href="job-list-projectManagement.php" class="dropdown-item">Project Management</a>
                                    <a href="job-list-businessDevelopment.php" class="dropdown-item">Business Development</a>
                                    <a href="job-list-salesAndCommunication.php" class="dropdown-item">Sales and Communication</a>
                                    <a href="job-list-teachingAndEducation.php" class="dropdown-item">Teaching and Education</a>
                                    <a href="job-list-designAndCreative.php" class="dropdown-item">Design and Creative</a>
                                    <a href="job-list-others.php" class="dropdown-item">Others</a>
                                </div>
                            </div>
                            <a href="Recruiters.php" class="nav-item nav-link">Recruiters</a>
                            <a href="Posts.php" class="nav-item nav-link">Posts</a>
                            <a href="About.php" class="nav-item nav-link active">About</a>
                            <a href="Contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="Profile.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Profile<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </nav>
        <?php
            }
        ?>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Profile</h1>
            </div>
        </div>
        <!-- Header End -->

        <!-- User Details Start -->
        <?php
            if(isset($_SESSION['talentId'])) {
                $talentId = $_SESSION['talentId'];
                $getTalentDetails = "SELECT * FROM talents WHERE talentId = $talentId";

                $getTalentDetailsResult = mysqli_query($conn, $getTalentDetails);

                if($getTalentDetailsResult){
                    while($row = mysqli_fetch_assoc($getTalentDetailsResult)){
                        $firstName = htmlspecialchars($row['firstName']);
                        $lastName = htmlspecialchars($row['lastName']);
                        $workExperience = htmlspecialchars($row['workExperience']);
                        $talentDetails = htmlspecialchars($row['talentDetails']);
                        $email = htmlspecialchars($row['email']);
                        $role = htmlspecialchars($row['role']);
                        $profilePicture = 'data:image/jpeg;base64,' . base64_encode($row['image']);
                    }
                }
            }

            if(isset($_SESSION['recruiterId'])) {
                $recruiterId = $_SESSION['recruiterId'];
                $getRecruiterDetails = "SELECT * FROM recruiters WHERE recruiterId = $recruiterId";

                $getRecruiterDetailsResult = mysqli_query($conn, $getRecruiterDetails);

                if($getRecruiterDetailsResult){
                    while($row = mysqli_fetch_assoc($getRecruiterDetailsResult)){
                        $companyName = htmlspecialchars($row['companyName']);
                        $companyDetail = htmlspecialchars($row['companyDetail']);
                        $companyLocation = htmlspecialchars($row['companyLocation']);
                        $email = htmlspecialchars($row['email']);
                        $role = htmlspecialchars($row['role']);
                        $image = 'data:image/jpeg;base64,' . base64_encode($row['image']);  
                    }
                }
            }
        ?>

        <?php 
            if(!isset($_SESSION['role'])) echo 'No details available.';

            if ($role == 'Talent') echo '<div style="padding-left: 50px; padding-top: 40px; padding-bottom: 40px; padding-right: 40px; background-color: #EFFDF5;">
                                                <img class="flex-shrink-0 img-fluid border rounded" src="' . $profilePicture . '" alt="Profile Picture" style="width: 200px; height: 200px;"></br></br></br>
                                                <h4 style="display: inline;">Name: '.$firstName.'</h4>
                                                <h4 style="display: inline;">'.$lastName.'</h4></br></br>
                                                <h4>Talent Details: '.$talentDetails.'</h4>
                                                <h4>Work Experience: '.$workExperience.'</h4>
                                                <h4>Email: '.$email.'</h4>
                                        </div>
                                        <a href="EditTalentAccount.php?updateId=' . $talentId . '"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; margin-left: 50px; border-radius: 10px; width: 25%;">Edit Account</button></a>
                                        <a href="DeleteTalentAccount.php?deleteId=' . $talentId . '"><button class="btn btn-primary" style="padding: 10px; border-radius: 10px; width: 25%;">Delete Account</button></a>';

            if ($role == 'Recruiter') echo '
                                        <div style="padding-left: 50px; padding-top: 40px; padding-bottom: 40px; padding-right: 40px; background-color: #EFFDF5;">
                                                <img class="flex-shrink-0 img-fluid border rounded" src="' . $image . '" alt="Company Logo" style="width: 200px; height: 200px;"></br></br></br>
                                                <h4>Company Name: '.$companyName.'</h4>
                                                <h4>Company Detail: '.$companyDetail.'</h4>
                                                <h4>Company Location: '.$companyLocation.'</h4>
                                                <h4>Company Email: '.$email.'</h4>
                                        </div>
                                        <a href="EditRecruiterAccount.php?updateId=' . $recruiterId . '"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; margin-left: 50px; border-radius: 10px; width: 25%;">Edit Account</button></a>
                                        <a href="DeleteRecruiterAccount.php?deleteId=' . $recruiterId . '"><button class="btn btn-primary" style="padding: 10px; border-radius: 10px; width: 25%;">Delete Account</button></a>';
        ?>
        <!-- User Details End -->

        <?php
            if(!isset($_SESSION['role'])){
                echo "";
            }
            if($role == 'Recruiter'){
                echo '<div id="buttons" style="padding: 10px; width: 100%; display: flex; justify-content: center; align-items: center; background-color: #EFFDF5;">
                    <button class="btn btn-primary" id="jobsSectionBtn" style="background-color: #007856; padding: 10px; margin: 20px; border-radius: 10px; width: 200px;">Jobs</button>
                    <button class="btn btn-primary" id="appliedTalentsSectionBtn" style="background-color: #007856; padding: 10px; border-radius: 10px; width: 200px;">Applied Talents</button>
                </div>';
            }

            if($role == 'Talent'){
                echo '<div id="buttons" style="padding: 10px; width: 100%; display: flex; justify-content: center; align-items: center; background-color: #EFFDF5;">
                    <button class="btn btn-primary" id="acceptedSectionBtn" style="background-color: #007856; padding: 10px; margin: 20px; border-radius: 10px; width: 200px;">Accepted Applications</button>
                    <button class="btn btn-primary" id="pendingSectionBtn" style="background-color: #007856; padding: 10px; border-radius: 10px; width: 200px;">Pending Applications</button>
                    <button class="btn btn-primary" id="postsSectionBtn" style="background-color: #007856; padding: 10px; margin: 20px; border-radius: 10px; width: 200px;">Posts</button>
                </div>';
            }
        ?>

        <!-- Profile Start -->
            <?php
                if(!isset($_SESSION['role'])){
                    echo 'No profile available <a href="index.html"><button class="btn btn-primary" style="padding: 5px; width: 100px;">Login</button></a>';
                }
                else{
            ?>
            <?php
                if ($role == 'Recruiter') {
                    $recruiterId = $_SESSION['recruiterId'];
                    $getImage = "SELECT * FROM recruiters WHERE recruiterId = $recruiterId";
                    $getImageResult = mysqli_query($conn, $getImage);
                    $image = "";

                    if ($getImageResult) {
                        while ($row = mysqli_fetch_assoc($getImageResult)) {
                            $image = 'data:image/jpeg;base64,' . base64_encode($row['image']);
                        }
                    }

                    $getJob = "SELECT * FROM jobs WHERE isAvailable = 1 AND recruiterId = $recruiterId";
                    $getJobResult = mysqli_query($conn, $getJob);
            ?>
                    <section id="jobsSection" class="section-container" style="background-color: #EFFDF5;">
                        <h2>Jobs</h2>
                        <div class="job-container">
                        <?php
                            if ($getJobResult && mysqli_num_rows($getJobResult) > 0) {
                                while ($row = mysqli_fetch_assoc($getJobResult)) {
                                    $jobId = $row['jobId'];

                                    $jobTitle = htmlspecialchars($row['jobTitle']);
                                    $jobNature = htmlspecialchars($row['jobNature']);
                                    $pay = htmlspecialchars($row['pay']);
                                    $jobDescription = htmlspecialchars($row['jobDescription']);
                                    $jobResponsibility = htmlspecialchars($row['jobResponsibility']);
                                    $jobQualification = htmlspecialchars($row['jobQualification']);
                                    $dateLine = htmlspecialchars($row['dateLine']);
                                    $jobLocation = htmlspecialchars($row['jobLocation']);
                                    $jobCategory = htmlspecialchars($row['jobCategory']);
                                    $creationDate = htmlspecialchars($row['creationDate']);

                                    echo '<div class="tab-content">
                                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                                <div class="job-item p-4 mb-4">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                            <img class="flex-shrink-0 img-fluid border rounded" src="' . $image . '" alt="" style="width: 80px; height: 80px;">
                                                            <div class="text-start ps-4">
                                                                <h5 class="mb-3">' . $jobTitle . '</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>' . $jobLocation . '</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>' . $jobNature . '</span>
                                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>' . $pay . '</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                            <div class="d-flex mb-3">
                                                                <a class="btn btn-primary" href="job-detail-recruiter.php?jobId=' . $jobId . '">Details</a>
                                                            </div>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ' . $dateLine . '</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="UpdateJob.php?updateId=' . $jobId . '"><button class="btn btn-primary" style="padding: 5px; margin-right: 20px; width: 100px;">Edit</button></a>
                                                    <a href="DeleteJob.php?deleteId=' . $jobId . '"><button class="btn btn-primary" style="padding: 5px; width: 100px;">Delete</button></a>
                                                </div>
                                            </div>
                                        </div></br></br>';
                                }
                            } else {
                                echo "<p>No jobs available.</p>";
                            }
                        ?>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; padding-top: 30px">
                            <a href="CreateJob.php"><button class="btn btn-primary" style="background-color: #007856; padding: 20px; border-radius: 10px; width: 200px;">Create Job</button></a>
                        </div>
                    </section>
            <?php
                }
            ?>

            <?php
                if ($role == 'Recruiter') {
            ?>
                    <section id="appliedTalentsSection" style="background-color: #EFFDF5;">
                        <h2>Applied Talents</h2>
                        <div>
                            <?php
                                $recruiterId = $_SESSION['recruiterId'];
                                $getDetails = "SELECT * FROM applied_talents WHERE recruiterId = $recruiterId AND isApplied = 1";

                                $getDetailsResult = mysqli_query($conn, $getDetails);

                                if ($getDetailsResult && mysqli_num_rows($getDetailsResult) > 0) {
                                    while ($row = mysqli_fetch_assoc($getDetailsResult)) {
                                        $jobId = $row['jobId'];
                                        $talentId = $row['talentId'];
                                        $name = htmlspecialchars($row['name']);
                                        $email = htmlspecialchars($row['email']);
                                        $coverLetter = htmlspecialchars($row['coverLetter']);
                                        $applicationDate = htmlspecialchars($row['applicationDate']);
                                        $isAccepted = htmlspecialchars($row['isAccepted']);

                                        $getJobDetails = "SELECT * FROM jobs WHERE jobId = $jobId";
                                        $getJobDetailsResult = mysqli_query($conn, $getJobDetails);

                                        if ($getJobDetailsResult) {
                                            while ($row = mysqli_fetch_assoc($getJobDetailsResult)) {
                                                $jobTitle = htmlspecialchars($row['jobTitle']);
                                                $jobDescription = htmlspecialchars($row['jobDescription']);
                                                $dateLine = htmlspecialchars($row['dateLine']);
                            ?>
                            <?php
                                if($isAccepted == 1){
                            ?>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                            <div class="job-item p-4 mb-4">
                                                <div class="row g-4">
                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                        <div class="text-start ps-4">
                                                            <h5 class="mb-3">Talent Name: <?= $name ?></h5>
                                                            <h5 class="mb-3">Talent Email: <?= $email ?></h5>
                                                            <h5 class="mb-3">Cover Letter: <?= $coverLetter ?></h5>
                                                            <h5 class="mb-3">Job Title: <?= $jobTitle ?></h5>
                                                            <h5 class="mb-3">Job Description: <?= $jobDescription ?></h5>
                                                            <h5 class="mb-3">Status: Accepted</h5>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date of application: <?= $applicationDate ?></small>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?= $dateLine ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: flex;">
                                        <a href="Unaccept.php?talentId=<?= $talentId?>&jobId=<?= $jobId?>"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; width: 100px;">Unaccept</button></a>

                                        <a href="Accept.php?talentId=<?= $talentId?>&jobId=<?= $jobId?>"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; width: 100px;">Accept</button></a>

                                        <a href="ViewTalentProfile.php?talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; width: 200px;">View Talent Profile</button></a>
                                    </div></br></br>
                            <?php
                                }
                            ?>
                            <?php
                                if($isAccepted == 0){
                            ?>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                            <div class="job-item p-4 mb-4">
                                                <div class="row g-4">
                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                        <div class="text-start ps-4">
                                                            <h5 class="mb-3">Talent Name: <?= $name ?></h5>
                                                            <h5 class="mb-3">Talent Email: <?= $email ?></h5>
                                                            <h5 class="mb-3">Cover Letter: <?= $coverLetter ?></h5>
                                                            <h5 class="mb-3">Job Title: <?= $jobTitle ?></h5>
                                                            <h5 class="mb-3">Job Description: <?= $jobDescription ?></h5>
                                                            <h5 class="mb-3">Status: Not Accepted</h5>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date of application: <?= $applicationDate ?></small>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?= $dateLine ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: flex;">
                                        <a href="Unaccept.php?talentId=<?= $talentId?>&jobId=<?= $jobId?>"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; width: 100px;">Unaccept</button></a>

                                        <a href="Accept.php?talentId=<?= $talentId?>&jobId=<?= $jobId?>"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; width: 100px;">Accept</button></a>

                                        <a href="ViewTalentProfile.php?talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 10px; margin-right: 20px; width: 200px;">View Talent Profile</button></a>
                                    </div></br></br>
                            <?php
                                }
                            ?>
                                                
                            <?php
                                            }
                                        }
                                    }
                                } else {
                                    echo "<p>No talents have applied.</p>";
                                }
                            ?>
                        </div>
                    </section>
            <?php
                }
            ?>

            <?php
                if ($role == 'Talent') {
                    $talentId = $_SESSION['talentId'];
            ?>
                    <section id="acceptedSection" class="section-container" style="background-color: #EFFDF5;">
                        <h2>Accepted Jobs</h2></br>
                        <div>
                            <?php
                                $getDetails = "SELECT * FROM applied_talents WHERE talentId = $talentId AND isApplied = 1 AND isAccepted = 1";
                                $getDetailsResult = mysqli_query($conn, $getDetails);

                                if ($getDetailsResult && mysqli_num_rows($getDetailsResult) > 0) {
                                    while ($row = mysqli_fetch_assoc($getDetailsResult)) {
                                        $jobId = $row['jobId'];

                                        $getJobDetails = "SELECT * FROM jobs WHERE jobId = $jobId";
                                        $getJobDetailsResult = mysqli_query($conn, $getJobDetails);

                                        if ($getJobDetailsResult) {
                                            while ($jobRow = mysqli_fetch_assoc($getJobDetailsResult)) {
                                                $recruiterId = $jobRow['recruiterId'];
                                                $jobTitle = htmlspecialchars($jobRow['jobTitle']);
                                                $jobDescription = htmlspecialchars($jobRow['jobDescription']);
                                                $jobLocation = htmlspecialchars($jobRow['jobLocation']);
                                                $pay = htmlspecialchars($jobRow['pay']);
                                                $dateLine = htmlspecialchars($jobRow['dateLine']);

                                                $getRecruiterDetails = "SELECT * FROM recruiters WHERE recruiterId = $recruiterId";
                                                $getRecruiterDetailsResult = mysqli_query($conn, $getRecruiterDetails);

                                                if ($getRecruiterDetailsResult) {
                                                    while ($recruiterRow = mysqli_fetch_assoc($getRecruiterDetailsResult)) {
                                                        $companyName = htmlspecialchars($recruiterRow['companyName']);
                                                        $companyLocation = htmlspecialchars($recruiterRow['companyLocation']);
                            ?>
                                                    <div class="tab-content">
                                                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                                            <div class="job-item p-4 mb-4">
                                                                <div class="row g-4">
                                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                        <div class="text-start ps-4">
                                                                            <h5 class="mb-3">Company Name: <?= $companyName ?></h5>
                                                                            <h5 class="mb-3">Company Location: <?= $companyLocation ?></h5>
                                                                            <h5 class="mb-3">Job Title: <?= $jobTitle ?></h5>
                                                                            <h5 class="mb-3">Pay: <?= $pay ?></h5>
                                                                            <h5 class="mb-3">Job Description: <?= $jobDescription ?></h5>
                                                                            <h5 class="mb-3">Job Location: <?= $jobLocation ?></h5>
                                                                            <h5 class="mb-3"> Status: Applied</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?= $dateLine ?></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="Unapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Unapply</button></a>
                                                                <a href="Reapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Apply</button></a>
                                                                <a href="DeleteApplication.php?talentId=<?= $talentId ?>&jobId=<?= $jobId ?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div></br></br>
                            <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    echo "<p>No jobs available for which you have applied.</p>";
                                }

                                $getDetails = "SELECT * FROM applied_talents WHERE talentId = $talentId AND isApplied = 0 AND isAccepted = 1";
                                $getDetailsResult = mysqli_query($conn, $getDetails);

                                if ($getDetailsResult && mysqli_num_rows($getDetailsResult) > 0) {
                                    while ($row = mysqli_fetch_assoc($getDetailsResult)) {
                                        $jobId = $row['jobId'];

                                        $getJobDetails = "SELECT * FROM jobs WHERE jobId = $jobId";
                                        $getJobDetailsResult = mysqli_query($conn, $getJobDetails);

                                        if ($getJobDetailsResult) {
                                            while ($jobRow = mysqli_fetch_assoc($getJobDetailsResult)) {
                                                $recruiterId = $jobRow['recruiterId'];
                                                $jobTitle = htmlspecialchars($jobRow['jobTitle']);
                                                $jobDescription = htmlspecialchars($jobRow['jobDescription']);
                                                $jobLocation = htmlspecialchars($jobRow['jobLocation']);
                                                $pay = htmlspecialchars($jobRow['pay']);
                                                $dateLine = htmlspecialchars($jobRow['dateLine']);

                                                $getRecruiterDetails = "SELECT * FROM recruiters WHERE recruiterId = $recruiterId";
                                                $getRecruiterDetailsResult = mysqli_query($conn, $getRecruiterDetails);

                                                if ($getRecruiterDetailsResult) {
                                                    while ($recruiterRow = mysqli_fetch_assoc($getRecruiterDetailsResult)) {
                                                        $companyName = htmlspecialchars($recruiterRow['companyName']);
                                                        $companyLocation = htmlspecialchars($recruiterRow['companyLocation']);
                            ?>
                                                    <div class="tab-content">
                                                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                                            <div class="job-item p-4 mb-4">
                                                                <div class="row g-4">
                                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                        <div class="text-start ps-4">
                                                                            <h5 class="mb-3">Company Name: <?= $companyName ?></h5>
                                                                            <h5 class="mb-3">Company Location: <?= $companyLocation ?></h5>
                                                                            <h5 class="mb-3">Job Title: <?= $jobTitle ?></h5>
                                                                            <h5 class="mb-3">Pay: <?= $pay ?></h5>
                                                                            <h5 class="mb-3">Job Description: <?= $jobDescription ?></h5>
                                                                            <h5 class="mb-3">Job Location: <?= $jobLocation ?></h5>
                                                                            <h5 class="mb-3"> Status: Not Applied</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?= $dateLine ?></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="Unapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Unapply</button></a>
                                                                <a href="Reapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Apply</button></a>
                                                                <a href="DeleteApplication.php?talentId=<?= $talentId ?>&jobId=<?= $jobId ?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div></br></br>
                            <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    echo "<p></p>";
                                }
                            ?>
                        </div>
                    </section>

                    <section id="pendingSection" class="section-container" style="background-color: #EFFDF5;">
                        <h2>Pending Jobs</h2></br>
                        <div>
                            <?php
                                $getDetails = "SELECT * FROM applied_talents WHERE talentId = $talentId AND isApplied = 1 AND isAccepted = 0";
                                $getDetailsResult = mysqli_query($conn, $getDetails);

                                if ($getDetailsResult && mysqli_num_rows($getDetailsResult) > 0) {
                                    while ($row = mysqli_fetch_assoc($getDetailsResult)) {
                                        $jobId = $row['jobId'];

                                        $getJobDetails = "SELECT * FROM jobs WHERE jobId = $jobId";
                                        $getJobDetailsResult = mysqli_query($conn, $getJobDetails);

                                        if ($getJobDetailsResult) {
                                            while ($jobRow = mysqli_fetch_assoc($getJobDetailsResult)) {
                                                $recruiterId = $jobRow['recruiterId'];
                                                $jobTitle = htmlspecialchars($jobRow['jobTitle']);
                                                $jobDescription = htmlspecialchars($jobRow['jobDescription']);
                                                $jobLocation = htmlspecialchars($jobRow['jobLocation']);
                                                $pay = htmlspecialchars($jobRow['pay']);
                                                $dateLine = htmlspecialchars($jobRow['dateLine']);

                                                $getRecruiterDetails = "SELECT * FROM recruiters WHERE recruiterId = $recruiterId";
                                                $getRecruiterDetailsResult = mysqli_query($conn, $getRecruiterDetails);

                                                if ($getRecruiterDetailsResult) {
                                                    while ($recruiterRow = mysqli_fetch_assoc($getRecruiterDetailsResult)) {
                                                        $companyName = htmlspecialchars($recruiterRow['companyName']);
                                                        $companyLocation = htmlspecialchars($recruiterRow['companyLocation']);
                            ?>
                                                    <div class="tab-content">
                                                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                                            <div class="job-item p-4 mb-4">
                                                                <div class="row g-4">
                                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                        <div class="text-start ps-4">
                                                                            <h5 class="mb-3">Company Name: <?= $companyName ?></h5>
                                                                            <h5 class="mb-3">Company Location: <?= $companyLocation ?></h5>
                                                                            <h5 class="mb-3">Job Title: <?= $jobTitle ?></h5>
                                                                            <h5 class="mb-3">Pay: <?= $pay ?></h5>
                                                                            <h5 class="mb-3">Job Description: <?= $jobDescription ?></h5>
                                                                            <h5 class="mb-3">Job Location: <?= $jobLocation ?></h5>
                                                                            <h5 class="mb-3"> Status: Applied</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?= $dateLine ?></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="Unapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Unapply</button></a>
                                                                <a href="Reapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Apply</button></a>
                                                                <a href="DeleteApplication.php?talentId=<?= $talentId ?>&jobId=<?= $jobId ?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div></br></br>
                            <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    echo "<p>No Pending Applications.</p>";
                                }

                                $getDetails = "SELECT * FROM applied_talents WHERE talentId = $talentId AND isApplied = 0  AND isAccepted = 0";
                                $getDetailsResult = mysqli_query($conn, $getDetails);

                                if ($getDetailsResult && mysqli_num_rows($getDetailsResult) > 0) {
                                    while ($row = mysqli_fetch_assoc($getDetailsResult)) {
                                        $jobId = $row['jobId'];

                                        $getJobDetails = "SELECT * FROM jobs WHERE jobId = $jobId";
                                        $getJobDetailsResult = mysqli_query($conn, $getJobDetails);

                                        if ($getJobDetailsResult) {
                                            while ($jobRow = mysqli_fetch_assoc($getJobDetailsResult)) {
                                                $recruiterId = $jobRow['recruiterId'];
                                                $jobTitle = htmlspecialchars($jobRow['jobTitle']);
                                                $jobDescription = htmlspecialchars($jobRow['jobDescription']);
                                                $jobLocation = htmlspecialchars($jobRow['jobLocation']);
                                                $pay = htmlspecialchars($jobRow['pay']);
                                                $dateLine = htmlspecialchars($jobRow['dateLine']);

                                                $getRecruiterDetails = "SELECT * FROM recruiters WHERE recruiterId = $recruiterId";
                                                $getRecruiterDetailsResult = mysqli_query($conn, $getRecruiterDetails);

                                                if ($getRecruiterDetailsResult) {
                                                    while ($recruiterRow = mysqli_fetch_assoc($getRecruiterDetailsResult)) {
                                                        $companyName = htmlspecialchars($recruiterRow['companyName']);
                                                        $companyLocation = htmlspecialchars($recruiterRow['companyLocation']);
                            ?>
                                                    <div class="tab-content">
                                                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                                            <div class="job-item p-4 mb-4">
                                                                <div class="row g-4">
                                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                        <div class="text-start ps-4">
                                                                            <h5 class="mb-3">Company Name: <?= $companyName ?></h5>
                                                                            <h5 class="mb-3">Company Location: <?= $companyLocation ?></h5>
                                                                            <h5 class="mb-3">Job Title: <?= $jobTitle ?></h5>
                                                                            <h5 class="mb-3">Pay: <?= $pay ?></h5>
                                                                            <h5 class="mb-3">Job Description: <?= $jobDescription ?></h5>
                                                                            <h5 class="mb-3">Job Location: <?= $jobLocation ?></h5>
                                                                            <h5 class="mb-3"> Status: Not Applied</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?= $dateLine ?></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="width: 100%">
                                                                <a href="Unapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; margin-bottom: 5px; width: 10%;">Unapply</button></a>
                                                                <a href="Reapply.php?jobId=<?= $jobId ?>&talentId=<?= $talentId?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 10%;">Apply</button></a>
                                                                <a href="DeleteApplication.php?talentId=<?= $talentId ?>&jobId=<?= $jobId ?>"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 10%;">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div></br></br>
                            <?php
                                                    }
                                                }
                                            }
                                        }
                                    }
                                } else {
                                    echo "<p></p>";
                                }
                            ?>
                        </div>
                    </section>

                    <section id="postsSection" class="section-container" style="background-color: #EFFDF5;">
                        <!-- Posts Start -->
                            <div class="container-xxl py-5" style="background-color: #007856; display: flex; align-items: center; justify-content: center; padding: 50px; flex-direction: column">
                                <h1 class="text-center mb-5 wow fadeInUp" style="color:white">Posts</h1>
                                <?php
                                    $getPosts = "SELECT * FROM posts WHERE talentId = $talentId ORDER BY creationDate DESC";
                                    $getPostsResult = mysqli_query($conn, $getPosts);

                                    if ($getPostsResult && mysqli_num_rows($getPostsResult) > 0) {
                                        while ($row = mysqli_fetch_assoc($getPostsResult)) {
                                            $talentId = $row['talentId'];
                                            $postId = htmlspecialchars($row['postId']);
                                            $post = htmlspecialchars($row['post']);

                                            $creationDate = new DateTime($row['creationDate']);
                                            $formattedDate = htmlspecialchars($creationDate->format('Y-m-d'));
                                            $formattedDate = htmlspecialchars(date('Y-m-d', strtotime($row['creationDate'])));
                                            if(empty($row['image'])){
                                                $image = "";
                                            }
                                            else{
                                                $image = 'data:image/jpeg;base64,' . base64_encode($row['image']);
                                            }

                                            $getTalentDetails = "SELECT * FROM talents WHERE talentId = $talentId";
                                            $getTalentDetailsResult = mysqli_query($conn, $getTalentDetails);
                                            $talentImage = "";
                                            if ($getTalentDetailsResult && mysqli_num_rows($getTalentDetailsResult) > 0) {
                                                $talent = mysqli_fetch_assoc($getTalentDetailsResult);
                                                $talentImage = 'data:image/jpeg;base64,' . base64_encode($talent['image']);
                                                $talentFirstName = htmlspecialchars($talent['firstName']);
                                                $talentLastName = htmlspecialchars($talent['lastName']);
                                                $talentDetails = htmlspecialchars($talent['talentDetails']);
                                            }

                                            if($image == ""){
                                                echo '
                                                <div style="background-color: #EFFDF5; display: flex; flex-direction: column; width: 100%; height: auto; padding: 20px 0px 20px 20px;">
                                                    <div style="display: flex; width: 100%; flex-wrap: wrap">
                                                        <div style="width: 20%; padding: 20px; margin-right: 20px">
                                                            <img src="'.$talentImage.'" alt="Profile picture" style="width: 80px; height: 80px; border-radius: 50%;">
                                                        </div>
                                                        <div style="width: 80%; text-align: left; padding-top: 20px; margin-left: 20px">
                                                            <h5 style="font-weight: bold; display: inline; color: #2B3940;">'.$talentFirstName.'</h5>
                                                            <h5 style="font-weight: bold; display: inline; color: #2B3940;">'.$talentLastName.'</h5>
                                                            <p style="display: block; color: #2B3940;">'.$talentDetails.'</p>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>' . $formattedDate . '</small>
                                                        </div>
                                                    </div>
                                                    <div class="container-xxl py-5">
                                                        <div class="container">
                                                            <div class="row align-items-center">
                                                                <!-- Text Section -->
                                                                <div class="col-lg-15 wow fadeIn">
                                                                    <p class="mb-4" style="font-weight: bold; color: #2B3940;">'.$post.'</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="width=100%">
                                                        <a href="UpdatePost.php?postId='.$postId.'"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Edit</button></a>
                                                        <a href="DeletePost.php?postId='.$postId.'"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Delete</button></a>
                                                    </div>
                                                </div></br></br>';
                                            }
                                            else{
                                                echo '<div style="background-color: #EFFDF5; display: flex; flex-direction: column; width: 100%; height: auto; padding: 20px 0px 20px 20px;">
                                                    <div style="display: flex; width: 100%; flex-wrap: wrap">
                                                        <div style="width: 20%; padding: 20px; margin-right: 20px">
                                                            <img src="'.$talentImage.'" alt="Profile picture" style="width: 80px; height: 80px; border-radius: 50%;">
                                                        </div>
                                                        <div style="width: 80%; text-align: left; padding-top: 20px; margin-left: 20px">
                                                            <h5 style="font-weight: bold; display: inline; color: #2B3940;">'.$talentFirstName.'</h5>
                                                            <h5 style="font-weight: bold; display: inline; color: #2B3940;">'.$talentLastName.'</h5>
                                                            <p style="display: block; color: #2B3940;">'.$talentDetails.'</p>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>' . $formattedDate . '</small>
                                                        </div>
                                                    </div>
                                                    <div class="container-xxl py-5">
                                                        <div class="container">
                                                            <div class="row align-items-center">
                                                                <!-- Text Section -->
                                                                <div class="col-lg-15 wow fadeIn">
                                                                    <p class="mb-4" style="font-weight: bold; color: #2B3940;">'.$post.'</p>
                                                                </div>
                                                                <!-- Image Section -->
                                                                <div class="col-lg-6 wow fadeIn" style="display: flex; align-items: center; justify-content: left;">
                                                                    <img src="'.$image.'" alt="Image" style="width: 45%; height: 100%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="width=100%">
                                                        <a href="UpdatePost.php?postId='.$postId.'"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Edit</button></a>
                                                        <a href="DeletePost.php?postId='.$postId.'"><button class="btn btn-primary" style="padding: 5px; margin-right: 5px; width: 100px;">Delete</button></a>
                                                    </div>
                
                                                </div></br></br>';
                                            }
                                        }
                                    } else {
                                        echo "<p style='color: white; font-weight: bold'>No Posts available.</p>";
                                    }
                                    echo "<div style='display: flex; justify-content: center; align-items: center; padding-top: 30px'>
                                            <a href='CreatePost.php'><button class='btn btn-primary' style='background-color: #EFFDF5; padding: 20px; border-radius: 10px; width: 200px; color: #007856;'>Create Post</button></a>
                                        </div>";
                                ?>
                            </div>
                        <!-- Posts End -->
                    </section>
            <?php
                }
            ?>
            <div style="width=100%">
                <a href="Logout.php"><button class="btn btn-primary" style="padding: 20px; width: 100%;">Logout<i class="fa fa-arrow-right ms-3"></i></button></a>
            </div>
            <?php
                }
            ?>
        <!-- Profile End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5" style="display: flex; align-items: start; justify-content: center;">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="About.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="Contact.php">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Babcock, Ilishan-Remo, Ogun State, Nigeria</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+234-9073372467)</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>yjesse@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">JobEntry</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script>
        let jobsSection = document.getElementById("jobsSection");
        let appliedTalentsSection = document.getElementById("appliedTalentsSection");
        let acceptedSection = document.getElementById("acceptedSection");
        let pendingSection = document.getElementById("pendingSection");
        let postsSection = document.getElementById("postsSection");

        let jobsSectionBtn = document.getElementById("jobsSectionBtn");
        let appliedTalentsSectionBtn = document.getElementById("appliedTalentsSectionBtn");
        let acceptedSectionBtn = document.getElementById("acceptedSectionBtn");
        let pendingSectionBtn = document.getElementById("pendingSectionBtn");
        let postsSectionBtn = document.getElementById("postsSectionBtn");

        let role = "<?php echo $_SESSION['role']; ?>"

        if(role == "Recruiter"){
            jobsSectionBtn.addEventListener("click", function(){
                jobsSection.style.display = "block";
                appliedTalentsSection.style.display = "none";
            });
            appliedTalentsSectionBtn.addEventListener("click", function(){
                jobsSection.style.display = "none";
                appliedTalentsSection.style.display = "block";
            });
        }

        if(role == "Talent"){
            acceptedSectionBtn.addEventListener("click", function(){
                acceptedSection.style.display = "block";
                pendingSection.style.display = "none";
                postsSection.style.display = "none";
            });
            pendingSectionBtn.addEventListener("click", function(){
                acceptedSection.style.display = "none";
                pendingSection.style.display = "block";
                postsSection.style.display = "none";
            });
            postsSectionBtn.addEventListener("click", function(){
                acceptedSection.style.display = "none";
                pendingSection.style.display = "none";
                postsSection.style.display = "block";
            });
        }        
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
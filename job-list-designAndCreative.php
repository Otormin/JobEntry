<?php
include 'connect.php';

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JobEntry - Jobs - Design and Creative</title>
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
        #featuredSection{
            display: block;
        }
        #fullTimeSection{
            display: none;
        }
        #partTimeSection{
            display: none;
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
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Jobs</a>
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
                            <a href="About.php" class="nav-item nav-link">About</a>
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
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Jobs</a>
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
                            <a href="About.php" class="nav-item nav-link">About</a>
                            <a href="Contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="Profile.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Profile<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </nav>
        <?php
            }
        ?>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Jobs - Design and Creative</h1>
            </div>
        </div>
        <!-- Header End -->


        <!-- Jobs Start -->
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Design and Creative</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3">
                            <button id="featuredSectionBtn" style="outline: none; border: none;"><h6 class="mt-n1 mb-0">Featured</h6></button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3">
                            <button id="fullTimeSectionBtn" style="outline: none; border: none;"><h6 class="mt-n1 mb-0">Full Time</h6></button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3">
                            <button id="partTimeSectionBtn" style="outline: none; border: none;"><h6 class="mt-n1 mb-0">Part Time</h6></button>
                        </a>
                    </li>
                </ul>
            </div>
            <section id="featuredSection">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="job-item p-4 mb-4">
                                        <?php
                                            $getJobs = "SELECT * FROM jobs WHERE isAvailable = 1 AND jobCategory = 'Design and Creative' ORDER BY 'jobTitle'";
                                            $getJobsResult = mysqli_query($conn, $getJobs);

                                            if ($getJobsResult && mysqli_num_rows($getJobsResult) > 0) {
                                                while ($row = mysqli_fetch_assoc($getJobsResult)) {
                                                    $recruiterId = $row['recruiterId'];
                                                    $jobId = $row['jobId'];
                                                    $jobTitle = htmlspecialchars($row['jobTitle']);
                                                    $jobNature = htmlspecialchars($row['jobNature']);
                                                    $pay = htmlspecialchars($row['pay']);
                                                    $jobLocation = htmlspecialchars($row['jobLocation']);
                                                    $dateLine = htmlspecialchars($row['dateLine']);

                                                    $getImage = "SELECT image FROM recruiters WHERE recruiterId = $recruiterId";
                                                    $getImageResult = mysqli_query($conn, $getImage);
                                                    $image = "";
                                                    if ($getImageResult && mysqli_num_rows($getImageResult) > 0) {
                                                        $imageRow = mysqli_fetch_assoc($getImageResult);
                                                        $image = 'data:image/jpeg;base64,' . base64_encode($imageRow['image']);
                                                    }

                                                    echo '
                                                        <div class="row g-4">
                                                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                <img class="flex-shrink-0 img-fluid border rounded" src="' . $image . '" alt="Company Logo" style="width: 80px; height: 80px;">
                                                                <div class="text-start ps-4">
                                                                    <h5 class="mb-3">' . $jobTitle . '</h5>
                                                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>' . $jobLocation . '</span>
                                                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>' . $jobNature . '</span>
                                                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>' . $pay . '</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                <div class="d-flex mb-3">
                                                                    <a class="btn btn-primary" href="job-detail.php?jobId=' . $jobId . '">Details</a>
                                                                </div>
                                                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ' . $dateLine . '</small>
                                                            </div>
                                                        </div></br></br>';
                                                }
                                            } else {
                                                echo "<p>No jobs available.</p>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fullTimeSection">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="job-item p-4 mb-4">
                                        <?php
                                            $getJobs = "SELECT * FROM jobs WHERE isAvailable = 1 AND jobCategory = 'Design and Creative' AND jobNature = 'Full Time' ORDER BY 'jobTitle'";
                                            $getJobsResult = mysqli_query($conn, $getJobs);

                                            if ($getJobsResult && mysqli_num_rows($getJobsResult) > 0) {
                                                while ($row = mysqli_fetch_assoc($getJobsResult)) {
                                                    $recruiterId = $row['recruiterId'];
                                                    $jobId = $row['jobId'];
                                                    $jobTitle = htmlspecialchars($row['jobTitle']);
                                                    $jobNature = htmlspecialchars($row['jobNature']);
                                                    $pay = htmlspecialchars($row['pay']);
                                                    $jobLocation = htmlspecialchars($row['jobLocation']);
                                                    $dateLine = htmlspecialchars($row['dateLine']);

                                                    $getImage = "SELECT image FROM recruiters WHERE recruiterId = $recruiterId";
                                                    $getImageResult = mysqli_query($conn, $getImage);
                                                    $image = "";
                                                    if ($getImageResult && mysqli_num_rows($getImageResult) > 0) {
                                                        $imageRow = mysqli_fetch_assoc($getImageResult);
                                                        $image = 'data:image/jpeg;base64,' . base64_encode($imageRow['image']);
                                                    }

                                                    echo '
                                                        <div class="row g-4">
                                                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                <img class="flex-shrink-0 img-fluid border rounded" src="' . $image . '" alt="Company Logo" style="width: 80px; height: 80px;">
                                                                <div class="text-start ps-4">
                                                                    <h5 class="mb-3">' . $jobTitle . '</h5>
                                                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>' . $jobLocation . '</span>
                                                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>' . $jobNature . '</span>
                                                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>' . $pay . '</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                <div class="d-flex mb-3">
                                                                    <a class="btn btn-primary" href="job-detail.php?jobId=' . $jobId . '">Details</a>
                                                                </div>
                                                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ' . $dateLine . '</small>
                                                            </div>
                                                        </div></br></br>';
                                                }
                                            } else {
                                                echo "<p>No jobs available.</p>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="partTimeSection">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="job-item p-4 mb-4">
                                        <?php
                                            $getJobs = "SELECT * FROM jobs WHERE isAvailable = 1 AND jobCategory = 'Design and Creative' AND jobNature = 'Part Time' ORDER BY 'jobTitle'";
                                            $getJobsResult = mysqli_query($conn, $getJobs);

                                            if ($getJobsResult && mysqli_num_rows($getJobsResult) > 0) {
                                                while ($row = mysqli_fetch_assoc($getJobsResult)) {
                                                    $recruiterId = $row['recruiterId'];
                                                    $jobId = $row['jobId'];
                                                    $jobTitle = htmlspecialchars($row['jobTitle']);
                                                    $jobNature = htmlspecialchars($row['jobNature']);
                                                    $pay = htmlspecialchars($row['pay']);
                                                    $jobLocation = htmlspecialchars($row['jobLocation']);
                                                    $dateLine = htmlspecialchars($row['dateLine']);

                                                    $getImage = "SELECT image FROM recruiters WHERE recruiterId = $recruiterId";
                                                    $getImageResult = mysqli_query($conn, $getImage);
                                                    $image = "";
                                                    if ($getImageResult && mysqli_num_rows($getImageResult) > 0) {
                                                        $imageRow = mysqli_fetch_assoc($getImageResult);
                                                        $image = 'data:image/jpeg;base64,' . base64_encode($imageRow['image']);
                                                    }

                                                    echo '
                                                        <div class="row g-4">
                                                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                                <img class="flex-shrink-0 img-fluid border rounded" src="' . $image . '" alt="Company Logo" style="width: 80px; height: 80px;">
                                                                <div class="text-start ps-4">
                                                                    <h5 class="mb-3">' . $jobTitle . '</h5>
                                                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>' . $jobLocation . '</span>
                                                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>' . $jobNature . '</span>
                                                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>' . $pay . '</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                                <div class="d-flex mb-3">
                                                                    <a class="btn btn-primary" href="job-detail.php?jobId=' . $jobId . '">Details</a>
                                                                </div>
                                                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ' . $dateLine . '</small>
                                                            </div>
                                                        </div></br></br>';
                                                }
                                            } else {
                                                echo "<p>No jobs available.</p>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Jobs End -->

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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        let featuredSection = document.getElementById("featuredSection");
        let fullTimeSection = document.getElementById("fullTimeSection");
        let partTimeSection = document.getElementById("partTimeSection");

        let featuredSectionBtn = document.getElementById("featuredSectionBtn");
        let fullTimeSectionBtn = document.getElementById("fullTimeSectionBtn");
        let partTimeSectionBtn = document.getElementById("partTimeSectionBtn");

        featuredSectionBtn.addEventListener("click", function(){
            featuredSection.style.display = "block";
            fullTimeSection.style.display = "none";
            partTimeSection.style.display = "none";
        });
        fullTimeSectionBtn.addEventListener("click", function(){
            featuredSection.style.display = "none";
            fullTimeSection.style.display = "block";
            partTimeSection.style.display = "none";
        });
        partTimeSectionBtn.addEventListener("click", function(){
            featuredSection.style.display = "none";
            fullTimeSection.style.display = "none";
            partTimeSection.style.display = "block";
        });
    </script>

</body>

</html>
<?php
include 'connect.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - About</title>
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
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Us Section -->
        <section class="container py-5 text-center">
            <h2 class="mb-4">Welcome to JobEntry</h2>
            <p>JobEntry is a cutting-edge platform designed to connect job seekers with the right opportunities, and employers with top talent. Our goal is to streamline the recruitment process for both job seekers and recruiters alike, making it easier for you to find the perfect fit.</p>
            <p>We provide a user-friendly interface where job seekers can browse job listings across a variety of industries, apply for positions, and connect with employers. For recruiters, we offer tools to post job openings, manage applications, and connect with highly qualified candidates from diverse backgrounds.</p>
            <p>Whether you're looking for your next career move or you're hiring for your team, JobEntry is here to help make the process faster and more efficient. Join us today and take the first step toward achieving your career goals or finding your ideal employee!</p>
        </section>
        <!-- About Us Section End -->

        <!-- Call-to-Action Start -->
        <section class="bg-light py-5 text-center">
            <div class="container">
                <h2 class="mb-4">Ready to Find Your Next Opportunity?</h2>
                <p>Join JobEntry today and take the first step towards a brighter future.</p>
                <a href="job-list-allJobs.php" class="btn btn-primary py-3 px-5 mt-3">Get Started</a>
            </div>
        </section>
        <!-- Call-to-Action End -->

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
</body>

</html>

<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry</title>
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
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="Homepage.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">JobEntry</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="Homepage.php" class="nav-item nav-link active">Home</a>
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
                    <a href="About.php" class="nav-item nav-link">About</a>
                    <a href="Contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="Profile.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Profile<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Job opportunities image">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find Your Dream Job Today</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Explore thousands of job opportunities tailored to your skills and career aspirations. Your future starts here.</p>
                                    <a href="job-list-allJobs.php" class="btn btn-primary py-3 px-5">Search Jobs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Startup job opportunities image">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Connect with Leading Startups</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Join innovative companies shaping the future. Find startup roles that match your passion and expertise.</p>
                                    <a href="job-list-businessDevelopment.php" class="btn btn-primary py-3 px-5">Explore Startup Jobs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <?php
                        $category = 'Marketing';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-marketing.php">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Customer Service';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-customerService.php">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Human Resource';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-humanResources.php">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Project Management';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-projectManagement.php">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Business Development';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-businessDevelopment.php">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Sales and Communication';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-salesAndCommunication.php">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales and Communication</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Teaching and Education';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-teachingAndEducation.php">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching and Education</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>

                    <?php
                        $category = 'Design and Creative';
                        $query = "SELECT COUNT(*) as count FROM jobs WHERE jobCategory = '$category'";
                        $result = mysqli_query($conn, $query);
                        $amountOfJobs = 0;
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $amountOfJobs = $row['count'];
                        }
                    ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="job-list-designAndCreative.php">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design and Creative</h6>
                            <p class="mb-0"><?php echo $amountOfJobs ?> Vacancy</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg" alt="Job opportunities">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;" alt="Career growth">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;" alt="Professional team">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/about-4.jpg" alt="Job matching solutions">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help You Find the Perfect Job or Talent</h1>
                        <p class="mb-4">At JobEntry, we are committed to connecting skilled professionals with meaningful job opportunities. Whether you're looking to advance your career or searching for the right talent for your organization, our platform is designed to meet your needs efficiently and effectively.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Streamlined job search and application process</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Access to a wide range of job categories</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Customized solutions for recruiters and job seekers</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="About.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="job-item p-4 mb-4">
                            <?php
                                $getJobs = "SELECT * FROM jobs WHERE isAvailable = 1 LIMIT 7"; 

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
                                                        <a class="btn btn-primary" href="job-detail.php?jobId=' . $jobId . '">Details</a>
                                                    </div>
                                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ' . $dateLine . '</small>
                                                </div>
                                            </div></br></br>';
                                    }
                                } else {
                                    echo "<p>No Jobs Found.</p>";
                                }
                            ?>
                        </div>
                        <a class="btn btn-primary py-3 px-5" href="job-list-allJobs.php">Browse More Jobs</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="text-center mb-5">What Our Clients Say</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>JobEntry helped me secure a job that aligns perfectly with my skills and career goals. The platform is easy to use, and the opportunities are abundant!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;" alt="Client 1">
                            <div class="ps-3">
                                <h5 class="mb-1">Jane Doe</h5>
                                <small>Marketing Specialist</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>As a recruiter, JobEntry has been an invaluable tool for finding top-tier candidates. It's streamlined and makes the hiring process much more efficient.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;" alt="Client 2">
                            <div class="ps-3">
                                <h5 class="mb-1">John Smith</h5>
                                <small>HR Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>I was impressed by the wide range of job categories available on JobEntry. I found my dream job within weeks of signing up!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;" alt="Client 3">
                            <div class="ps-3">
                                <h5 class="mb-1">Emily Clark</h5>
                                <small>Graphic Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>The team at JobEntry provides exceptional support. Their platform made it easy for me to connect with professionals who fit my company's culture.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;" alt="Client 4">
                            <div class="ps-3">
                                <h5 class="mb-1">Michael Lee</h5>
                                <small>Startup Founder</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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
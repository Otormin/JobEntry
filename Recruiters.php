<?php
include 'connect.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmConnect - Recruiters</title>
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

    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                    <a href="Recruiters.php" class="nav-item nav-link active">Recruiters</a>
                    <a href="Posts.php" class="nav-item nav-link">Posts</a>
                    <a href="About.php" class="nav-item nav-link">About</a>
                    <a href="Contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="Profile.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Profile<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Recruiters</h1>
            </div>
        </div>
        <!-- Header End -->

        <!-- Search Start -->
            <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; display: flex; justify-content: center; align-items: center;">
                <form action="" method="GET" style="display: flex; align-items: center; justify-content: center; width: 100%;">
                    <input type="text" name="search" placeholder = "Search Recruiter" class="form-control border-0" style="width: 25%;" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
                    <button type="submit" class="btn btn-dark border-0 w-25">Search</button>
                </form>
            </div>
        <!-- Search End -->

        <!-- Recruiter Start -->
            <section>
                <div style="display: flex; align-items: center; justify-content: center;">
                    <h4>Recruiters</h4>
                </div>

                <div style="display: flex; flex-wrap: wrap;">
                    <?php 
                        if(isset($_GET['search'])) { 
                            $filterValues = $_GET['search'];
                            $query = "SELECT * FROM recruiters WHERE CONCAT(companyName, email) LIKE '%$filterValues%'";

                            $queryResult = mysqli_query($conn, $query);

                            if(mysqli_num_rows($queryResult) > 0) {
                                foreach($queryResult as $recruiters) {
                                    $image = 'data:image/jpeg;base64,' . base64_encode($recruiters['image']);
                                    ?>

                                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" style="padding: 50px; display: flex">
                                        <div class="cat-item rounded p-4">
                                            <div style="width: 100%;">
                                                <img src="<?= $image ?>" alt="" style="height: 200px; width: 100%; padding-bottom: 10px;">
                                            </div>
                                            <h6 class="mb-3"> <?= $recruiters['companyName']; ?></h6>
                                            <p>Company Location: <?= $recruiters['companyLocation']; ?></p>
                                            <p>Company Email: <?= $recruiters['email']; ?></p>
                                            <a class="btn btn-primary" href="ViewRecruiterProfile.php?recruiterId=<?= $recruiters['recruiterId']; ?>">View Recruiter Profile</a></br></br>
                                        </div>
                                    </div></br></br>

                                    <?php
                                }
                            } else {
                                ?>
                                <div style="display: flex; align-items: center; justify-content: center;">
                                    <p style="padding: 50px">Recruiter not found</p>
                                </div>
                                <?php
                            }
                        }
                        else{
                            $getRecruiterDetails = "SELECT * FROM recruiters ";
                            $getRecruiterDetailsResult = mysqli_query($conn, $getRecruiterDetails);

                            if ($getRecruiterDetailsResult && mysqli_num_rows($getRecruiterDetailsResult) > 0) {
                                while ($row = mysqli_fetch_assoc($getRecruiterDetailsResult)) {
                                    $recruiterId = $row['recruiterId'];
                                    $companyName = htmlspecialchars($row['companyName']);
                                    $companyLocation = htmlspecialchars($row['companyLocation']);
                                    $email = htmlspecialchars($row['email']);
                                    $image = 'data:image/jpeg;base64,' . base64_encode($row['image']);

                                    echo '
                                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" style="padding: 50px; display: flex">
                                            <div class="cat-item rounded p-4">
                                                <div style="width: 100%;">
                                                    <img src="'.$image.'" alt="" style="height: 200px; width: 100%; padding-bottom: 10px;">
                                                </div>
                                                <h6 class="mb-3">'.$companyName.'</h6>
                                                <p>Company Location: '.$companyLocation.'</p>
                                                <p>Company Email: '.$email.'</p>
                                                <a class="btn btn-primary" href="ViewRecruiterProfile.php?recruiterId='.$recruiterId.'">View Recruiter Profile</a></br></br>
                                            </div>
                                        </div></br></br>';
                                }
                            }
                            else {
                                echo '<div style="display: flex; align-items: center; justify-content: center;">
                                        <p style="padding: 50px">No Recruiters available</p>
                                    </div>';
                            }
                        }
                    ?>
                </div>
            </section>
        <!-- Recruiters End -->

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
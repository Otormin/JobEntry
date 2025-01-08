<?php
include 'connect.php';

session_start();

$talentId = $_GET['talentId'];
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
                    <a href="Recruiters.php" class="nav-item nav-link">Recruiters</a>
                    <a href="Posts.php" class="nav-item nav-link">Posts</a>
                    <a href="About.php" class="nav-item nav-link">About</a>
                    <a href="Contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="Profile.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block">Profile<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
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
        ?>

        <?php 
            echo '<div style="padding-left: 50px; padding-top: 40px; padding-bottom: 40px; padding-right: 40px; background-color: #EFFDF5;">
                            <img class="flex-shrink-0 img-fluid border rounded" src="' . $profilePicture . '" alt="Profile Picture" style="width: 200px; height: 200px;"></br></br></br>
                            <h4 style="display: inline;">Name: '.$firstName.'</h4>
                            <h4 style="display: inline;">'.$lastName.'</h4></br></br>
                            <h4>Talent Details: '.$talentDetails.'</h4>
                            <h4>Work Experience: '.$workExperience.'</h4>
                            <h4>Email: '.$email.'</h4>
                    </div>';
        ?>
        <!-- User Details End -->

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
                                    </div></br></br>';
                                }
                            }
                        } else {
                            echo "<p style='color: white; font-weight: bold'>No Posts available.</p>";
                        }
                    ?>
                </div></br></br>
            <!-- Posts End -->
        </section>

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
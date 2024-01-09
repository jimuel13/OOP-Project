<?php
  include ('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ANDITO Ako - SLSU Student Counseling</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

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
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>ANDITO Ako</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="signup.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/group.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">SLSU Student
                                    Counseling</h5>
                                <h1 class="display-3 text-white animated slideInDown">Set an Appointment Now</h1>
                                <p class="fs-5 text-white mb-4 pb-2">For adult learners: Balance work, family, and
                                    studies. It's okay to reach out. Set an appointment for personalized support.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appoint
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-">
                <div class="col-lg-4 col-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Trained Counselors</h5>
                            <p>Trained in communication, listening skills, assertiveness, issues of confidentiality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Chat Anonymously</h5>
                            <p>Have a chat with our counselors without your identity being known.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Peers Support</h5>
                            <p>Support, not judgment. Safe online spaces for students to thrive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="img/virtual-hug.gif" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to ANDITO Ako</h1>
                    <p class="mb-4">Welcome to ANDITO Ako, your premier destination for seamless and efficient
                        student-counsel engagement at SLSU (Southern Luzon State University).
                        Our name, ANDITO Ako, is not just an acronym; it encapsulates our commitment to providing an
                        Appoint Now, DIrect Talk Online platform exclusively designed for students.</p>
                    <p class="mb-4">We understand that clear communication is vital, especially when seeking guidance.
                        The DIrect Talk Online feature of ANDITO Ako facilitates direct and effective communication
                        between students and the counsel team.
                        This user-friendly platform eliminates the barriers of traditional appointment-setting methods,
                        making the process swift and straightforward.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Features</h6>
                <h1 class="mb-5">Website Features</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-6 col-md-8 wow zoomIn" data-wow-delay="0.1s">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid" src="img/appointment.jpg" width="420px" alt="">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin: 1px;">
                            <h5 class="m-0">Online Appointment</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-8 wow zoomIn" data-wow-delay="0.3s">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid" src="img/chat-room.jpg" width="420px">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                            style="margin: 1px;">
                            <h5 class="m-0">Chat Room</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Counselors</h6>
                <h1 class="mb-5">Expert Counselors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/arvs.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/bi10te/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://twitter.com/bi10te"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/bi10te/?hl=en"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Rey Vincent Ebreo</h5>
                            <small>SLSU Counselor</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/jimol.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/jimuel.hepana"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://x.com/jimuel_hepana?t=S5vLllFTl9UuvlTv9QY7Rg&s=09"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/jml_hepana?igsh=MWEwdXg4eDRyenF0Mg=="><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Jimuel Hipana</h5>
                            <small>Professor in Psychology</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/mary.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/maryrose.nadera.77"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://x.com/yeymatxchaa?t=uhxLNoJ_fnRsc94eEu6RfQ&s=07"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/mrnadzm/"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mary Rose Nadera</h5>
                            <small>Dean of College of Arts and Sciences</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/cleven.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/cleclevs"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://twitter.com/cle636480345498"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/lavalseee_?igsh=MXI5MHJxM2E3NHNheQ=="><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Jonn Cleven Javier</h5>
                            <small>Head of Organization</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/maye.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mariel Palma</h5>
                    <p>Student Peer - Infomation Technology (CIT)</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Hi! I am Mariel Palma from College of Industrial Technology. If you have problems that you
                            cannot solve by yourself, don't hesitate to get in touch with me.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/ivy.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ivy Clarise Pondivida</h5>
                    <p>Student Peer - Civil Engineering  (CEN)</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">No man is an island. So don't keep it to yourself. If you want someone in your age that you
                            want to talk with, you can find me at the College of Engineering.  
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/cathjpg.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Catherine Estrella</h5>
                    <p>Student Peer - Biology (CAS) </p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"> If you're tired, remember to take a rest. Our journey is still not over. I'm Cath a third year Biology student 
                            and you can find me at the College of Arts and Sciences department.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/jhulz.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jhulzian Miguel Canlas</h5>
                    <p>Student Peer - Nursing (CAM) </p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Always remember what Dory said "Just keep swimming." I'm Jhulzian Miguel Canlas 
                            and if you want someone to have you as a company, you can see me at the College of Allied Medicine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="policy.html">Privacy Policy</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contacts</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Southern Luzon State University
                        Quezon Avenue, Lucban, Philippines</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(042) 540 4087</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>https://www.slsu.edu.ph/</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/bi10te"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/maryrose.nadera.77/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-dark p-1" src="img/slsu_badge.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-dark p-1" src="img/slsu_badge.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-dark p-1" src="img/slsu_badge.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-dark p-1" src="img/slsu_badge.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-dark p-1" src="img/slsu_badge.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-dark p-1" src="img/slsu_badge.png" alt="">
                        </div>
                    </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom">ANDITO Ako | Lucban, Quezon, Philippines</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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
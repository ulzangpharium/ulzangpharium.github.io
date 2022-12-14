<?php
session_start();
error_reporting(0);
include('includes/config.php');   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>chakabay adventures</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="african safari tours" name="keywords">
    <meta content="family african safari" name="description">

    <!-- Favicon -->
    <link href="images\img2\IMG\original logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Mama Ngina street, Transnational house door 4</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+254 727 257 524</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>chakabayagency@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <!--<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""target="_blank" ><i class="fab fa-twitter fw-normal"></i></a>-->
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323"target="_blank" ><i class="fab fa-facebook-f fw-normal"></i></a>
                <!--<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>-->
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/chakabay_african_adventure" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
               <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""target="_blank" ><i class="fab fa-youtube fw-normal"></i></a>-->
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
<div class="position-relative h-100"><!--add to other pages-->
                        <img class="img-fluid position-absolute w-100 h-100" src="images/img2/IMG/bg-hero.jpg" alt="african safari tours" style="object-fit: cover;">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!--<h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>CHAKABAY AGENCY</h1>-->
            <img src="images\img2\IMG\original logo.png" alt="Chakabay adventures"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="About.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="package.php" class="nav-item nav-link">Packages</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="destination.php" class="dropdown-item">Destination</a>
                       <!-- <a href="booking.php" class="dropdown-item">Booking</a>-->
                        <a href="team.php" class="dropdown-item">Travel Guides</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        
                       
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
          <!--  <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>-->
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your<span class="text-primary">Vacation</span> With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">"The journey. It matters"</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <!--SEARCH ENGINE REMOVED--->
                      <!--  <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->
  <!-- Team Start -->
  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guides chakabay.png" alt="east african safari">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="" target="blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="" target="blank" ><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure"target="blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Felix Kipruto</h5>
                            <small>Event manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guide 2.jpg" alt="best tour and travel company in kenya ">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="" target="blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""target="blank" ><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure"target="blank" ><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Julie Njoki </h5>
                            <small>secretary</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guide 3.jpg" alt="kenya best tour operators">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323"target="blank"><i class="fab fa-facebook-f"></i></a>
                           <a class="btn btn-square mx-1" href=""target="blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure" target="blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">James Maina</h5>
                            <small>travel Guide</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guide 4.jpg" alt="best african safari tours">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323"target="blank" ><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""target="blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure" target="blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Karanja Njirii</h5>
                            <small>Operator</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
<!-- Process Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 70px; height: 70px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <a href="destination.php">
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Book fascinating holiday packages to premier destinations in East Africa to enjoy your holiday and experience intriguing sceneries.</p></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 70px; height: 70px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <a href="index.php">
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Ultimate flexibility. You are in control, with options to satisfy any plan or budget. No hidden fees.No hidden charges. So you can relax before your trip even begins</p></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 70px; height: 70px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <a href="index.php">
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">We cater for all your airport transfers. Chakabay makes it easier for you to travel without worrying about your trip before it even begins.</p></a>
                    </div>
                </div>
            </div>

    <!-- Process END -->
    
      <!--EMBEDDED MAP-->
      <div class="maper">
    <h1 class="mb-5 text-center" style="margin-top: 60px;">map location</h1>
 <div class="map">   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8143228901863!2d36.82221131552283!3d-1.2853946359896369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d62d4fccdd%3A0xd51591efb95f601f!2sMama%20Ngina%20St%20Parking!5e0!3m2!1sen!2ske!4v1669186754525!5m2!1sen!2ske"
         width="800" height="450" style="border:3;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       <style>iframe{ display:block;margin-left: auto;margin-right: auto; }</style> 
         </div>
</div>
         <!---END OF CONTACT MAP-->
         </div>
</div>
    <!-- Process END -->

 
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="About.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                   <!-- <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>-->
                    <a class="btn btn-link" href="contact.php">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white  mb-3">Contact</h4>
                    <p class="mb-2 social-icons"><i class="fa fa-map-marker me-3"></i>Mama Ngina street, Transnational house door 4</p>
                    <p class="mb-2 social-icons"><i class="fa fa-phone me-3"></i>+254 727 257 524</p>
                    <p class="mb-2 social-icons"><i class="fa fa-envelope me-3"></i>chakabayagency@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""target="blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/chakabay_african_adventure" target="blank"><i class="fab fa-instagram"></i></a>
                       <!-- <a class="btn btn-outline-light btn-social" href=""target="_blank"><i class="fab fa-linkedin-in"></i></a>-->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                   <!--EMBEDDED MAP-->
      <div class="maper">
    <h4 class="text-white mb-3" >map location</h4>
 <div class="row g-2 pt-2"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8143228901863!2d36.82221131552283!3d-1.2853946359896369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d62d4fccdd%3A0xd51591efb95f601f!2sMama%20Ngina%20St%20Parking!5e0!3m2!1sen!2ske!4v1669186754525!5m2!1sen!2ske"
         width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
         </div>
</div>
         <!---END OF CONTACT MAP--> 
</div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221006_083901.jpg" alt="african safari vacation">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_065543.jpg"alt="best tour and travel company in kenya ">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_071123.jpg" alt="best african safari">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_072713.jpg" alt="african safari deals">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_074343.jpg" alt="african safari tours">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221005_074738.jpg" alt="tours and travel in kenya">
                        </div>
                    </div>
                </div>
               <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>-->

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">chakabay adventures</a>, All Right Reserved.


                       <!-- Designed By <a class="border-bottom" href="#">pharium</a>-->
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                           <!-- <a href="">Cookies</a>-->
                            <a href="contact.php">Help</a>
                           <!-- <a href="">FAQs</a>-->
                        </div>
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
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
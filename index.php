<?php
session_start();
error_reporting(0);
include('tms/includes/config.php');
?>



<!DOCTYPE html>

<!--added-->
<html lang="en-gb"  class="no-js">

<head>
    <meta charset="utf-8">
    <title>Chakabay Tours and Travel</title>
    <meta content="width=device-width, initial-scale=1.0 maximum-scale=1" name="viewport">
    <meta content="african safari" name="keywords">
    <meta content="Traveller" name="description">
    <meta name="author"  content="WebThemes">

    <!-- Favicon -->
    <link href="images\img2\IMG\original logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https:/fonts.googleapis.com">
    <link rel="preconnect" href="https:/fonts.gstatic.com" crossorigin>
    <link href="https:/fonts.googleapis.com/css2?family=Heebo:weight@400;500;600&family=Nunito:weight@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https:/cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- (ADDED)<link href="assets/css/boostrap.css" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen"/>
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/class" media="screen"/>
  <!--  <link rel="stylesheet" type="text/css" href="css/da-slider.css"/> -->




    <!-- Template Stylesheet -->
    <link href="css/css/style.css" rel="stylesheet">
    
    <!--original stylesheet-->
  <!-- <link rel="stylesheet" href="css/styles.css" /> -->


    <!--(ADDED) animate-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>



    <!-- Top bar Start -->
  <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                     <small class="me-3 text-light"><a href="admin/adindex.php"><i class="fa fa-home me-2"></i>Admin Login</small>
                    <!--- <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>KIAMUMBI TAMASHA,72</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>chakabayagency@gmail.com</small>-->
                </div>
            </div>
        </div>
    </div>
            <!-- <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-phone fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https:/www.instagram.com/chakabay_african_adventure" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https:/www.instagram.com/chakabay_african_adventure" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                  <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>-->
        
  <!-- new change-password top navbar--->
 <!--note <div class="container-fluid bg-dark px-5 d-none d-1g-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
           <div class="d-inline-flex align-items-center" style="height: 45px;">
              <small class="me-3 text-light">><a href="admin/index.php"></i>Admin Login</small>
           </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex align-items-center" style="height: 45px;">
            <li class="tol">Toll Number : 123-4568790</li>
             <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li>
             <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp; Sign In</a></li>
          </div>
        </div>
     </div>
  </div>-->



    <!-- Top bar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    <div class="position-relative h-100"><!--add to other pages-->
                        <img class="img-fluid position-absolute w-100 h-100" src="images\img2\IMG\seeing-elephants-on-a-game-drive-in-the-masai-mara.jpg" alt="african best tours" style="object-fit: cover;"> 
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0" >
                <h1 class="m-0 py-3"><img src="images\img2\IMG\original logo.png" alt="chakabay adventures"></h1>
               <!--use a container-->
                <!--<img src="images\img2\Chakabay Logo-06.jpg" alt="Logo"  width="100%" height="">-->
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
                            <!--<a href="booking.php" class="dropdown-item">Booking</a>-->
                            <a href="team.php" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>


                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <!--NOTE register page-->
              <!--  <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a> -->
            </div>
        </nav>
       
        <div class="hero-header container-fluid bg-primary py-5 mb-5  ">
         
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your <span class="text-primary">Vacation</span> With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">"Making the world seem smaller since 2018..."</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                         <!--SEARCH ENGINE REMEMBER-->  
                         <!--<input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>-->
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="images\dawn-w-FmUx8z_Tz4A-unsplash.jpg" alt="africa best tour deals" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Chakabay Adventures</span></h1>
                    <p class="mb-4"> Travel with the Best East African Tour Operators. We provide tailor-made and socially responsible safaris that imprint a beautiful experience.
                        Our promise to you since 2018 hearty, quality and unique service that gives you value for money.
                    </p>
                    <p class="mb-4">We offer budget safaris, mid-range safaris and luxury safaris, Bird watching safaris, beach vacations, city excursions, hotel bookings and airport transfers.
                                    Our responsive staff are highly trained and experienced to offer you the East-African Adventure. Book with us today.
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="About.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <a href="destination.php">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Africa Tours</h5>
                            <p>See where you can travel to right now and find the best deals across thousands of flights, hotels and car options.</p></a>
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <a href="package.php">
                            <i class="fa fa-3x fas fa-hotel text-primary mb-4"></i>
                            <h5>Destination Reservation</h5>
                            <p>We make booking of hotels easier and convenient for you.Stay at luxury camps while on safari.</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <a href="team.php">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Well versed with history and heritage of our tours. Will lead you on inbound tours to places of interest.</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <a href="package.php">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event management</h5>
                            <p>Stay one step ahead with the latest travel updates, free hotel and car hire cancellation and covid-19 travel insurance.</p> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="main.php">
                                <img class="img-fluid" src="images\img2\IMG\masai-mara-national-reserve-750x450.jpg" alt="tours and travel in kenya">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">maasai mara</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="main.php">
                                <img class="img-fluid" src="images/img2/IMG/package-1.jpg" alt="best tours and travel in kenya">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">diani</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="main.php">
                                <img class="img-fluid" src="images/img2/IMG/naks.jpg" alt="kenya best tour operators">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">lake nakuru</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="main.php">
                        <img class="img-fluid position-absolute w-100 h-100" src="images/img2/IMG/bibhash-knapsnack-life-banerjee-2n3tcXLZjxg-unsplash.jpg" alt="african safari deals" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">amboseli</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\cbs pic 1.jpg" alt="africa best deals">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker text-primary me-2"></i>kenya</small>
                           <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>-->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0"></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Explore Kenya safari visiting the best wildlife areas of kenya. Discover the Elephants of Tarangire and Amboseli, the wildbeest, flamingos in Lake nakuru and the big cats of maasai mara,canyons in Marafa,Kenya.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="main.php" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="main.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\cbs pic 2.jpg" alt="africa safari cost">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker  text-primary me-2"></i>Tanzania</small>
                            <!--<small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>-->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0"></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>A memorable Tanzania wildlife safari experience from the unique tree-climbing lions of Lake Manyara National.Encounter the signature wildbeest migration safari from the Mara plains south towards the plains of Ngorongoro in Lake Nduta.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="main.php" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="main.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\cbs pic 3.jpg" alt="africa safari deals">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker text-primary me-2"></i>Kenya and Tanzania </small>
                           <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small>-->
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0"></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>A picturesque Kenya Tanzania wild adventure.Ol pajeta doubles up as the pristine calm sanctuary for the black  Rhino  species. Drive along the the fringes of the Aberdare ranges to the shores of Lake Naivasha.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="main.php" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="main.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->


   

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
                        <a href="main.php">
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Ultimate flexibility. You are in control, with options to satisfy any plan or budget.No hidden fees. No hidden charges. So you can relax before your trip even begins</p></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 70px; height: 70px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <a href="main.php">
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">We cater for all your airport transfers. Chakabay makes it easier for you to travel without worrying about your trip before it even begins.</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process END -->


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
                            <img class="img-fluid" src="images\img2\guides chakabay.png" alt="africa safari deals">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="" target="_blank" ><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure"target="blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Felix Kipruto</h5>
                            <small>Event Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guide 2.jpg" alt="african safari tours">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""target="_blank" ><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure"target="blank" ><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Julie Njoki</h5>
                            <small>Secretary</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guide 3.jpg" alt="tours and travel companies in Nairobi">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323"target="blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure" target="blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">James Maina</h5>
                            <small>Travel Guide</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images\img2\guide 4.jpg" alt="popular kenyan destinations">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323"target="blank" ><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/chakabay_african_adventure" target="blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">karanja Njirii</h5>
                            <small>Operator</small>
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
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/img2/IMG/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                    <p class="mb-0">"Overall the trip far surpassed my expectations. Everything from the travel guides, food and wildlife experiences were amazing and so enjoyable.
                        Have already recommended Chakabay to my family and friends. Thank you <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg>."</p>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/img2/IMG/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Janet Johnson</h5>
                    <p>New York, USA</p>
                    <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                    <p class="mt-2 mb-0">"First safari and it exceed my expectation! Loved the contrast between the terrains, wildlife and very impressed with conservation initiatives.
                        We could watch the animals while respecting the natural environment. Absolute magic!"</p>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/img2/IMG/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jack Morris</h5>
                    <p>Texas, USA</p>
                    <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                    <p class="mt-2 mb-0">"Overall it was a vey planned trip and we thoroughly enjoyed it.<br>
                      <h5 style="text-black"> Suggestions to help us improve Our Trips or Our Services:</h5> None, You are the Experts?"</p>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="images/img2/IMG/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Patrick Hugh</h5>
                    <p>Ontario, CA</p>
                    <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                    <p class="mt-2 mb-0">"It was a dream trip, superbly flawlessly executed. We couldn't be more thankful with the way James dealt with various changes in our schedules
                       through the pandemic, and always at hand to reply to queries. This trip was what it was because af all his attention to details
                       
                       We must mention Felix one of the guides, who was incredibly helpful on our last day in Nairobi, driving us around the city and waiting, while that we not hurry and instead 
                       enjoy his city"</p>
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
                        <a class="btn btn-outline-light btn-social" href=""target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                   <!--EMBEDDED MAP-->
      <div class="maper">
    <h4 class="text-white mb-3" >Map location</h4>
 <div class="row g-2 pt-2">   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8143228901863!2d36.82221131552283!3d-1.2853946359896369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d62d4fccdd%3A0xd51591efb95f601f!2sMama%20Ngina%20St%20Parking!5e0!3m2!1sen!2ske!4v1669186754525!5m2!1sen!2ske"
         width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
         </div>
</div>
         <!---END OF CONTACT MAP--> 
</div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221006_083901.jpg" alt="african safari tours">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_065543.jpg"alt="best african safari">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_071123.jpg" alt="east african safari">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_072713.jpg" alt="family african safari">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_074343.jpg" alt="tours and travel in kenya">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221005_074738.jpg" alt="kenya best tour operators">
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
                        &copy; <a class="border-bottom" href="#">Chakabay Adventures</a>, All Right Reserved.


                        <a class="border-bottom" href="#"></a>
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
    <a href="#Top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->


    <script  src="js/modernizr-latest.js" type="text/javascript"></script>
    <script src="https:/code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.isotope.min.js"type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <!--<script src="js/jquery.nav.js" type="text/javascript"></script>-->
    <!--<script src="js/jquery.cslider.js" type="text/javascript"></script>-->
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="contact/contact_me.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!--w3school hotel icon-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>

</body>

</html>

<?php
session_start();
error_reporting(0);
include('includes/config.php');   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chakabay Adventures</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="east african safari best tours and travel" name="keywords">
    <meta content="Best tours and travel in kenya" name="description">

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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Transnational house door4, Mama Ngina street</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+254 727 257 524</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>chakabayagency@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!--<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>--->
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/Chakabay-African-adventure-106086342245323"><i class="fab fa-facebook-f fw-normal"></i></a>
                   <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>-->
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/chakabay_african_adventure"><i class="fab fa-instagram fw-normal"></i></a>
                   <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    <div class="position-relative h-100"><!--add to other pages-->
                        <img class="img-fluid position-absolute w-100 h-100" src="images/img2/IMG/bg-hero.jpg" alt="safari best vacation" style="object-fit: cover;">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <!--<h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>CHAKABAY AGENCY</h1>-->
                 <img src="images\img2\IMG\original logo.png" alt="Chakabay Adventures"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
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
                        <p class="fs-4 text-white mb-4 animated slideInDown">"Life's better with a backpack"</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <!--SEARCH ENGINE OFF-->
                            <!---<input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->

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
                            <img class="img-fluid" src="images\img2\cbs pic 1.jpg" alt="best african safari">
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
                            <p>Explore Kenya safari visiting the best wildlife areas of kenya. Discover the Elephants of Tarangire and Amboseli, the wildbeest, flamingos in Lake nakuru and the big cats of maasai mara, canyons in Marafa, Kenya.</p>
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
                            <img class="img-fluid" src="images\img2\cbs pic 2.jpg" alt="kenya best tour operators">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker  text-primary me-2"></i>Tanzania</small>
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
                            <p>A memorable Tanzania wildlife safari experience from the unique tree-climbing lions of Lake Manyara National. Encounter the signature wildbeest migration safari from the Mara plains south towards the plains of Ngorongoro in Lake Nduta.</p>
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
                            <img class="img-fluid" src="images\img2\cbs pic 3.jpg" alt="family friendly african safari">
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
    
    <!-- Package End -->

<section id="packages" class="secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Most Popular Packages</h2>
      <p>Book fascinating holiday packages to premier destinations in East Africa to enjoy your holidays and experience intriguing sceneries.</p>
    </div>
    <div class="">
      <h3>Package List</h3>
      <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
          ?>
          <div class="rom-btm">
            <div class="col-md room-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="african safari tours">
            </div>
            <div class="col-m room-midle wow fadeInUp animated" data-wow-delay=".5s">
              <h4>National park Name : <?php echo htmlentities($result->PackageName);?></h4>
              <h6>National park Type : <?php echo htmlentities($result->PackageType);?></h6>
              <p><b>National park Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
            <div class="col-0 room-right wow fadeInRight animated" data-wow-delay=".5s">
              <h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
              <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php 
        }
      } ?>
    </div>
    <div class="clearfix"></div>   
  </div>
    </section>
    </div>
<!--Quote-->
<!--get back to it-->
<!--Quote-->


<!--<section id="quote" class="bg-parlex"></section>
  <div class="parlex-back">
    <div class="container secPad text-center">
      <h2>"The World is a book, and those who do not travel read only a page."</h2>
      <h3>-Saint Augustine</h3>
    
    <div class="position-relative h-100">
<img class="img-fluid position-absolute w-100 h-100" src="images/banner-bg2.jpg" alt="" style="background-image: cover;">
    </div>-->
    <!--/.container-->
 <!-- </div>
  </section>
</div>-->
   


<!-- Package End -->


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
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221006_083901.jpg" alt="best african safari">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_065543.jpg"alt="africa safari vacation">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_071123.jpg" alt="african safari deals">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_072713.jpg" alt="family african safari">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221004_074343.jpg" alt="african safari cost">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="images/img2/IMG/IMG_20221005_074738.jpg" alt="tours and travel companies in nairobi">
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


                        Designed By <a class="border-bottom" href="#">pharium</a>
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
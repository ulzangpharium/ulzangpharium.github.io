<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Chakabay Adventures</title>
  <meta name="description" content="Traveller">
  <meta name="author" content="WebThemes">

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
  <!-- Owl Carousel Assets -->
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

 <?php include('includes/header.php'); ?>
 <!--/.header-->
 <div id="#top"></div>
 <section id="home">
  <div class="banner-container">
    <!--   <img src="images/banner-bg.jpg" alt="banner" />-->
    <div class="container banner-content">
      <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Travel Plans</h2>
          <p>Get your plans right away.. enjoy!!!</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Amazing Tours</h2>
          <p>Travel you remember for life long!!</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Best Travel Travel</h2>
          <p>Get best deals at our place</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"></div>
        </div> 
      </div>
    </div>
  </div>
</section>
<section id="introText">
  <div class="container">
    <div class="text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <h1>ChakaBay Tours and Travel offers  You a Great Holiday Package</h1>
      <p>Book fascinating affordable holiday packages to premier destinations in Kenya & international to enjoy your holidays and experience intriguing sceneries.</p>
    </div>
  </div>
</section>
<!--About-->
<div class="body">
<section id="aboutUs" class="secPad">
  <div class="container" style="background-color:#f0cfa8;">

    <div class="heading text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <!-- Heading -->
      <h2>About Us</h2>
     <!-- <p>--><!--add a  phrase--><!--Travel with the Best East African Tour Operators.We provide tailor-made and socially responsible safaris that imprint a beautiful experience.
                        Our promise  to you since YEAR hearty,quality and unique service that gives you value for money.</p>-->
    </div>
    <div class="row adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <div class="col-md-4">
        <img src="images/about.jpg" alt="" class="img-responsive img-thumbnail">
      </div>
      <di class="col-md-8">
        <p>Travel with the Best East African Tour Operators.We provide tailor-made and socially responsible safaris that imprint a beautiful experience.
           Our promise  to you since YEAR hearty,quality and unique service that gives you value for money.</p> 
        <p>We offer budget safaris,mid-range safaris and luxury safaris,Bird watching safaris ,beach vacations,city excursions,hotel bookings and airport transfers.
           Our responsive staff are highly trained and experienced to offer you the East-African Adventure.Book with us today. </p> 

</div>
    </div>
  </div>   
</section>


<!--Package-->
<section id="packages" class="secPad">
  <div class="container"style="background:#f0cfa8">
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
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
              <h4>National park Name: <?php echo htmlentities($result->PackageName);?></h4>
              <h6>National park Type : <?php echo htmlentities($result->PackageType);?></h6>
              <p><b>National park Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
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
<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container secPad text-center ">
      <h2>"The World is a book, and those who do not travel read only a page."
      </h2><h3>-Saint Augustine</h3>
    </div>
    <!--/.container-->
  </div>
 
</section>
  </div>

<!--portfolio added to gallery-->


<!--Contact -->
<section id="contactUs" class="page-section secPad"style="background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url(images/img2/IMG/booking.jpg);">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Let's Keep In Touch!</h2>
        <p>Thank you for visiting our Site. If you would like to get into contact with me, please fill out the form below.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <div class="col-sm-12 col-md-8">
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  validate>
          <h3 style="color:white;">Contact Form</h3>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" 
              placeholder="Full Name" id="name" required
              data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
            </div>
          </div> 	
          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" 
              id="email" required
              data-validation-required-message="Please enter your email" />
            </div>
          </div> 	

          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" 
              placeholder="Message" id="message" required
              data-validation-required-message="Please enter your message" minlength="5" 
              data-validation-minlength-message="Min 5 characters" 
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right"style="background-color:#9ED034;">Send</button><br />
        </form>
      </div> 

      <!-- signup -->
      <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>     
      <!-- //signin -->
      <div class="col-sm-12 col-md-4">
        <h4 style="color:white;">Address:</h4>
        <address style="color:white;">
          ChakaBay Tours and Travel Company<br>
          Mama Ngina Street<br>
          Transnational House, Kenya
          <br>
        </address>
        <h4 style="color:white ;">Phone:</h4>
        <address style="color:white;">
        +254 727 257 524<br>
        </address>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{ 
  header('location:index.php');
}
else{
  if(isset($_POST['submit5']))
  {
    $password=md5($_POST['password']);
    $newpassword=md5($_POST['newpassword']);
    $email=$_SESSION['login'];
    $sql ="SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() > 0)
    {
      $con="update tblusers set Password=:newpassword where EmailId=:email";
      $chngpwd1 = $dbh->prepare($con);
      $chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
      $chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
      $chngpwd1->execute();
      $msg="Your Password succesfully changed";
    }
    else {
      $error="Your current password is wrong";  
    }
  }

  ?>
  <!doctype html>
  <html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>chakabay Adventures</title>
    <meta name="description" content="Traveller">
    <meta name="author" content="WebThemez">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
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
    <script type="text/javascript">
      function valid()
      {
        if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
        {
          alert("New Password and Confirm Password Field do not match  !!");
          document.chngpwd.confirmpassword.focus();
          return false;
        }
        return true;
      }
    </script>
    <style>
      .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      }
      .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      }
    </style>
  </head>

  <body>
   
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
      <div class="banner-container" style="height: 300px;">
       <!-- <img src="images/banner-bg.jpg" alt="banner" /> -->
       <div class="container banner-content">
        <div id="da-slider" class="da-slider">
         <div>&nbsp;</div>
         <div class="">
          <h2>My Travel</h2>
          <p>Get your plans right away.. enjoy!!!</p>
          <div class="da-img"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Package-->
<section id="packages" class="secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Change Password</h2>
      <p></p>
    </div>
    <div class="privacy">
      <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h3>
        <form name="chngpwd" method="post" onSubmit="return valid();">
          <?php 
          if($error)
          {
            ?>
            <div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
            <?php 
          } else if($msg)
          {?>
            <div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div>
            <?php
          }?>
          <p style="width: 350px;">
            <b>Current Password</b>  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password" required="">
          </p> 

          <p style="width: 350px;">
            <b>New  Password</b>
            <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password" required="">
          </p>

          <p style="width: 350px;">
            <b>Confirm Password</b>
            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
          </p>

          <p style="width: 350px;">
            <button type="submit" name="submit5" class="btn-primary btn">Change</button>
          </p>
        </form>
      </div>
    </div>
  </div> 
</div>
</section>

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
<?php 
} ?>

 <header class="header">
 	<?php if($_SESSION['login'])
 	{?>
 		<div class="top-header">
 			<div class="container">
 				<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
 					<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
 					<li class="prnt"><a href="profile.php">My Profile</a></li>
 					<li class="prnt"><a href="change_password.php">Change Password</a></li>
 					<li class="prnt"><a href="tour_history.php">My Tour History</a></li>
 				</ul>
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
 					<li class="tol">Welcome :</li>        
 					<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
 					<li class="sigi"><a href="logout.php" >/ Logout</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
 		<?php 
 	} else 
 	{
 		?>
		<!--change color-->
 		<div class="top-header" style="background-color: #14141F;">
 			<div class="container">
 				<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
 					<!--font color not reflecting--><li class="hm" style="font-color:#719c1580;"><a href="admin/index.php"><i class="fa fa-home me-2"></i>Admin Login</a></li>
					<!-- <small class="me-3 text-light"><a href="admin/index.php"><i class="fa fa-home me-2"></i>Admin Login</small>-->
 				</ul>
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
 					<li class="tol">Toll Number : +254 727 257 524</li>        
 					<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
 					<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp; Sign In</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
 		<?php 
 	}?>
 	<div class="container">
 		<nav class="navbar navbar-inverse" role="navigation">
 			<div class="navbar-header adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
 				<!--<a href="#" class="navbar-brand scroll-top logo"><b>ChakaBay </b></a>-->
				<!--logo for details-->
				<a href="#" class="navbar-brand scroll-top logo"><img src="images\img2\IMG\original logo.png" alt="Chakabay Tours and Travel" style="width:200%; height:250%;"></a>
 				<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
 					<span class="sr-only">Toggle navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				
 			</div>
 			<!--/.navbar-header-->
 			<div id="main-nav" class="collapse navbar-collapse adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
 				<ul class="nav navbar-nav" id="mainNav">
 					<li ><a href="index.php" class="scroll-link">Home</a></li>
 					<li><a href="About.php" class="scroll-link">About Us</a></li>
 					<li><a href="destination.php" class="scroll-link">Packages</a></li>
 					<!--<li><a href="#portfolio" class="scroll-link">Gallery</a></li>
 					<li><a href="#contactUs" class="scroll-link">Contact Us</a></li>-->
 				</ul>
 			</div>
 			<!--/.navbar-collapse-->
 		</nav>
 		<!--/.navbar-->
 	</div>
 	<!--/.container-->
 </header>
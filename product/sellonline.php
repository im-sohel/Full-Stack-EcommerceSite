<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/cart.png" type="image/x-icon">
  <meta name="description" content="">
  <title>MyShoppingCart</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>


<body background='../help/im.jpg'>
<section id="ext_menu-8">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="../index.php" class="navbar-logo"><img src="assets/images/images1cwsmf1n-128x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="../index.php">MyShoppingCart</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
					  
					  <?php
					    if(isset($_SESSION['login']) && $_SESSION['login']!='')
						{
						?>
					  <li class="nav-item dropdown">
					     <a class="nav-link link dropdown-toggle" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
						   <span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(184, 49, 47);">
						   </span>
						     <?php
							   echo $_SESSION['login'];
							   ?>
						  </a>
						  <div class="dropdown-menu">
						    <a class="dropdown-item" href="../view/myaccount.php">
							  MY ACCOUNT
							</a>
							<a class="dropdown-item" href="../controller/logout.php">
							LOG OUT
							</a>
							</div>
							</li>
							<?php
							}else{
							?>
							
							<li class="nav-item dropdown">
					     <a class="nav-link link dropdown-toggle" href="#" data-toggle="dropdown-submenu" aria-expanded="false">
						   <span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(184, 49, 47);">
						   </span>
						     MY ACCOUNT
						  </a>
						  <div class="dropdown-menu">
						    <a class="dropdown-item" href="../view/register_client.php">
							  REGISTER
							</a>
							<a class="dropdown-item" href="../view/client_login.php">
							LOG IN
							</a>
							</div>
							</li>
							<?php
							}
							?>
							
							<li class="nav-item">
							<a class="nav-link link" href="../help/help.php">
							<span class="mbri-chat mbr-iconfont mbr-iconfont-btn" style="color: rgb(184, 49, 47);">
							</span>
							HELP
							</a>
							</li>
							<?php
							 if(isset($_SESSION['login']) && $_SESSION['login']!=''){
								 ?>
				<li class="nav-item dropdown">
			  <a class="nav-link link" href="../controller/myorders.php" aria-expanded="true">
			   <span  style="color: rgb(226, 80, 65);">
			   </span>
			   MY ORDERS
			 </a>
			 </li>
             <?php
							 }else{
							 ?>
							<li class="nav-item nav-btn">
							<a class="nav-link btn btn-white btn-white-outline" href="../view/register_client.php">
							REGISTER
							</a>
							</li>
							<li class="nav-item nav-btn">
							<a class="nav-link btn btn-white btn-white-outline" href="../view/client_login.php">
							LOG IN
							</a>
							</li>
							<?php
							}
							?>
							<li class="nav-item nav-btn">
							<a class="nav-link btn btn-danger" href="../controller/cart.php">
							MY CART
							</a>
							</li>
							</ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<br>

<section>
<br><br><br><br><br><br>
<h1 style="color:cyan" align="center">Become A Seller</h1>
<p><font face="verdana" color="white" size="5"> Hey There, Hope You Are Doing Well. Wanna Become A Seller In <i style="color:red">My</i><i style='color:cyan'>Shopping</i><i style="color:red">Cart</i> ?. Its Easy, Just Fill Up the below Form With Your Details And We Will
 Will Get Back To You Soon. Grow With Us.</font></p>
<br>
<p align='center'><font face='verdana'  size='5'><a href='../view/client_sell.php' style='color:red; text-decoration: underline'>CLICK HERE TO FILL APPLICATION</a></font></p>
 <br><br><br>

</section>

<section class="mbr-footer footer4 mbr-section mbr-section-md-padding" id="contacts4-c" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="mbr-contacts row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <p><font face="Montserrat, sans-serif" size="3"><span style="letter-spacing: -1px; line-height: 20px;"><strong style='color:white'>ADDRESS</strong></span></font><br>
BTM 2nd stage<br>Bangalore, 560068<br><br><br><font color="#7c7c7c" face="Montserrat, sans-serif" size="3"><span style="letter-spacing: -1px; line-height: 20px;"><strong style='color:white'>CONTACTS</strong></span></font><br>sohel islam mollick<br>Email: sohelislammollick@gmail.com<br>
Phone: +91 8697609789<br><br></p>
                    </div>
                    <div class="col-sm-6"><p class="mbr-contacts__text"><br></p><ul class="mbr-contacts__list">
					<li><b><a href='../admin/admin_login.html' style='color:white'>ADMIN PANEL</a></b></li>
					<li><b><a href='../admin/admin_login.html' style='color:white'>MAINTENANCE</a></b></li>
					<li><b><a href='../admin/developer.php' style='color:white'>DEVELOPERS</a></b></li>
					</ul>
					</div>
                </div>
            </div>
            <div class="col-sm-4" data-form-type="formoid">
                <div data-form-alert="true">
                    <div hidden="" data-form-alert-success="true">Thanks for filling out form!</div>
                </div>
                <form action="https://mobirise.com/" method="post" data-form-title="MESSAGE">
                    <input type="hidden" value="Z9/U4F7VfxAAyKGn6fO5kWCOyHk6AAAicbluu1x8s5Zjftst62pIaHwUR+PFt+7CLY3fKXEGqhoah4EdZaGJOkbelrN3UftVpA8S/dUrjPROk/fCt25L459d3natD+O/" data-form-email="true">
                    
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-c-email">Email<span class="form-asterisk">*</span></label>
                        <input type="email" class="form-control input-sm input-inverse" name="email" required="" data-form-field="Email" id="contacts4-c-email">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-control-label" for="contacts4-c-message">Message</label>
                        <textarea class="form-control input-sm input-inverse" name="message" data-form-field="Message" rows="4" id="contacts4-c-message"></textarea>
                    </div>
                    <div class="mbr-buttons mbr-buttons--right btn-inverse"><button type="submit" class="btn btn-sm btn-danger">SEND FEEDBACK</button></div>
                </form>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
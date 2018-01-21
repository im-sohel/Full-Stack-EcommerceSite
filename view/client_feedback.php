

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/cart.png" type="image/x-icon">
  <meta name="description" content="">
  <title>MyShoppingCart</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/mobirise/css/style.css">
  <link rel="stylesheet" href="../assets/dropdown-menu/style.css">
  <link rel="stylesheet" href="../assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css"> 
</head>

<body background="../help/im.jpg">
<section id="dropdown-menu-2btn-2">

    <nav class="navbar navbar-dropdown navbar-fixed-top">

        <div class="container">

            <div class="navbar-brand">
                <a href="../index.php" class="navbar-logo"><img src="../assets/images/images1cwsmf1n-128x128.png" alt="Mobirise"></a>
                <a class="text-white" href="../index.php">MyShoppingCart</a>
            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar">
			  <?php
			  if(isset($_SESSION['login']) && $_SESSION['login']!='')
			  {
				?>
				  
			  <li class="nav-item dropdown open">
			    <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">
				 <span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
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
			     LOGOUT
			     </a>
				 
			  </div>
			</li>
			<?php
			  }else{
			?>
			  <li class="nav-item dropdown open">
			    <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">
				 <span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
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
			  
			  
			  
			<li class="nav-item dropdown">
			  <a class="nav-link link" href="../help/help.php" aria-expanded="true">
			   <span class="mbri-help mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
			   </span>
			   HELP
			 </a>
			 </li>
			 
			<?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
				<li class="nav-item dropdown">
			  <a class="nav-link link" href="../controller/myorders.php" aria-expanded="true">
			   <span class="mbri-help mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
			   </span>
			   MY ORDERS
			 </a>
			 </li>
             <?php
			}else{
			?>
			<li class="nav-item nav-btn">
			<a class="nav-link btn btn-default-outline btn-default" href="../view/register_client.php">
			REGISTER
			</a>
			</li>
			
			<li class="nav-item nav-btn">
			<a class="nav-link btn btn-default-outline btn-default" href="../view/client_login.php">
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

        </div>

    </nav>

</section>
<br><br><br><br><br><br><br><br>
<article>
<div>
<p align="center"><font face="verdana" size="5" color="cyan">~GIVE YOUR FEEDBACK~</font></p>
<form action="../controller/feedback.php" method="POST" align="center">
 


<h3 style="color:black">Enter Your Email:</h3>
<input type="email" name="feedback_email" size="50"  required>
<br>
<br>
<h3 style="color:black">Enter Message here:</h3>
<textarea name="feedback_mssg" rows="6" cols="50"  required placeholder="enter your feedback here!">
</textarea>
<br>
<br>
<input type="submit" name="sub" value="SEND FEEDBACK" style="color: black">
<br>
<br>

</form>
</div>
</article>

<?php include_once "../menu/foot.txt"; ?>
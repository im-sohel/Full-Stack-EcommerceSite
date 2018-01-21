<?php 
include_once "head.txt";
include_once "nav.txt";	
?>
<div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
	      <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active"><img src="images/carosel header/home page/home-3.jpg" alt="First slide image" class="center-block" width="1920" height="500">
	        <div class="carousel-caption"> </div>
          </div>
	      <div class="item"><img src="images/carosel header/home page/home-1.jpg" alt="Second slide image" class="center-block" width="1920" height="500">
	        <div class="carousel-caption"> </div>
          </div>
	      <div class="item"><img src="images/carosel header/home page/home-2.jpg" alt="Third slide image" class="center-block" width="1920" height="500">
	        <div class="carousel-caption"> </div>
          </div>
        </div>
      <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
	  </div>
    <article>
      <h3 align="center" style="color:blue">Super Offers</h3>
     
      <p align="center" style="color:red">Buy now</p>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail"><img src="images/products/mobiles/1016-g-skmei-original-imae63qzz9a7xspj.jpeg" alt="bags"  height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">Timex Watch</h3>
            <p align="center"><del>Rs. 1580</del> Rs. 540</p>
            <p align="center">
            <?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
            <a href="view/add_to_cart.php?pid=1&pname=timex+watch++++++++++++++&manu=Timex+Ltd&price=540&catid=7&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
     <?php
			}else{
				?>
                <a href="view/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
                </p>
</div>
  </div>
   </div>
        
        
        <div class="col-md-4">
          <div class="thumbnail"><img src="images/products/mobiles/letv-le-1s-na-original-imaefde9zkzczbtz.jpeg" alt="air conditionar" height="200">
            <div class="caption" height="350px"> 
            <h3 align="center">Samsung Galaxy A1</h3>
            <p align="center"><del>Rs. 18000</del> Rs. 13500</p>
             <p align="center">
			 <?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			 <a href="view/add_to_cart.php?pid=2&pname=Galaxy+A1++++++++++++++++&manu=SAMSUNG+LTD&price=13500&catid=1&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p>
			 <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="view/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
      </p>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="images/products/footwares/Lee cooper---.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">Lee Cooper Kito</h3>
             <p align="center"><del>Rs. 780</del> Rs. 540</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="view/add_to_cart.php?pid=3&pname=Lee+Cooper+kito++++++++++&manu=Lee+Cooper+Ltd&price=540&catid=2&subcatid=3&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="view/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="images/products/bags/adven backpack.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">Adven Backpack</h3>
             <p align="center"><del>Rs.1990</del> Rs. 899</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="view/add_to_cart.php?pid=4&pname=Adven+Backpack++++++++++&manu=Adven+Pvt.+Ltd&price=899&catid=7&subcatid=2&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="view/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="images/products/shirts/puma casual tshirt.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">Puma Casual T-shirt</h3>
             <p align="center"><del>Rs. 3500</del> Rs. 1800</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="view/add_to_cart.php?pid=5&pname=Puma+Casual+T-shirt++++++&manu=Puma+Pvt.+Ltd&price=1800&catid=2&subcatid=2&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="view/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <div class="thumbnail" height="200px"><img src="images/products/womens/Drapes-Green-Cotton-Unstitched-Dress.jpg" alt="mobile" height="200">
            <div class="caption" height="350px">
             <h3 align="center">Drapes Green Cotton Dress</h3>
             <p align="center"><del>Rs. 5600</del> Rs. 3766</p>
            <p align="center">
			<?php if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
			<a href="view/add_to_cart.php?pid=6&pname=Drapes+Green+Cotton+Dress&manu=Drapes+Pvt.+Ltd&price=3766&catid=3&subcatid=1&qty=1" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </p>
            <?php
			 ?>
             <?php
			 
			}else{
				?>
                <a href="view/client_login.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                <?php
			}
			?>
			</div>
          </div>
        </div>
        
        
        
      </div>
	    </article>
		
<?php 
include_once "foot.txt";
?>
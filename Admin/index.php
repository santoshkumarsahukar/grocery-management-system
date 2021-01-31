<?php
session_start();
if(isset($_SESSION['email']))
{
    ?>

<?php
include "header.php";
?>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
          	<div class="text w-100 text-center">

			     Let us make it a little easier.
	            <h1 class="mb-4">Life is <span>hard enough already</span> Let us make it a<span> little easier.</span>.</h1>
	            <!-- <p><a href="product.php" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="about.php" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-support"></span>
    					</div>
    					<div class="text">
    						<h2>Online Support 24/7</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-cashback"></span>
    					</div>
    					<div class="text">
    						<h2>Money Back Guarantee</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100 ftco-animate">
    					<div class="icon">
    						<span class="flaticon-free-delivery"></span>
    					</div>
    					<div class="text">
    						<h2>Free Shipping &amp; Return</h2>
    						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(images/kind-1.jpg);"></div>
							<h3>Brandy</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(images/kind-2.jpg);"></div>
							<h3>Gin</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(images/kind-3.jpg);"></div>
							<h3>Rum</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(images/kind-4.jpg);"></div>
							<h3>Tequila</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(images/kind-5.jpg);"></div>
							<h3>Vodka</h3>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(images/kind-6.jpg);"></div>
							<h3>Whiskey</h3>
						</div>
					</div>

				</div>
			</div>
		</section>



		
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
		</div>

        <div class="row d-flex">
		<?php
$connection=mysqli_connect('localhost','root','','grocery');
$sql="SELECT * FROM blog;";
$result=mysqli_query($connection,$sql);
//$resultcheck=mysqli_num_rows($result);

//SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
if($result->num_rows>0)
{
	
    while($row=mysqli_fetch_assoc($result))
    {
     
?>
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">

          	<div class="blog-entry d-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('images1/<?php echo $row['image'];?>');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> <?php echo $row['date'];?></p>
              	</div>
                <h3 class="heading mb-3"><a href="#"><?php echo $row['title'];?></a></h3>
                <p><?php echo $row['description'];?></p>
                

              </div>
            </div>
		  </div>
		  <?php
    }
    }
    else
    {

        echo "<br>";
    }
    ?>




        </div>
	  </div>
	</section>	
	
  <?php
  include "footer.php";
  ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php
}
else
{
    header('Location:../Login/admin.php');
}
?>
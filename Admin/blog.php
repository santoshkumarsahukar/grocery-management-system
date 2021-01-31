<?php
session_start();
if(isset($_SESSION['email']))
{
    ?>


<?php
include "header.php";
?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread"></h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form action="blogdetails.php" class="billing-form" method="POST" enctype="multipart/form-data">
							<h3 class="mb-4 billing-heading">ADD BLOG</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Blog title</label>
	                  <input type="text" class="form-control" name="title" placeholder="">
	                </div>
	              </div>
	              
                <div class="w-100"></div>
		           
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="Description"> Blog Description</label>
	                  <input type="text" class="form-control" name="description">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
						<label for="img">Select image:</label>
                       <input type="file" class="btn btn-primary py-3 px-4"  name="image" >
	                </div>
		            </div>
		            <div class="w-100">
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Date of post</label>
	                  <input type="date" class="form-control" name="date" placeholder="">
					  </div>
		            </div>
					</div>
					  <div class="w-100">
		            <div class="col-md-6">
		            	<div class="form-group">
					  <p><button class="btn btn-primary py-3 px-4" name="submit">ADD</button></p>
	                </div>
		            </div>
					</div>
					</form>
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
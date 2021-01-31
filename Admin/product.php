
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread"></h2>
          </div>
        </div>
      </div>
    </section>
	<!--Modified Part -->


	<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form action="addproduct.php" class="billing-form" method="POST" enctype="multipart/form-data">
							<h3 class="mb-4 billing-heading">NEW PRODUCT</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="name">Product Name</label>
	                  <input type="text" class="form-control" name="name" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="price">Product Price</label>
	                  <input type="text" class="form-control" name="price" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Product Type</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="type" id="" class="form-control">
						  <option value="">Select</option>
		                  	<option value="VEGETABLES">VEGETABLES</option>
		                    <option value="FRUITS">FRUITS</option>
							<option value="LIQUOR">LIQUOR</option>
							<option value="PROVISION">PROVISION</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		 
		           
					<div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Sale Type</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="sale" id="" class="form-control">
						  <option value="">Select</option>
		                  	<option value="SALE">SALE</option>
		                    <option value="NEW ARRIVAL">NEW ARRIVAL</option>
							<option value="BEST">BEST</option>
							<option value="ON DEMAND">ON DEMAND</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
						<label for="img">Select image:</label>
                       <input type="file" class="btn btn-primary py-3 px-4"  name="image" >
	                </div>
		            </div>
		           
		           
					
					  <br>
					  <br>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
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
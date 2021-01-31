
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span> PROFILE <i class="fa fa-chevron-right"></i></span></p>
            
          </div>
        </div>
      </div>
    </section>
    <?php
    $connection=mysqli_connect("localhost","root","","grocery");
      
            $sql="SELECT * FROM admin WHERE id='1'";
            $result=mysqli_query($connection,$sql);
            if($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

    <section class="ftco-section bg-light">
			
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">PROFILE UPDATE</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
	                  <input type="text" class="form-control" value="<?php echo $row['name'];?>" id="name" disabled>
	                </div>
	              </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Email Address</label>
	                  <input type="email" class="form-control" value="<?php echo $row['email'];?>" id="email" disabled>
	                </div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" value="<?php echo $row['phone'];?>" id="phone" disabled>
	                </div>
	              </div>
				  <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
                  <p><a href="#"class="btn btn-primary py-3 px-4" onclick="enable()" id="edit" enable>EDIT</a>
					<a href="#"class="btn btn-primary py-3 px-4" id="update" hidden>Update</a></p>
	                </div>
	              </div>
				  <script>
            function enable()
            {
              document.getElementById("name").disabled=false;
              document.getElementById("email").disabled=false;
              document.getElementById("phone").disabled=false;
              document.getElementById("edit").hidden=true;
              document.getElementById("update").hidden=false;
            }
            </script>
            </form><!-- END -->
            <?php
            }
            }
            ?>
          </div> <!-- .col-md-8 -->
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
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
            <h2 class="mb-0 bread">Blog</h2>
          </div>
        </div>
      </div>
    </section>

   


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	
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
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('../Admin/images1/<?php echo $row['image'];?>');">
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
    header('Location:../Login/index.php');
}
?>
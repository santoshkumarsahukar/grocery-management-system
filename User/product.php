
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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>






    <section id="fruits" class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">

						<?php
$connection=mysqli_connect('localhost','root','','grocery');
$sql="SELECT * FROM product WHERE p_type='FRUITS';";
$result=mysqli_query($connection,$sql);

if($result->num_rows>0)
{
	
    while($row=mysqli_fetch_assoc($result))
    {
     
?>
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../Admin/productimage/<?php echo $row['p_img'];?>);">
										<div class="desc">
											<p class="meta-prod d-flex">
												<a href='cartdetails.php?Id=<?php echo $row['Id'];?>' class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									<div class="text text-center">
										<span class="sale">Sale</span>
										<span class="category"><?php echo $row['p_type'];?></span>
										<h2> <?php echo $row['p_name'];?></h2>
										<p class="mb-0"><span class="price price-sale"><?php echo $row['p_price']+600;?></span> <span class="price"><?php echo $row['p_price'];?></span></p>
									</div>
								</div>
							</div>

							<?php
    }
    }
    else
    {

        echo " <h2>WE WILL ADD PRODUCTS SOON</h2>";
    }
    ?>			
						</div>
	
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Product Types</h3>
                <ul class="p-0">
                	<li><a href="#veg">Vegetables  <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#fruits">Fruits  <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#ps">Provision Store <span class="fa fa-chevron-right"></span></a></li>
	               

                </ul>
              </div>
            </div>
          </div>
          
				</div>
			</div>
		</section>


















    <section id="veg" class="ftco-section">
			<div  class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">

						<?php
$connection=mysqli_connect('localhost','root','','grocery');
$sql="SELECT * FROM product WHERE p_type='VEGETABLES';";
$result=mysqli_query($connection,$sql);

if($result->num_rows>0)
{
	
    while($row=mysqli_fetch_assoc($result))
    {
     
?>
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../Admin/productimage/<?php echo $row['p_img'];?>);">
										<div class="desc">
											<p class="meta-prod d-flex">
												<a href="cartdetails.php?Id=<?php echo $row['Id'];?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									<div class="text text-center">
										<span class="sale">Sale</span>
										<span class="category"><?php echo $row['p_type'];?></span>
										<h2> <?php echo $row['p_name'];?></h2>
										<p class="mb-0"><span class="price price-sale"><?php echo $row['p_price']+600;?></span> <span class="price"><?php echo $row['p_price'];?></span></p>
									</div>
								</div>
							</div>

							<?php
    }
    }
    else
    {

        echo " <h2>WE WILL ADD PRODUCTS SOON</h2>";
    }
    ?>			
						</div>
	
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Product Types</h3>
                <ul class="p-0">
                	<li><a href="#veg">Vegetables  <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#fruits">Fruits  <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#ps">Provision Store <span class="fa fa-chevron-right"></span></a></li>
	               

                </ul>
              </div>
            </div>
          </div>
          
				</div>
			</div>
		</section>




















    <section id="ps" class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">

						<?php
$connection=mysqli_connect('localhost','root','','grocery');
$sql="SELECT * FROM product WHERE p_type='PROVISION';";
$result=mysqli_query($connection,$sql);

if($result->num_rows>0)
{
	
    while($row=mysqli_fetch_assoc($result))
    {
     
?>
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../Admin/productimage/<?php echo $row['p_img'];?>);">
										<div class="desc">
											<p class="meta-prod d-flex">
												<a href="cartdetails.php?Id=<?php echo $row['Id'];?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
												<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>
									<div class="text text-center">
										<span class="sale">Sale</span>
										<span class="category"><?php echo $row['p_type'];?></span>
										<h2> <?php echo $row['p_name'];?></h2>
										<p class="mb-0"><span class="price price-sale"><?php echo $row['p_price']+600;?></span> <span class="price"><?php echo $row['p_price'];?></span></p>
									</div>
								</div>
							</div>

							<?php
    }
    }
    else
    {

        echo " <h2>WE WILL ADD PRODUCTS SOON</h2>";
    }
    ?>			
						</div>
	
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Product Types</h3>
                <ul class="p-0">
                	<li><a href="#veg">Vegetables  <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#fruits">Fruits  <span class="fa fa-chevron-right"></span></a></li>
	                <li><a href="#ps">Provision Store <span class="fa fa-chevron-right"></span></a></li>
	               

                </ul>
              </div>
            </div>
          </div>
          
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
    header('Location:../Login/index.php');
}
?>
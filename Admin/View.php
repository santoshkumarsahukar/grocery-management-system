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
            <!-- <h2 class="mb-0 bread">Produc</h2> -->
          </div>
        </div>
      </div>
    </section>
<br>
<br>

<?php
$connection=mysqli_connect('localhost','root','','grocery');
$sql="SELECT * FROM product;";
$result=mysqli_query($connection,$sql);
//$resultcheck=mysqli_num_rows($result);

//SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
if($result->num_rows>0)
{
?>
<div class="container">
  <h1>PRODUCT LIST</h1>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Product ID&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div class="col col-2">PRODUCT NAME</div>
      <div class="col col-3">PRODUCT TYPE</div>
      <div class="col col-4">PRODUCT PRICE</div>
      <div class="col col-5"> </div>
     
    </li>
    <?php
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
    <li class="table-row">
      <div class="col col-1" data-label=" Id"><?php echo $row['Id'];?></div>
      <div class="col col-2" data-label="product Name"><?php echo $row['p_name'];?></div>
      <div class="col col-3" data-label="type"><?php echo $row['p_type'];?></div>
      <div class="col col-4" data-label="Price"><?php echo $row['p_price'];?></div>
      <div class="col col-5" data-label="button"><?php echo "<a href=delete.php?id=".$row['Id']."><button class='btn btn-primary py-3 px-4' >DELETE</button></a>"?></div>
     
    </li>
    <?php
    }
    }
    else
    {

        echo "<h1><center>No Data Found!!!!!!</center></h1>";
    }
    ?>
 
  </ul>
</div>


   
  



<style>
  body {
  font-family: 'black', sans-serif;
}

.container {
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h1 {
  font-size: 36px;
  margin: 20px 0;
  text-align: center;
}
h2 small {
  font-size: 0.5em;
}

.responsive-table li {
  border-radius: 3px;
  padding: 25px 30px;
  display: flex;
  justify-content: space-between;
  margin-bottom: 25px;
}
.responsive-table .table-header {
  background-color:cadetblue;
  font-size: 14px;

  text-transform: uppercase;
  letter-spacing: 0.03em;
}
.responsive-table .table-row {
  background-color: #ffffff;
  box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}
.responsive-table .col-1 {
  flex-basis: 10%;
}
.responsive-table .col-2 {
  flex-basis: 40%;
}
.responsive-table .col-3 {
  flex-basis: 25%;
}
.responsive-table .col-4 {
  flex-basis: 25%;
}
.responsive-table .col-5 {
  flex-basis: 25%;
}
@media all and (max-width: 767px) {
  .responsive-table .table-header {
    display: none;
  }
  .responsive-table li {
    display: block;
  }
  .responsive-table .col {
    flex-basis: 100%;
  }
  .responsive-table .col {
    display: flex;
    padding: 10px 0;
  }
  .responsive-table .col:before {
    color:black;
    padding-right: 10px;
    content: attr(data-label);
    flex-basis: 50%;
    text-align: right;
  }
}

</style>








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
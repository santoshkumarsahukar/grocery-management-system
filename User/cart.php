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
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">My Cart</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	
						    	<th>Product</th>
						      <th>Price</th>
						      <th>Quantity</th>
						      <th>total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
$connection=mysqli_connect('localhost','root','','grocery');
$sessionvar=$_SESSION['email'];
$sql="select p_img,p_price,p_name,c.Id from product p join cart c on p.Id=c.p_id join user_details u on u.Id=c.u_id where c.u_id in (SELECT Id FROM user_details WHERE Email='$sessionvar')";
$result=mysqli_query($connection,$sql);

// print_r($sessionvar);
// exit(0);

if($result->num_rows>0)
{
	$i = 1;
    while($row=mysqli_fetch_assoc($result))
    {
?>
						    <tr class="alert" role="alert">

		
						    	<td>
						    		<div class="img" style="background-image: url(../Admin/productimage/<?php echo $row['p_img'];?>);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span><?php echo $row['p_name'];?></span>
						      		
						      	</div>
						      </td>
						      <td id="actualPrice<?php echo $i;?>"><?php echo $row['p_price'];?></td>
						      <td class="quantity">
					        	<div class="input-group">
									
								 <input type="number" name="quantity" class="quantity form-control input-number" value="1" min="1" max="5" id="quantity<?php echo $i;?>" onchange="updatePrice(<?php echo $i;?>)">
								
				          	</div>
				          </td>
						 
				          <td id="total<?php echo $i;?>"><?php echo $row['p_price'];?></td>
						      <td>
							  <?php echo "<a href=cartdelete.php?id=".$row['Id']."><button class='btn btn-primary py-3 px-4' >
							  DELETE</button></a>"?>
				        	</td>
							</tr>
							<script>
							function updatePrice(i)
							{
								var quantity = document.getElementById('quantity'+i).value;
								var actualPrice = document.getElementById('actualPrice'+i).innerHTML;
								//alert(actualPrice);
								var total = document.querySelector('#total'+i);
								total.innerHTML = quantity * actualPrice;

								updateGrandTotal();
							}
							</script>
							<?php
	$i++;
	}
    }
    else
    {

        echo " <h2></h2>";
    }
    ?>	

						


						  

						  
						  </tbody>
						</table>
					</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
							&#8377;<span id="subTotal">0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>&#8377;40.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
							&#8377;	<span id="discount">0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						&#8377;<span id="grandTotal"> 0.00</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>

			<script>
			function updateGrandTotal()
			{
				var i = <?php echo $i-1;?>;
				// alert(i);
				var total = 0;
				for(var j =1; j <=i; j++)
				{
					var total = total + parseInt(document.getElementById('total'+j).innerHTML);
				}
				// alert(total);
				document.getElementById('subTotal').innerHTML = total;
				document.getElementById('discount').innerHTML = total * 0.1;
				document.getElementById('grandTotal').innerHTML = total + 40 -(total * 0.1);

			}
			</script>
    	</div>
    </section>

	<?php
 include "footer.php";
 ?>
    
  <script>
	(setTimeout(updateGrandTotal,5));
  </script>
    
  

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
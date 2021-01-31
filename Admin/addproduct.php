<?php
if (isset($_POST['submit'])) {

$name=$_POST['name'];
$type=$_POST['type'];
$price=$_POST['price'];

$sale=$_POST['sale'];
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
$target = "productimage/" . $image;
move_uploaded_file($temp, $target);


if($name!='' && $sale!=''  && $image!='' && $price!=''  && $type!='' ) {
   
                    $connection = mysqli_connect("localhost", "root", "", "grocery");
                    $query =   "INSERT INTO `product`( `p_name`, `p_type`, `p_price`, `p_img`, `title`) 
                    VALUES ('$name','$type','$price','$image','$sale');";
                    $result = mysqli_query($connection, $query);
                    
                    if ($result) {
                    
                            echo "
                            <script>
                            alert(' SUCCESSFUL');
                            window.location.href='product.php';
                        </script>";
                      
                                
                        
                    } else {
                                    echo "
                            <script>
                            alert(' FAILED');
                            window.location.href='product.php';
                            </script>";
                    }
          
   
}

else
{
    echo "<script> alert('form is empty');
    window.location.href='product.php';
            </script>";
}
}


?>
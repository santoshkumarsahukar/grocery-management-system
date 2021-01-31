<?php
$pId=$_GET['Id'];
session_start();

$connection=mysqli_connect("localhost","root","","grocery");
$sessionvar=$_SESSION['email'];
//echo($sessionvar);
$sql="SELECT * FROM user_details WHERE Email='$sessionvar';";
$result=mysqli_query($connection,$sql);

if($result->num_rows>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
      $uid=$row['Id'];
    }
}

$query =   "INSERT INTO `cart`( `p_id`, `u_id`) VALUES ('$pId','$uid');";
$result = mysqli_query($connection, $query);

if ($result) {

        echo "
        <script>
        alert('PRODUCT ADDED SUCCESSFUL');
        window.location.href='product.php';
    </script>";
   
   
            
    
} else {
                echo "
        <script>
        alert('FAILED TRY AGAIN!!!!');
        window.location.href='product.php';
        </script>";
}
?>
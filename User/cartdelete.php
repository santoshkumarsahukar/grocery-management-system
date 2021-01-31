<?php

$connection=mysqli_connect("localhost","root","","grocery");
//echo "connected";
session_start();
$sessionvar=$_SESSION['email'];
$sql_e = "SELECT Id FROM `user_details` WHERE Email='$sessionvar' ";
$res_e = mysqli_query($connection, $sql_e);
if($res_e->num_rows>0) {
    while ($row = mysqli_fetch_assoc($res_e)) {
        $uid= $row['Id'];
    }
}
echo $uid;
$query="DELETE FROM `cart` WHERE `Id`='$_GET[id]' AND u_id=$uid ";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if ($result)
{
    echo "<script>alert('deleted successfully');
    window.location.href='cart.php';

</script>";
}


?>
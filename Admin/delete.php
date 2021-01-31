<?php

$connection=mysqli_connect("localhost","root","","grocery");
//echo "connected";

$query="DELETE FROM `product` WHERE `Id`='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if ($result)
{
    echo "<script>alert('deleted successfully');
window.location.href='index.php';
</script>";
}


?>
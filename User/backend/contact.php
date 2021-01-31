<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


if($name!='' && $email!='' && $subject!='' && $message!='') {
   
        $connection = mysqli_connect("localhost", "root", "", "grocery");
        /*if($con)
        {
            echo "connected";
        }*/
        $query =   "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message');";
        $result = mysqli_query($connection, $query);
         
        if ($result) {
           
            echo "
    <script>
    alert('WE will get by to you soon');
    window.location.href='../index.php';
          </script>";
          
            
        } else {
            echo "
    <script>
    alert('Try again');
    window.location.href='../index.php';
    </script>";
        }
   
}
else
{
    echo "<script> alert('form is empty');
             window.location.href='index.php';</script>";
}



?>
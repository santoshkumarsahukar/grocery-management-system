<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$state=$_POST['state'];
$street=$_POST['street'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$repeat_pass=$_POST['repeat_pass'];


if($fname!='' && $lname!='' && $state!='' && $street!='' && $city!='' && $zip!='' && $email!='' && $phone!='' && $pass!='' && $repeat_pass!='') {
    if ($pass == $repeat_pass) {
        $hashedpassword = hash('md5', $pass);
        $connection = mysqli_connect("localhost", "root", "", "grocery");
        /*if($con)
        {
            echo "connected";
        }*/

            $sql_e = "SELECT * FROM `user_details` WHERE Email='$email' ";
            $res_e = mysqli_query($connection, $sql_e);
        //print_r($res_e);
            if (!$res_e->num_rows > 0) {


                    $query =   "INSERT INTO `user_details`( `Fname`, `Lname`, `State`, `Street`, `City`, `postcode`, `Phone`, `Email`,`password`)
                    VALUES ('$fname','$lname','$state','$street','$city','$zip','$phone','$email','$hashedpassword');";
                    $result = mysqli_query($connection, $query);
                    
                    if ($result) {
                    
                            echo "
                            <script>
                            alert('REGISTRATION SUCCESSFUL');
                        </script>";
                        session_start();
                        $_SESSION['email'] = $email;
                        
                        echo "
                            <script>
                            window.location.href='../User/index.php';

                        </script>";
                                
                        
                    } else {
                                    echo "
                            <script>
                            alert('REGISTRATION FAILED');
                            window.location.href='index.php';
                            </script>";
                    }
            }else{
                echo "
                <script>
                alert(' YOUR ARE ALREADY USER PLEASE DO LOGIN.');
                window.location.href='login.php';
                </script>";
            }

    } else {
        echo "
    <script>
    alert('INCORRECT PASSWORD ');
	
    </script>";
    }
}

else
{
    echo "<script> alert('form is empty');
             window.location.href='index.php';</script>";
}



?>
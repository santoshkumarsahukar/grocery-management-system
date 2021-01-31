<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
$connection=mysqli_connect("localhost","root","","grocery");
if($email!="" && $pass!="") {
    $hashedpassword = hash("md5", $pass);
    $sql_e = "SELECT * FROM `user_details` WHERE Email='$email' AND  password='$hashedpassword' ";
    $res_e = mysqli_query($connection, $sql_e);
//print_r($res_e);
    if ($res_e->num_rows > 0) {
        echo "
		<script>
        alert('LOGIN SUCCESSFULLY');
 
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
		alert('YOU ARE NOT A MEMBER');
       
        </script>";
        echo "
		<script>
		window.location.href='index.php';
		</script>";
      

    }

}
else{
    echo "
		<script>
		alert('FORM IS EMPTY ');
		
		</script>";
}
?>
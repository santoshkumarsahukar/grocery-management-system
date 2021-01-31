<?php
if (isset($_POST['submit'])) {
$title=$_POST['title'];
$description=$_POST['description'];
$date=$_POST['date'];
$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
$target = "images1/" . $image;
move_uploaded_file($temp, $target);

if($title!='' && $description!='' && $date!='' && $image!=''  ) {
   
                    $connection = mysqli_connect("localhost", "root", "", "grocery");
                    $query =   "INSERT INTO `blog`(`title`, `description`, `image`, `date`) VALUES 
                    ('$title','$description','$image','$date');";
                    $result = mysqli_query($connection, $query);
                    
                    if ($result) {
                    
                            echo "
                            <script>
                            alert(' SUCCESSFUL');
                            window.location.href='blog.php';
                        </script>";
                      
                                
                        
                    } else {
                                    echo "
                            <script>
                            alert(' FAILED');
                            window.location.href='blog.php';
                            </script>";
                    }
          
   
}

else
{
    echo "<script> alert('form is empty');
    window.location.href='blog.php';
            </script>";
}
}


?>
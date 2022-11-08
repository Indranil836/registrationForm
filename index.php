<?php

//flag variable
$insert=false;


if(isset($_POST['name'])) {

//seting the server information
$server="localhost";
$password="";
$user="root";

//connect to the server
$connection=mysqli_connect($server,$user,$password);

//connection check
if(!$connection){
    die("connection faild".mysqli_connect_error());
}
else{
   // die("connect");
}

// geting in the variable
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$other=$_POST['desc'];
$phone=$_POST['phone'];
$email=$_POST['email'];


//query
$sql="INSERT INTO `trip`.`trip_info` (`name`, `gender`, `phone`, `email`, `age`, `other`, `dt`) VALUES ( '$name', '$gender', '$phone', '$email', '$age', '$other', current_timestamp());";

//query excuted or not
if($connection->query($sql)==true){
    $insert=true;
}
else {
    echo "error";
 }


 //close the connection
 $connection->close();

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="project.css">
</head>
<body style="background-image: url('img2.jpg');background-size: cover;width:100%;height: auto;">
    <div class="container">
    
            <h1>Welcome to Techno India University West Bengal</h1>
            <h3>enter your details and submit your details to confirm your participation</h3>
            
            <!-- if successful then show this result -->
            <?php
            
            if($insert==true){
            echo "<p>
            <br><b> thanks for submitting your form.We are happy to see you</b>
           </p>" ;


            }
            ?>
            <form action="index.php" method="post">
                <input type="text" name="name" placeholder="Enter Your Name"><br>
                <input type="text" name="age" placeholder="Enter your age"><br>
                <input type="text" name="gender" placeholder="Enter Your Gender"><br>
                <input type="text" name="phone" placeholder="Enter Your Phone"><br>
                <input type="email" name="email" placeholder="Enter your Email"><br>
                <textarea name="desc" name="other" rows="5" cols="5" placeholder="Enter Your description">
                    </textarea><br>
                <button>submit</button>
            </form>
    </div>

    <footer><b> 2022 @ made by Indranil Roy</b></footer>


    
    
</body>
</html>
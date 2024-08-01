<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./src/style.css"> -->
    <title>contact</title>
</head>
<body>

<section>
    <div>
        <h2>
            Hi,we will reply you shortly!
        </h2>

        <p>Thank you for reaching out to us.</p>
    </div>
</section>





<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edugalitech";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    echo "Error".$con->connect_error();
}else{
   echo "connected";
}


if(isset($_POST['submit'])){
    $fname = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $txt = $_POST['message'];

        $insert = "INSERT INTO potencial_client(firstname,lastname,email,phone_n0,message) VALUES('$fname','$lname','$email','$phone','$txt');";
        $result = mysqli_query($con,$insert);

        if($result){
            echo "<script>alert('inserted successfully')</script>";
        }else{
            echo "<script>alert('Not inserted successfully')</script>";
        }

$con->close();
}



?>
    
</body>
</html>
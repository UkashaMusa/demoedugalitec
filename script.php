<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./src/style.css"> -->
    <title>contact</title>
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(20, 20, 62); /* Background overlay */
    
}

.popup-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}
 .button-a{
    margin-top:25px;
    padding: 12px;
    margin-bottom: 5px;
    background-color: rgb(20, 20, 62);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
   font-size: 16px;

}
 .button-a:hover{
    background-color: pink;
    color: black;
}
 .button-a a:hover{
    color: black;
}
.button-a a{
    text-decoration: none;
    color: white;
}

.popup-card {
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    max-width: 90%;
}

.popup-card h2 {
    margin: 0 0 15px;
    color: #333;
}

.popup-card p {
    margin: 0;
    color: #666;
}

</style>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Pop-up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="popup-container">
        <div class="popup-card">
            <h2>Thank you for contacting Edugalitech!</h2>
            <p>We will get back to you soon.</p>
            <button class="button-a" type="submit" value="" name="goback"><a href="index.html">Go Back</a></button>
        </div>
    </div>
</body>
</html>

 



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edugalitech";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    echo "Error".$con->connect_error();
}else{
   echo "";
}



if(isset($_POST['submit'])){
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $txt = $_POST['message'];
    
        $insert = "INSERT INTO potencial_client(firstname,email,phone_n0,message) VALUES('$fname','$email','$phone','$txt');";
        $result = mysqli_query($con,$insert);

        if($result){
            echo "";
        }else{
            echo "";
        }

$con->close();
}

$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['number'];
$message =$_POST['message'];

$emailheader ="From:".$name ."<".$email.">\e\n";

$recipient = "umusa7677@gmail.com";

mail($recipient,$subject,$message,$emailheader);
 die("Error!");





?>
    
</body>
</html>

<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['uname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email=mysqli_real_escape_string($conn,$_POST['usermail']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);

    $select= " SELECT * FROM user_form WHERE email='$email' && password=' $pass' ";

    $result=mysqli_query($conn,  $select);

    if(mysqli_num_rows($result)>0){
        $error[]='user already exists';
    }else{
        if($pass != $cpass){
            $error[]='password not matched';
        }else{
            $insert="INSERT INTO user_form(uname,phone,email,password) VALUES(' $name','$phone','$email','$pass')";
            mysqli_query($conn,$insert);
            header('location:homepage.php');


        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>min-project</title>
    <LINK rel="stylesheet" href="style.css">
</head>
<body>
<div id="name" class="name">
        <form action="" method="post" action="" onsubmit="page2">

            <?php
            if(isset($error)){

                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };


            ?>
                <br><br>
                <input type="text" name="uname" class="uname" placeholder="Enter your username here"><br><br>
                <input type="phone" name="phone" class="phone" id="phone" placeholder="Enter phone number"><br><br>
                <input type="email"  name="usermail" class="email" id="email" placeholder="Enter Email Id" required><br><br>
                <input type="password" name="password" class="password" id="password" placeholder="Enter your password" required><br><br>
                <input type="password" name="cpassword" class="password" id="password" placeholder="Enter your password" required><br><br>
                <input type="submit" class="submit" id="submit"  name="submit"required><br><br>
                
                <p>Already have an account?<a href="register.php">Click here now</a></p>

           
        </form>
    </div>
</body>
</html>


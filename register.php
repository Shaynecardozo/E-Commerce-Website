<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['uname']);
    $pass=md5($_POST['password']);
   

    $select= " SELECT * FROM user_form WHERE uname=' $name ' && password=' $pass' ";

    $result=mysqli_query($conn,  $select);

    if(mysqli_num_rows($result)>0){
        $_SESSION['uname']=$name;
        $_SESSION['password']=$pass;
        header('location:homepage.php');
    }else{
        $error[]= 'incorrect username or password';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini project</title>
    <LINK rel="stylesheet" href="style.css">
</head>
<body>
<div id="name" class="name">
        <form action="" method="post" action="" onsubmit="page2.php">
            
        <?php
            if(isset($error)){

                foreach($error as $error){
                    echo '<span class="error-msg" id="error-msg">'.$error.'</span>';
                };
            };


            ?>

                <br><br>
                <input type="text"  name="uname" class="uname" placeholder="Enter your username here"><br><br>
                <input type="password" name="password"  class="password" id="password" placeholder="Enter your password" required><br><br>
                <input type="submit" class="submit" id="submit"  name="submit"required><br><br>
                <p>Don't have an account?<a href="index.php">Click here now</a></p>

                
           
        </form>
    </div>
</body>
</html>

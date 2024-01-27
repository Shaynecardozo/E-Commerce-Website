<?php
$name="localhost";
$user="root";
$pass="";
$db=`practice`;

$con=mysqli_connect($name,$user,$pass,$db);
if($con)
{
    echo "ok";
}
else{
    echo "not ok";
}
?>

<?php 
include 'exam.php';
$conn= new mysqli->connect('localhost','root','','exam');
if($con)
{
    echo "connection ok";
}
else{
    echo "connection not ok";
}
?>
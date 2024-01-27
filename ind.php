<?php
include 'co.php';
?>

<!doctype html>
<html>
    <body>
        <form method="post" action="">
            Enter your name:
            <input type="text" name="name"><br>
            Enter your age:
            <input type="number" name="age"><br>
            <button name="save_btn" value="button">button</button>
            <button name="update" value="button">update</button>
            <button name="delete" value="button">delete</button>
        </form>
        <?php
        if(isset($_POST['save_btn']))
        {
            $name=$_POST['name'];
            $age=$_POST['age'];
            $query="INSERT INTO `practice`.`register` (name,age) VALUES ('$name','$age')";
            $data=mysqli_query($con,$query);
            if($data)
            {
                echo "Inseted data";
            }
            else{
                echo "not inserted";
            }

        }
        if(isset($_POST['update']))
        {
            $name=$_POST['name'];
            $age=$_POST['age'];
            $query="UPDATE `practice`.`register` SET age='$age'  WHERE name='$name' ";
            $data=mysqli_query($con,$query);
            if($data)
            {
                echo "updated data";
            }
            else{
                echo "not inserted";
            }
        }

        if(isset($_POST['delete']))
        {
            $name=$_POST['name'];
            $age=$_POST['age'];
            $query="DELETE FROM `practice`.`register` WHERE name='$name' ";
            $data=mysqli_query($con,$query);
            if($data)
            {
                echo "deleted data";
            }
            else{
                echo "not inserted";
            }
        }


        
        
        
        
        ?>
    </body>
</html>
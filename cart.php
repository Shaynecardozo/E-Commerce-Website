<?php

include('includes/connect.php');
include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce website-cart details</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <LINK rel="stylesheet" href="style-homepage.css">
    <style>
        body{
            magin:0;
        }
        nav{
            margin:0;

        }
        ul.main{
            list-style-type:none;
            padding:5px;
            margin:0;
            background-color:#3A9BDC;
            text-align:center;

        }
        form.d-flex{
          list-style-type:none;
          padding:5px;
            margin:0;
            background-color:#3A9BDC;
            text-align:center;
        }
        li{
            display:inline;
            font-size:0.5cm;
            font-family:Arial;
            line-height:55px;
        }
        li a{
            text-decoration:none;
            color:black;
            padding:20px 40px;
        }
        li a:hover{
            background-color:;
            color:white;
        }
        .cart_img{
            width: 100px;
            height: 120px;
            object-fit: contain;
        }

    </style>
</head>
<body>
      <!-- bootstrap js link-->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav>
       <ul class="main">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="display_all.php">Product</a></li>
        <li><a href="cart.php">Cart
            <?php
                cart_items();
            ?>
        </a></li>
       </ul>
       
    </nav>
<!--calling cart function-->
        <?php
        cart();
        ?>
 <!-- second child-
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">welcome guest</a>
        </li><li class="nav-item">
            <a class="nav-link" href="#">login</a>
        </li>

    </ul>

 </nav>-->
 
  <!-- third child-->
        <div class="bg-light mb-5">
            <h3 class="text-center px-3 py-3"> YOUR CART ITEMS</h3>
            
        </div>

<!--fourth child table-->
    <div class="container">
        <div class="row">
            <form action="" method="post">
            <table class="table table-bordered text-center">
                
                <tbody>
                <?php
                 
                 $get_ip_add = getIPAddress();
                 $total_price=0;
                 $cart_query="Select * from `cart details` where Ip_address='$get_ip_add'";
                 $result=mysqli_query($con,$cart_query);
                 $result_count=mysqli_num_rows($result);
                 if($result_count>0)
                 {
                    echo "<thead>
                    <tr>
                       <th>PRODUCT</th>
                       <th></th>
                       <th>QUANTITY</th>
                       <th>TOTAL PRICE</th>
                       <th>REMOVE ITEM</th>
                       <th clospan='2'>UPDATE & REMOVE ITEMS</th> 
                    </tr>
                </thead>";
                 
                 while($row=mysqli_fetch_array($result)){
                   $product_id=$row['product_id'];
                   $select_products="Select * from `products` where product_id='$product_id'";
                   $result_products=mysqli_query($con,$select_products);
                   while($row_product_price=mysqli_fetch_array($result_products)){
                     $product_price=array($row_product_price['product_price']);
                     $price_table=$row_product_price['product_price'];
                     $product_title=$row_product_price['product_title'];
                     $product_image1=$row_product_price['product_image1'];
                     $product_values=array_sum($product_price);
                     $total_price+=$product_values;
               
                  
                ?>

                    <tr>
                        <td><?php echo $product_title?></td>
                        <td><img src="./images/<?php echo $product_image1?>" alt="ribbed" class="cart_img"></td>
                        <td><input type="text" name="qty"  class="form-input w-50"></td>
                        <?php 
                         $get_ip_add = getIPAddress();
                         if(isset($_POST['update_cart']))
                         {
                            $quantities=$_POST['qty'];
                            $update_cart="Update `cart details` set quantity= $quantities where Ip_address='$get_ip_add'";
                            $result_products_quantity=mysqli_query($con,$update_cart);
                            $total_price=$total_price* $quantities;
                         }
                        ?>
                        <td><?php echo $price_table?>/-</td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php  echo $product_id ?>"></td>
                        <td>
                            <!--<button class="bg-info px-3 py-2 border-0 mx-3">UPDATES</button>-->
                            <input type="submit" value="UPDATE"  class="bg-info px-3 py-2 border-0 mx-3" name="update_cart">
                            <!--<button class="bg-secondary px-3 py-2 border-0 text-light">REMOVE</button>-->
                            <input type="submit" value="  REMOVE "  class="bg-info px-3 py-2 border-0 mx-3" name="remove_cart"> 
                            
                        </td>
                    </tr>
                    <?php
                   }
                }
             }
             else{
                echo "<h2 class='text-center text-danger'> CART IS EMPTY!!</h2>";
             } ?>
                </tbody>
                <!--php code to display dynamic data-->
                
            </table>
            <!--subtotal--->
            <div class="d-flex mb-5">
                <?php
                $get_ip_add = getIPAddress();
                $total_price+=$product_values;
                $cart_query="Select * from `cart details` where Ip_address='$get_ip_add'";
                $result=mysqli_query($con,$cart_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0)
                {
                    
                echo"<h5 class='px-3'>SUBTOTAL: <strong>$total_price/-</strong></h5>
                <input type='submit' value=' CONTINUE SHOPPING '  class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>
                <a href=''><button class='bg-secondary px-3 py-2 border-0 text-light'>CHECKOUT</button></a>";
                }else{
                    echo"<input type='submit' value=' CONTINUE SHOPPING '  class='bg-info px-3 py-2 border-0 mx-3' name='continue_shopping'>";
                }
                if(isset($_POST['continue_shopping'])) 
                {
                    echo"<script>window.open('homepage.php','_self')</script>";
                }
                ?>
               
                
            </div>
        </div>
    </div>
</form>
<!--function to remove items-->
<?php
function remove_cart_item()
{
    global $con;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id)
        {
            echo $remove_id;
            $delete_query="Delete from `cart details` where product_id= $remove_id";
            $run_delete=mysqli_query($con,$delete_query);
            if($run_delete)
            {
                echo"<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}

echo $remove_item=remove_cart_item();

?>
       <!-- last child-->
       <!--include footer--->
        <?php include("./includes/footer.php")?>
</body>
</html>
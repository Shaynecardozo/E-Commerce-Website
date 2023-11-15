<?php

include('../includes/connect.php');

//searching products

function search_products(){
    global $con;
   if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
            $search_query="Select * from `products` where product_keywords like '%$search_data_value%' ";
            $result_query=mysqli_query($con,$search_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo "<div class='col-md mb-2'>
                <div class='card'>
                <img src='./admin-area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                <a href='#' class='btn btn-info'>Add to cart</a>
                <a href='#' class='btn btn-secondary'>View more</a>
                                
                </div>
                </div>
                </div>"
                
            }
        }
}


?>
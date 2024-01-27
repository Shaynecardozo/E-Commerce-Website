<?php

include('includes/connect.php');
include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body>
      <!-- bootstrap js link-->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav>
       <ul class="main">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="display_all.php">Product</a></li>
      <li><a href="cart.php">Cart(<?php
      cart_items();?>)</a></li>
        <li><a href="#">Total price:<?php
        total_cart_price();?>/-</a></li>
       </ul>
       <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" arial-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
       </form>
    </nav>
<!--calling cart function-->
       <?php 
       cart();
       ?>
 <!-- second child
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">welcome guest</a>
        </li><li class="nav-item">
            <a class="nav-link" href="#">login</a>
        </li>

    </ul>

 </nav>
 -->
  <!-- third child-->



    <div class="row px-1">
        <div class="col-md-10">
            <!-- products-->
           <div class="row">
            <!-- fetching products-->

             <?php
           getproducts();
           
            ?> 
     
 <!-- row end-->
  </div>
  <!-- col end-->
</div>
            
        <div class="col-md-2 bg-secondary p-0">
            <!-- brands to be displayed-->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                  <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>  
                </li>
                <?php
                  getbrands();
                
                ?>
                  
                </li>
            </ul>


             <!-- categories to be displayed-->
             <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                  <a href="#" class="nav-link text-light"><h4>Categories</h4></a>  
                  <?php
                  getcategory();
                ?>
                </li>
            </ul>
            
            
        </div>  
        <?php
                
                search_product();
                 get_unique_categories();
                 get_unique_brands();
                 //$ip = getIPAddress();  
                 //echo 'User Real IP Address - '.$ip;    

                ?>
                
    </div>

       <!-- last child-->
       <!--include footer--->
        <?php include("./includes/footer.php")?>
</body>
</html>
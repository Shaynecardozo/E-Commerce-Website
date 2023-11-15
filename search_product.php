<?php
include('includes/connect.php')
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
        <li><a href="">Home</a></li>
        <li><a href="">Product</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Cart</a></li>
        <li><a href="">Contact</a></li>
      
       </ul>
       <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" arial-label="Search" name="search_data">
        <!-- second child<button class="btn btn-outline-bright" type="submit">search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
       </form>
    </nav>

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



    <div class="row">
        <div class="col-md-10">
            <!-- products-->
           <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/d3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
           <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/d1.jpeg" cl ass="card-img-top"  style="width:100%; height:200px; object-fit:contain;" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
             <img src="./images/d2.jpeg" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
             <img src="./images/d2.jpeg" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
             <img src="./images/d2.jpeg" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>

  
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
             <img src="./images/d2.jpeg" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
             <img src="./images/d2.jpeg" class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
            </div>
            
           </div>
        </div>
        <div class="row px-1">
          <div class="col-md-10">
            <div class="row">
            <?php
            search_products();
            ?>
            </div>
          </div>
        </div>
        <div class="col-md-2 bg-secondary p-0">
            <!-- brands to be displayed-->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                  <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>  
                </li>
                <?php
                $select_brands="Select * from `brands`";
                $result_brands=mysqli_query($con, $select_brands);
                while($row_data=mysqli_fetch_assoc( $result_brands)){
                  $brand_title=$row_data['brand_title'];
                  $brand_id=$row_data['brand_id'];
                  echo "<li class='nav-item'>
                  <a href='homepage.php?brand=$brand_id' class'nav-link text-light'>  $brand_title</a>  
                </li>";

                }
                ?>
                  
                </li>
            </ul>


             <!-- categories to be displayed-->
             <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                  <a href="#" class="nav-link text-light"><h4>Categories</h4></a>  
                  <?php
                $select_category="Select * from `category`";
                $result_category=mysqli_query($con,$select_category);
                while($row_data=mysqli_fetch_assoc( $result_category)){
                  $category_title=$row_data['category_title'];
                  $category_id=$row_data['category_id'];
                  echo "<li class='nav-item'>
                  <a href='homepage.php?category=$category_id' class'nav-link text-light'>  $category_title</a>  
                </li>";

                }
                ?>
               

                </li>
            </ul>
            
            
        </div>   
    </div>

       <!-- last child-->
       <div class="bg-info p-3 text-center">
        <p>All rights reserved @- Designed by Shayne 2023</p>
        <?php
        
        
        
        
        ?>
</body>
</html>
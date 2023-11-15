<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admint</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



     <!-- font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style-homepage.css">
    <style>
        .logo{
    width:7%;
    height:7%;
}
.admin_image{
    width:100x;
    object-fit:contain;

}
    </style>
</head>
<body>
    
<div class="container-fluid p-0"> 
   <!-- first child--> 
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <img src="../images/logo.jpg" alt="" class="logo" style="width:7%; height:7%" >
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav ">
                <li class="nav-item">
                   <a href="" class="nav-link">Welcome guest</a>  
                </li>
            </ul>




    </nav>

    </div>
</nav>

<!--second child-->
<div class="bg-light">
    <h3 class="text-center p-2">Mangae Details</h3>

</div>

<!-- third child-->
<div  class="row" >
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center" >
       <div class="px-5">
            <a href="#"><img src="../ images/logo.jpg" alt="" class="admin_image"></a>
            <p class="text-light text-center">Admin</p>
        </div>
        <div class="button text-center">
            <button  class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button  class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button class="my-3"><a href="adminindex.php?insert_category" class="nav-link text-light bg-info my-1">Insert Catogories</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Catogories</a></button>
            <button class="my-3"><a href="adminindex.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View brands</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">logout</a></button>
        </div>

    </div>
</div>
</div>
<!-- forth child-->
<div class="container my-3">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_catogories.php');
    }
    if(isset($_GET['insert_brands'])){
        include('insert_brands.php');
    }

    
    
    
    
    ?>
</div>


<!-- bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
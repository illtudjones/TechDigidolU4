<?php
  include('./Includes/connect.php');
?>

<!DOCTYPE html>
<style>
<?php include 'style.css'; ?>
</style>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" Content="Ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Wefan E Commerce</title>
		<!-- boostrap CSS link -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<!-- font awesome link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
	<body style="background-color:lightgrey;">
		<!-- navbar -->
		<div class="container-fluid">
		<!-- first child -->
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hafan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cynhyrchion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cyfrifiadur</a></li>
            <li><a class="dropdown-item" href="#">Glinfwrdd</a></li>
            <li><a class="dropdown-item" href="#">Mac</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cyswllt</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Basged <i class="fa-solid fa-cart-shopping"><sup> 1</sup></i></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->

<nav class = "navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class = "navbar-nav me-auto">
    <li class = "nav-item">
      <a class="nav-link" href="#"> welcome guest</a>
    <li class = "nav-item">
      <a class="nav-link" href="./Admin/index.php"> Login</a>
    </li>
  <ul>
</nav>

<!-- third child -->

<div class="bg-light">
  <h2 class="text-center"> Siop Beth Bynnag</h3>
  <p class ="text-center">Gwethu beth Bynnag!</p>
</div>

<!-- fourth child -->

<div class="row">

 
  <div class="col-md-10">
    <!-- products -->
    <div class="row">

    <?php
      $select_query ="select * from `products` order by rand()";
      $result_query=mysqli_query($conn,$select_query);
      while($row = mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_keywords=$row['product_keywords'];
        $product_category=$row['product_category'];
        $product_brands=$row['product_brands'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];

        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
          <img src='../Admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='#' class='btn btn-primary'>Go somewhere</a>
            </div>
        </div>
      </div>";

      }


    ?>
  </div>
</div>


<!-- sidenav -->
  <div class="col-md-2 bg-secondary p-0" class="side_nav">
    <ul class="navbar-nav me-auto text-center">
      <!-- Brands -->
      <li class="nav-item bg-info">
      <a href="#" class="nav-link text-dark"><h4>Brands</h4></a>
      </li>

      <?php

        $select_brands = "select * from `brands` order by brand_title";
        $result_brands = mysqli_query($conn, $select_brands);

        while($row_data=mysqli_fetch_assoc($result_brands)){
          $brand_title=$row_data['brand_title'];
          $brand_id=$row_data['brand_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
          </li>";
        }
      ?>

      <!-- Categories -->
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-dark"><h4>Categories</h4></a>
      </li>
      
      <?php

        $select_categories = "select * from `categories` order by category_title";
        $result_categories = mysqli_query($conn, $select_categories);

        while($row_data=mysqli_fetch_assoc($result_categories)){
          $category_title=$row_data['category_title'];
          $category_id=$row_data['category_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
          </li>";
        }
        ?>

    </ul>
  </div>
 
 
<!-- last child-->
  <div class="bg-info p-3 text-center">
    <p>All Rights Reserved - Designed by I. Rh. I. Jones - 2023</p>
  </div>
</div>

</body>


<!-- boostrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
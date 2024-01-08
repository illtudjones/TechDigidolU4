<?php
  include('./Includes/connect.php');
  include('./functions/common_functions.php')
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
    <a class="navbar-brand" href="index.php">Jones Parts</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Hafan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="display_all.php">Cynhyrchion</a>
          <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cyfrifiadur</a></li>
            <li><a class="dropdown-item" href="#">Glinfwrdd</a></li>
            <li><a class="dropdown-item" href="#">Mac</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#">Cyswllt</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Basged <i class="fa-solid fa-cart-shopping"><sup> 1</sup></i></a>
        </li>
      </ul>
      <form class="d-flex" action="search_products.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
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
  <p class ="text-center">Gwerthu beth Bynnag!</p>
</div>

<!-- fourth child -->

<div class="row">

 
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <?php
      getproducts();
      get_unique_categories();
      get_unique_brand()
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
        getbrands()
      ?>

      <!-- Categories -->
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-dark"><h4>Categories</h4></a>
      </li>
      
      <?php
        getcategories()
      ?>

    </ul>
  </div>
 
 
<!-- last child-->
<!-- include footer -->
<?php 
    include('./Includes/footer.php')
?>
</div>

</div>
</body>


<!-- boostrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
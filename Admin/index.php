<!DOCTYPE html>
<style>
<?php include '../style.css'; ?>
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awesome link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- First Child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <img src="../Images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        
        <!-- Third Child -->
        <div class="row justify-content-center ">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center ">
                <div class="p-3 align-items-center">
                    <a href="#"><img src="../Images/psu.jpeg" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_products.php" class="nav-link text-dark bg-info my-1 mx-1">Insert Products</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">View Products</a></button>
                    <button class="my-3"><a href="index.php?insert_categories" class="nav-link text-dark bg-info my-1 mx-1">Insert Categories</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">View Categories</a></button>
                    <button class="my-3"><a href="index.php?insert_brands" class="nav-link text-dark bg-info my-1 mx-1">Insert Brands</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">View Brands</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">All Orders</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">All Payments</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">List Users</a></button>
                    <button class="my-3"><a href="" class="nav-link text-dark bg-info my-1 mx-1">Logout</a></button>
                    
                </div>
            </div>
        </div>

        <!-- fourth child -->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_categories'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            ?>
        </div>

          <!-- last child-->
        <div class="bg-info p-3 text-center footer">
            <p>All Rights Reserved - Designed by I. Rh. I. Jones - 2023</p>
        </div>

    </div>
    
    <!-- boostrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
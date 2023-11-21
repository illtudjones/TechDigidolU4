<?php

    include('../Includes/connect.php');

    //getting products
    function getproducts(){
        global $conn;

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

    }
    //get brands for sidebar
    function getbrands(){
        global $conn;

        $select_brands = "select * from `brands` order by brand_title";
        $result_brands = mysqli_query($conn, $select_brands);

        while($row_data=mysqli_fetch_assoc($result_brands)){
          $brand_title=$row_data['brand_title'];
          $brand_id=$row_data['brand_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
          </li>";
        }

    }
    //get categories for sidebar
    function getcategories(){
        global $conn;

        $select_categories = "select * from `categories` order by category_title";
        $result_categories = mysqli_query($conn, $select_categories);

        while($row_data=mysqli_fetch_assoc($result_categories)){
          $category_title=$row_data['category_title'];
          $category_id=$row_data['category_id'];
          echo "<li class='nav-item'>
          <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
          </li>";
        }

    }

?>
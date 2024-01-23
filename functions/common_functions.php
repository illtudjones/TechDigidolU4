<?php

    include('../Includes/connect.php');

    //getting products
    function getproducts(){
        global $conn;

        //condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_query ="select * from `products` order by rand() LIMIT 0,6";
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
                        <p class='card-text card-text-short'>$product_description</p>
                        <a href='index.php?add_to_basket=$product_id' class='btn btn-info'>Add to Basket</a>
                        <a href='product_details.php?product_id=$product_id'
                        class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>";
                }
            }
      }

    }

    //get all products

    function getallproducts(){

        global $conn;

        //condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_query ="select * from `products` order by asc()";
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
                        <a href='index.php?add_to_basket=$product_id' class='btn btn-info'>Add to Basket</a>
                        <a href='product_details.php?product_id=$product_id'
                        class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>";
                }
            }
      }


    }
    //get unique categories
    function get_unique_categories(){
        global $conn;

        //condition to check isset or not
        if(isset($_GET['category'])){
            $category_id=$_GET['category'];
                $select_query ="select * from `products` where category_id=$category_id";
                $result_query=mysqli_query($conn,$select_query);

                $result_query=mysqli_query($conn,$select_query);
                $num_of_rows=mysqli_num_rows($result_query);
                if($num_of_rows==0){
                    echo "<h2 class='text-center text-danger'> No stock for this category</h2>";
                }

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
                        <a href='index.php?add_to_basket=$product_id' class='btn btn-info'>Add to Basket</a>
                        <a href='product_details.php?product_id=$product_id'
                        class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>";
                }
            }
      }


      //get unique categories
    function get_unique_brand(){
        global $conn;

        //condition to check isset or not
        if(isset($_GET['brand'])){
            $brand_id=$_GET['brand'];
                $select_query ="select * from `products` where brand_id=$brand_id";
                $result_query=mysqli_query($conn,$select_query);

                $result_query=mysqli_query($conn,$select_query);
                $num_of_rows=mysqli_num_rows($result_query);
                if($num_of_rows==0){
                    echo "<h2 class='text-center text-danger'> No stock for this brand</h2>";
                }

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
                        <a href='index.php?add_to_basket=$product_id' class='btn btn-info'>Add to Basket</a>
                        <a href='product_details.php?product_id=$product_id'
                        class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>";
                }
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
          <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
          </li>";
        }

    }


    //search products

    function searchproduct(){
        global $conn;
            if(isset($_GET['search_data_product'])){
                $search_data_value=$_GET['search_data'];

                $search_query="Select * from `products` where product_title like '%$search_data_value%'";
                $result_query=mysqli_query($conn,$search_query);
                $num_of_rows=mysqli_num_rows($result_query);
                if($num_of_rows==0){
                    echo "<h2 class='text-center text-danger'>This Product does not exsist</h2>";
                }
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
                        <a href='index.php?add_to_basket=$product_id' class='btn btn-info'>Add to Basket</a>
                        <a href='product_details.php?product_id=$product_id'
                        class='btn btn-secondary'>View More</a>
                        </div>
                    </div>
                </div>";
                }
            }
        }

        //view details

        function viewdetails(){
            global $conn;
    
            //condition to check isset or not
            if(isset($_GET['product_id'])){
            if(!isset($_GET['category'])){
                if(!isset($_GET['brand'])){
                    $product_id=$_GET['product_id'];
                    $select_query ="select * from `products` where product_id=$product_id";
                    $result_query=mysqli_query($conn,$select_query);
                    while($row = mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_keywords=$row['product_keywords'];
                        $product_category=$row['product_category'];
                        $product_brands=$row['product_brands'];
                        $product_image1=$row['product_image1'];
                        $product_image2=$row['product_image2'];
                        $product_price=$row['product_price'];
    
                        echo "<div class='col-md-4'>
                        <div class='card'>
                            <img src='./Images/$product_image1' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <a href='index.php?add_to_basket=$product_id' class='btn btn-info'>Add to Basket</a>
                                <a href='index.php' class='btn btn-secondary'>Back to Products</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class='col-md-8'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <h4 class='text-center text-primary mb-5'>Related Products</h4>
                        </div>
                        <div class='col-md-6'>
                        <img src='./Images/$product_image2' class='card-img-top alt='$product_title'>
        
                        </div>
                    </div>
        
                </div>
                    
                    ";
                    }
                }
          }
        }
        }

        //cart function
        function basket(){
            if(isset($_GET['add_to_basket'])){
                global $conn;
                $basket_product_id=$_GET['add_to_basket'];
                $select_query="Select * from `basket_details` where product_id=$basket_product_id";
                $result_query=mysqli_query($conn, $select_query);
                $num_of_rows=mysqli_num_rows($result_query);
                if($num_of_rows>0){
                    echo "<script> alert('This item is already present in the basket') </script>";
                    echo "<script> window.open('index.php','_self')</script>";
                }else{
                    $insert_query="insert into `basket_details` (product_id, quantity) values ($basket_product_id, 0)";
                    $result_query=mysqli_query($conn, $insert_query);
                    echo "<script> alert('Item has been added to basket') </script>";
                    echo "<script> window.open('index.php','_self')</script>";
                }
            }
        }
?>
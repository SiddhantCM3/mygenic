<?php

session_start();

include('../connection/connect.php');
include("../admin/includes/header.php");

if(isset($_POST['submit'])){
    $Product_Name = $_POST['Product_Name'];
    $Product_Chemical = $_POST['Product_Chemical'];
    $Product_Form = $_POST['Product_Form'];
    $Company_Name = $_POST['Company_Name'];
    $Product_Storage = $_POST['Product_Storage'];
    $Product_Packing = $_POST['Product_Packing'];
    $Product_Category = $_POST['Product_Category'];
    $Category_Id = $_POST['category_id'];

    // Accessing Images
    $product_image=$_FILES['Product_Image']['name'];

    // Accessing Images tmp Name
    $tmp_image=$_FILES['Product_Image']['tmp_name'];

    // Checking Empty Condition
    if($Product_Name=='' or $Product_Chemical=='' or $Product_Form=='' or $Company_Name=='' or $Product_Storage=='' or $Product_Packing=='' or  $Product_Category=='' or $product_image==''){
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    }
    else{
        move_uploaded_file($tmp_image, "./product_images/$product_image");

        // Insert Query
        $insert_products = "insert into `productdetails` (Product_Name, Product_Image, Product_Chemical, Product_Form, Company_Name, Product_Storage, Product_Packing, category_name, category_id) values ('$Product_Name', '$product_image', '$Product_Chemical', '$Product_Form', '$Company_Name', '$Product_Storage', '$Product_Packing', '$Product_Category', $Category_Id)";

        $result_query=mysqli_query($con, $insert_products);

        if($result_query){
            echo "<script>alert('Product Added Succcessfully!')</script>";
            header('location:view_product.php');

        }
    }
}
?>


       <div class="container my-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="Product_Name" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Name" autocomplete="off">
                </div>  
                <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="Product_Image" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Select Product Image" autocomplete="off">
                </div> 
                <div class="form-group">
                    <label>Product Chemical</label>
                    <input type="text" class="form-control" name="Product_Chemical" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Chemical" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Product Form</label>
                    <input type="text" class="form-control" name="Product_Form" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Form" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="Company_Name" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Company Name" autocomplete="off">
                </div>
                <div class="form-group">
                <label>Product Storage</label>
                <input type="text" class="form-control" name="Product_Storage" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Storage" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Product Packing</label>
                    <input type="text" class="form-control" name="Product_Packing" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Packing" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Product Category</label>
                    <input type="text" class="form-control" name="Product_Category" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Category" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="cat_image" class="form-label">Parent ID</label>
                    <input type="number" class="form-control" id="category_id" name="category_id">
               </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
 </div>


 <?php include("../admin/includes/footer.php")?>
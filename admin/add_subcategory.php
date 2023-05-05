<?php
include('../connection/connect.php');
include("../admin/includes/header.php");

if(isset($_POST['submit'])){
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $product_name = $_POST['product_name'];


    $category_image=$_FILES['category_image']['name'];

    $tmp_image=$_FILES['category_image']['tmp_name'];

    // select data from database
    $select_query = "select * from `sub_category` where product_name = '$product_name'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('Category is already present')</script>";
    }
    else{
        move_uploaded_file($tmp_image, "./subcategory_images/$category_image");

    $insert_query = "insert into `sub_category` (category_id, category_name, product_name, category_image) values ($category_id,'$category_name','$product_name','$category_image')";
    $result = mysqli_query($con, $insert_query);
    if($result){
        echo "<script> alert('Category has been inserted successfully')</script>";
       // header('location:view_category.php');
    }
}
}
?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="cat_name" class="form-label">Category name</label>
        <input type="text" class="form-control" id="cat_name" name="category_name">
        </div>
        <div class="mb-3">
        <label for="cat_name" class="form-label">product Name</label>
        <input type="text" class="form-control" id="cat_name" name="product_name">
        </div>
        <div class="mb-3">
        <label for="cat_name" class="form-label">Category ID</label>
        <input type="text" class="form-control" id="cat_name" name="category_id">
        </div>
        <div class="mb-3">
        <label for="cat_image" class="form-label">Category Image</label>
        <input type="file" class="form-control" id="cat_image" name="category_image">
        </div>
        <div class="mb-3">
        <input type="submit" class="form-control  bg-danger" id="submit" name="submit" value="submit">
        </div>
    </form>
</div>



    <?php include("../admin/includes/footer.php");?>
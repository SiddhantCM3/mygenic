<?php
include('../connection/connect.php');
include("../admin/includes/header.php");

if(isset($_POST['submit'])){
    $category_title = $_POST['cat_name'];
    $category_id = $_POST['category_id'];


    $product_image=$_FILES['cat_image']['name'];

    $tmp_image=$_FILES['cat_image']['tmp_name'];

    // select data from database
    $select_query = "select * from `category` where category_name = '$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert('Category is already present')</script>";
    }
    else{
        move_uploaded_file($tmp_image, "./category_images/$product_image");

    $insert_query = "insert into `categories` (category_name, category_image, category_id) values ('$category_title','$product_image','$category_id')";
    $result = mysqli_query($con, $insert_query);
    if($result){
        echo "<script> alert('Category has been inserted successfully')</script>";
        header('location:view_category.php');
    }
}
}
?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="cat_name" class="form-label">Category name</label>
        <input type="text" class="form-control" id="cat_name" name="cat_name">
        </div>
        <div class="mb-3">
        <label for="cat_image" class="form-label">Category Image</label>
        <input type="file" class="form-control" id="cat_image" name="cat_image">
        </div>
        <div class="mb-3">
        <label for="cat_image" class="form-label">Category Id</label>
        <input type="number" class="form-control" id="category_id" name="category_id">
        </div>
        <div class="mb-3">
        <input type="submit" class="form-control  bg-danger" id="submit" name="submit" value="submit">
        </div>
    </form>
</div>



    <?php include("../admin/includes/footer.php");?>
<?php
include('../connection/connect.php');
include("../admin/includes/header.php");

if(isset($_POST['submit'])){
    $category_title = $_POST['cat_name'];

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

    $insert_query = "insert into `category` (category_name, category_image) values ('$category_title','$product_image')";
    $result = mysqli_query($con, $insert_query);
    if($result){
        echo "<script> alert('Category has been inserted successfully')</script>";
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
        <input type="submit" class="form-control  bg-danger" id="submit" name="submit" value="submit">
        </div>
    </form>
</div>

<!-- display inserted category -->
<table class="table">
        <thead>
                <tr>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Image</th>
                </tr>
        </thead>
        <tbody>
            <?php

            $sql=" SELECT * FROM `category`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $Id=$row['category_id'];
                    $Category_Name=$row['category_name'];
                    $Category_Image=$row['category_image'];

                    echo '<tr>
                            <td scope="row">'.$Id.'</td>
                            <td>'.$Category_Name.'</td>
                            <td>'.$Category_Image.'</td>
                        </tr>';
                }
            }
            ?>
        </tbody>
    </table>

    <?php include("../admin/includes/footer.php");?>
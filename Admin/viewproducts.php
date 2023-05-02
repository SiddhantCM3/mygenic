<?php
include_once 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
 <div class="container-fluid float-right">
    <!-----------------Navbar------------------------>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:  #39A6A3;">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="home.php">MyGenic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="addproducts.php">Add Product</a></li>
                <li><a class="dropdown-item" href="viewproducts.php">View Products</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="addcategory.php">Add Category</a></li>
                <li><a class="dropdown-item" href="viewcategory.php">View Category</a></li>
              </ul>
            </li>
         </ul>
       </div>
     </div>        
   </nav>
   <!-----------------Navbar-End----------------------->   
    <button class="btn btn-primary my-5"><a href="addproducts.php" class="text-light">Add Products</a>
    </button>
    <table class="table">
        <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Product_Image</th>
                <th scope="col">Product_Name</th>
                <th scope="col">Product_Chemical</th>
                <th scope="col">Product_Form</th>
                <th scope="col">Company_Name</th>
                <th scope="col">Product_Storage</th>
                <th scope="col">Product_Packing</th>
                <th scope="col">Product_Category</th>
                <th scope="col">Parent_id</th>
                <th scope="col">Operations</th>
                </tr>
        </thead>
        <tbody>
            <?php

            $sql="Select * from `crud`";
            $result=mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $Id=$row['Id'];
                    $product_image=$row['product_image'];
                    $product_name=$row['product_name'];
                    $product_chemical=$row['product_chemical'];
                    $product_form=$row['product_form'];
                    $company_name=$row['company_name'];
                    $product_storage=$row['product_storage'];
                    $product_packing=$row['product_packing'];
                    $product_category=$row['product_category'];
                    $parent_id=$row['parent_id'];

                    echo '<tr>
                            <td scope="row">'.$Id.'</td>
                            <td>'.$product_image.'</td>
                            <td>'.$product_name.'</td>
                            <td>'.$product_chemical.'</td>
                            <td>'.$product_form.'</td>
                            <td>'.$company_name.'</td>
                            <td>'.$product_storage.'</td>
                            <td>'.$product_packing.'</td>
                            <td>'.$product_category.'</td>
                            <td>'.$parent_id.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$Id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$Id.'" class="text-light">Delete</a></button>
                            </td>
                        </tr>';
                }
            }
            ?>
        </tbody>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
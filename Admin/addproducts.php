<?php

session_start();

include ('connect.php');

if(isset($_POST['savedata'])){
    $ProductName=$_POST['product_name'];
    $ProductChemical=$_POST['product_chemical'];
    $ProductForm=$_POST['product_form'];
    $CompanyName=$_POST['company_name'];
    $ProductStorage=$_POST['product_storage'];
    $ProductPacking=$_POST['product_packing'];
    $ProductCategory=$_POST['product_category'];
    $ParentId=$_POST['parent_id'];


    $ProductImage = $_FILES['product_image']['name'];
    
    if(file_exists("./upload/".$_FILES["product_image"]["name"]))
    {
        $store = $_FILES["product_image"]["name"];
        $_SESSION['status'] = "Image already exist.'.$store.'";
        header('location:viewproducts.php');
    }
    else{

        $sql="insert into `products`(product_image,product_name,product_chemical,product_form,company_name,product_storage,product_packing,product_category,parent_id)
        values('$ProductImage','$ProductName','$ProductChemical','$ProductForm','$CompanyName','$ProductStorage','$ProductPacking','$ProductCategory','$ParentId')";

        $result=mysqli_query($con,$sql);
        if($result){

            move_uploaded_file($_FILES["product_image"]["tmp_name"],"./upload/".$_FILES["product_image"]["name"]);
            $_SESSION['success'] = "data upload successfully";
            header('location:viewproducts.php');
        }
        else{
            $_SESSION['success'] = "data not upload successfully";
            header('location:viewproducts.php');
        }
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
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
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Product
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="addproducts.php">Add Product</a></li>
                                        <li><a class="dropdown-item" href="viewproducts.php">View Products</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Category
                                    </a>
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
       <div class="container my-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="product_name" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Name" autocomplete="off">
                </div>  
                <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="product_image" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Select Product Image" autocomplete="off">
                </div> 
                <div class="form-group">
                    <label>Product Chemical</label>
                    <input type="text" class="form-control" name="product_chemical" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Chemical" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Product Form</label>
                    <input type="text" class="form-control" name="product_form" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Form" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="company_name" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Company Name" autocomplete="off">
                </div>
                <div class="form-group">
                <label>Product Storage</label>
                <input type="text" class="form-control" name="product_storage" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Storage" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Product Packing</label>
                    <input type="text" class="form-control" name="product_packing" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Packing" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Product Category</label>
                    <input type="text" class="form-control" name="product_category" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Category" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Parent ID</label>
                    <select class="form-control" name="parent_id" id="exampleFormControlSelect1"  placeholder="Enter Product Category" autocomplete="off">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    </select>
                </div>
                <button type="submit" name="savedata" class="btn btn-primary">Submit</button>
            </form>
      </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
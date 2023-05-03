<?php

session_start();

include_once 'connect.php';
if(isset($_POST['submit'])){
    $Category_Name=$_POST['category_name'];
    $Category_Id =$_POST['category_id'];


    $Category_Image  = $_FILES['category_image']['name'];
    
    if(file_exists("./categoryimages/".$_FILES["category_image"]["name"]))
    {
        $store = $_FILES["category_image"]["name"];
        $_SESSION['status'] = "Image already exist.'.$store.'";
        header('location:viewcategory.php');
    }
    else{

        $sql= "INSERT INTO `categories`(category_name,category_image,category_id)
        VALUES('$Category_Name','$Category_Image','$Category_Id')";

        $result=mysqli_query($con,$sql);
        if($result){

            move_uploaded_file($_FILES["category_image"]["tmp_name"], "./categoryimages/".$_FILES["category_image"]["name"]);
            $_SESSION['success'] = "data upload successfully";
            header('location:viewcategory.php');
        }
        else{
            $_SESSION['success'] = "data not upload successfully";
            header('location:viewcategory.php');
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
                    <a class="navbar-brand fw-bold" href="index.php">MyGenic</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Categories
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="addcategory .php">Add Category</a></li>
                                        <li><a class="dropdown-item" href="viewcategory .php">View Category</a></li>
                                    </ul>
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
                            </ul>
                        </div>
                </div>
            </nav>
     <!-----------------Navbar-End----------------------->
       <div class="container my-5">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" name="category_name" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter category Name" autocomplete="off">
                </div>  
                <div class="form-group">
                <label>Category Image</label>
                <input type="file" class="form-control" name="category_image" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Select category Image" autocomplete="off">
                </div> 
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category Id</label>
                    <select class="form-control" name="category_id" id="exampleFormControlSelect1"  placeholder="Enter category Category" autocomplete="off">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
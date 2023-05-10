
<?php
include('../connection/connect.php');
include("../admin/includes/header.php");

?>

<button class="btn btn-primary my-5"><a href="add_product.php" class="text-light">Add Products</a>
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
                <th scope="col">Category_Name</th>
                <th scope="col">Category_Id</th>
                <th scope="col">Operations</th>
                </tr>
        </thead>
        <tbody>
            <?php

            $sql="Select * from `productdetails`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $Id=$row['Id'];
                    $product_image=$row['Product_Image'];
                    $product_name=$row['Product_Name'];
                    $product_chemical=$row['Product_Chemical'];
                    $product_form=$row['Product_Form'];
                    $company_name=$row['Company_Name'];
                    $product_storage=$row['Product_Storage'];
                    $product_packing=$row['Product_Packing'];
                    $Product_Category=$row['category_name'];
                    $Category_Id=$row['category_id'];

                    echo '<tr>
                            <td scope="row">'.$Id.'</td>
                            <td>'.$product_image.'</td>
                            <td>'.$product_name.'</td>
                            <td>'.$product_chemical.'</td>
                            <td>'.$product_form.'</td>
                            <td>'.$company_name.'</td>
                            <td>'.$product_storage.'</td>
                            <td>'.$product_packing.'</td>
                            <td>'.$Product_Category.'</td>
                            <td>'.$Category_Id.'</td>
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
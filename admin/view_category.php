<?php
include('../connection/connect.php');
include("../admin/includes/header.php");

?>

<!-- display inserted category -->
<button class="btn btn-primary my-5"><a href="add_category.php" class="text-light">Add Products</a>
    </button>
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

            $insert_query=" SELECT * FROM `categories`";
            $result=mysqli_query($con,$insert_query);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $category_Id=$row['category_id'];
                    $Category_Name=$row['category_name'];
                    $Category_Image=$row['category_image'];

                    echo '<tr>
                            <td scope="row">'.$category_Id.'</td>
                            <td>'.$Category_Name.'</td>
                            <td>'.$Category_Image.'</td>
                        </tr>';
                }
            }
            ?>
        </tbody>
    </table>

    <?php include("../admin/includes/footer.php");?>
<?php include("header.php"); ?>
<?php include("carousel.php"); ?>

<div class="container py-5">
    <div class="row">
        <?php
               require ('admin/connection.php');
                
               $category_id=$_GET['category_id'];
               $sql = "SELECT * FROM `products` WHERE category_id='$category_id'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                <div class="col-md-4">
                   <div class="card" style="width: 18rem;">
                         <?php echo '<img class="card-img-top" src="./Admin/upload/'.$row['product_image'].'" width="100px"; height="100px"; alt=" ">' ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Product Chemical:</b> <?php echo $row['product_chemical']; ?></li>
                            <li class="list-group-item"><b>Product Form:</b> <?php echo $row['product_form']; ?></li>
                            <li class="list-group-item"><b>Company Name:</b> <?php echo $row['company_name']; ?></li>
                            <li class="list-group-item"><b>Product Storage:</b> <?php echo $row['product_storage']; ?></li>
                            <li class="list-group-item"><b>Product Packing:</b> <?php echo $row['product_packing']; ?></li>
                            <li class="list-group-item"><b>Product Category:</b> <?php echo $row['product_category']; ?></li>
                        </ul>
                   </div>
               </div>
             <?php
                  }
                }
             else
              {
    
              }
            ?>
    </div>
</div>


<?php include("footer.php")?>
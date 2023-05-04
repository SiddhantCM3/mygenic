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
                    <section id="proview">
                        <div class="card mb-3" style="max-width: 570px;">
                            <div class="row g-0">
                                 <div class="col-md-4">
                                        <?php echo '<img class="card-img-top border border-2 m-2" src="./Admin/upload/'.$row['product_image'].'" width="250px"; height="300px"; alt=" ">' ?>
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color:#ed6f1e;font-size: 1.5em;"><?php echo $row['product_name']; ?></h5><br>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Chemical:</b> <?php echo $row['product_chemical']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Form:</b> <?php echo $row['product_form']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Company Name:</b> <?php echo $row['company_name']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Storage:</b> <?php echo $row['product_storage']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Packing:</b> <?php echo $row['product_packing']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Category:</b> <?php echo $row['product_category']; ?></p>

                                    </div>
                                    </div>
                             </div>
                        </div>
                  </section>
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


<?php include("header.php"); ?>
<?php include("carousel.php"); ?>


<div class="container py-5">
    <div class="row">
      <div class="col-md-6">
          <?php
               require ('connection/connect.php');
                
               $category_id=$_GET['category_id'];
               $sql = "SELECT * FROM `product` WHERE category_id='$category_id'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                    <section id="proview">
                        <div class="card mb-3" style="max-width: 570px;">
                            <div class="row">
                                 <div class="col-md-3">
                                        <?php echo '<img class="card-img-top border border-2 m-2" src="./admin/product_images/'.$row['Product_Image'].'" width="250px"; height="300px"; alt=" ">' ?>
                                    </div>
                                    <div class="col-md-9">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color:#ed6f1e;font-size: 1.5em;"><?php echo $row['Product_Name']; ?></h4><br>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Chemical:</b> <?php echo $row['Product_Chemical']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Form:</b> <?php echo $row['Product_Form']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Company Name:</b> <?php echo $row['Company_Name']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Storage:</b> <?php echo $row['Product_Storage']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Packing:</b> <?php echo $row['Product_Packing']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Category:</b> <?php echo $row['Product_Category']; ?></p>

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
</div>



<?php include("footer.php")?>


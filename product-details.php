<?php include("header.php"); ?>

<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
        <div class="breadcrumb-area-bg">
            <img class="img-fluid" src="assets/img/breadcrumb/Our-Products.jpg" alt="">
        </div>
    </section>
<!--End breadcrumb area-->

<div class="text-end">
    <a href="product.php"><button class="btn-f btn btn-bottom-animation-1">All Category</button></a>
</div>

<div class="container py-5">
    <div class="row">
          <?php
               require ('connection/connect.php');
                
               $Product_Name=$_GET['Product_Name'];
               $sql = "SELECT * FROM `productdetails`WHERE Product_Name='$Product_Name'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                  <section class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 p-5" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                                <div class="row">
                                    <div class="col-lg-4" style="border-right: 5px solid rgba(0, 0, 0, .2);">
                                      <?php echo '<img class="card-img-top" src="./admin/product_images/'.$row['Product_Image'].'" width="250px"; height="300px"; alt=" ">' ?>
                                    </div>
                                    <div class="col-lg-8">
                                      <h4 class="card-title" style="color:#ed6f1e;font-size: 1.5em;"><?php echo $row['Product_Name']; ?></h4><br>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Chemical:</b> <?php echo $row['Product_Chemical']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Form:</b> <?php echo $row['Product_Form']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Company Name:</b> <?php echo $row['Company_Name']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Storage:</b> <?php echo $row['Product_Storage']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Packing:</b> <?php echo $row['Product_Packing']; ?></p>
                                        <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;">Product Category:</b> <?php echo $row['category_name']; ?></p>                                    </div>
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


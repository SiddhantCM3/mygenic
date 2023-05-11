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
                
               $Product_Chemical=$_GET['Product_Chemical'];
               $sql = "SELECT * FROM `productdetails` WHERE Product_Chemical='$Product_Chemical'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                    <div class="col-md-3">
                      <a href="product-details.php?Product_Name=<?php echo $row['Product_Name']; ?>">  
                        <div class="card mb-3  sub-pro h-100">
                          <div class="card-header bg-transparent text-center"><h5 class="card-title" style="color:#ed6f1e;font-size: 1.0em;"><b><?php echo $row['Product_Name']; ?></b></h5></div>
                          <div class="card-body text-success">
                                <h5 class="geeks"><?php echo '<img class="card-img-top img-fluid" src="./admin/product_images/'.$row['Product_Image'].'" style="height: 200px; width: 200px;"  alt=" ">' ?></h5>
                          </div>
                          <div class="card-footer bg-transparent text-center"><p><b style="color:#046e7a;font-size: 1.0em;"></p><?php echo $row['category_name']; ?></b></div>
                        </div>
                    </a> 
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
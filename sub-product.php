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
                
               $category_name=$_GET['category_name'];
               $sql = "SELECT * FROM `productdetails` WHERE category_name='$category_name'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                  <div class="col-md-4 ">
                    <a href="product-details.php?Product_Name=<?php echo $row['Product_Name']; ?>">  
                      <div class="card  mb-3 sub-pro" style="max-width: 18rem;">
                        <div class="card-header bg-transparent"><h4 class="card-title" style="color:#ed6f1e;font-size: 1.5em;"><?php echo $row['Product_Name']; ?></h4></div>
                        <div class="card-body text-success">
                              <h5 class="geeks"><?php echo '<img class="card-img-top" src="./admin/product_images/'.$row['Product_Image'].'" width="20px"; height="100px"; alt=" ">' ?></h5>
                        </div>
                        <div class="card-footer bg-transparent"><p><b style="color:#046e7a;font-size: 1.0em;">Product Category:</b></p><?php echo $row['category_name']; ?></div>
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
</div>



<?php include("footer.php")?>


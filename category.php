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
                
               $category_id=$_GET['category_id'];
               $sql = "SELECT * FROM `productdetails` WHERE category_id='$category_id'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                  <div class="col-md-3 ">
                    <a href="sub-categoryview.php?Product_Chemical=<?php echo $row['Product_Chemical']; ?>">  
                      <div class="card  mb-3 sub-pro h-100 ">
                        <div class="card-header bg-transparent text-center"><h5 class="card-title" style="color:#ed6f1e;"><?php echo $row['Product_Name']; ?></h5></div>
                        <div class="card-body text-success">
                              <h5 class="geeks"><?php echo '<img class="card-img-top img-fluid" src="./admin/product_images/'.$row['Product_Image'].'" style="height: 200px; width: 200px;" alt=" ">' ?></h5>
                        </div>
                        <div class="card-footer bg-transparent text-center"><p><b style="color:#046e7a;font-size: 1.0em;">Product Chemical</b></p><?php echo $row['Product_Chemical']; ?></div>
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

<div class="container enquiry mb-2 p-2">
    <div class="row">
        <div class="col-lg-4 text-center">
            <p class="para1">Have any questions?</p>
            <h4 class="head"><a href="#" class="text-"><i class="bi bi-telephone-forward-fill"></i> +91 12345 67890</a></h4>
        </div>
        <div class="col-lg-4 text-center para-2">
            <p>More Information about to the Mygenic</p>
        </div>
        <div class="col-lg-4 text-center Enquirybtn">
           <a href="contact.php"><button class="btn-f btn btn-bottom-animation-1">Enquiry Here</button></a>
        </div>
    </div>
</div>

<?php include("footer.php")?>

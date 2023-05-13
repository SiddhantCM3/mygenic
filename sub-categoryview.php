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

<div class="container enquiry mb-2 p-2">
    <div class="row">
        <div class="col-lg-4 text-center">
            <p class="para1">Have any questions?</p>
            <h4 class="head"><a href="#" class="text-"><i class="bi bi-telephone-forward-fill"></i> +91 12345 67890</a></h4>
        </div>
        <div class="col-lg-4 text-center para-2" style="display: inline-block;">
            <p>More Information about to the Mygenic</p>
        </div>
        <div class="col-lg-4 text-center Enquirybtn">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Enquiry Here</a>
            <div class="row">
                <div class="col pt-3">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Enter Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Enter Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                    </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>


<?php include("footer.php")?>
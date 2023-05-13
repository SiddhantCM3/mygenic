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
                  <section class="container" id="product-details">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 p-5" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                        <div class="row">
                          <div class="col-lg-4 details">
                            <?php echo '<img class="card-img-top" src="./admin/product_images/'.$row['Product_Image'].'" width="250px"; height="300px"; alt=" ">' ?>
                          </div>
                          <div class="col-lg-8">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 text-center">
                                <p class="card-title" style="color:#ed6f1e;font-size: 1.8em;"><?php echo $row['Product_Name']; ?></p><br>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;"><div class="col-lg-4 col-md-4 d-flex">Product Chemical:</div></b> <div class="col-lg-8 col-md-8"><?php echo $row['Product_Chemical']; ?></div></p>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;"><div class="col-lg-4  col-md-4 d-flex">Product Form:</div></b> <div class="col-lg-8 col-md-8"><?php echo $row['Product_Form']; ?></div></p>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;"><div class="col-lg-4 col-md-4 d-flex">Company Name:</div></b> <div class="col-lg-8 col-md-8"><?php echo $row['Company_Name']; ?></div></p>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;"><div class="col-lg-4 col-md-4 d-flex">Product Storage:</div></b> <div class="col-lg-8 col-md-8"><?php echo $row['Product_Storage']; ?></div></p>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;"><div class="col-lg-4 col-md-4 d-flex">Product Packing:</div></b> <div class="col-lg-8 col-md-8"><?php echo $row['Product_Packing']; ?></div></p>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <p class="card-text"><b style="color:#046e7a;font-size: 1.0em;"><div class="col-lg-4 col-md-4 d-flex">Product Category:</div></b> <div class="col-lg-8 col-md-8"><?php echo $row['category_name']; ?></div></p> 
                                </div>
                              </div>                                
                          </div>
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


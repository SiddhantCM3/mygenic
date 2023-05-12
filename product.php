<?php include("header.php"); ?>

<!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg">
            <img class="img-fluid" src="assets/img/breadcrumb/Our-Products.jpg" alt="">
        </div>
    </section>
<!--End breadcrumb area-->

<section id="product" class="section-bg">
    <div class="container">
        <div class="section-head">
            <h2 class="text-center" data-aos="zoom-in"><span>our </span>products</h2>
        </div>
        <p class="text-center" data-aos="zoom-out">Pharmaceutical Tablets And Pharmaceutical Injections</p>
        <div class="row pt-3">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="cards_landscape_wrap-2" style="grid-gap: 0px 10px;">
                <?php
           require ('connection/connect.php');
            
           $insert_query=" SELECT * FROM `categories`";
           $result=mysqli_query($con,$insert_query);
           $check_crud = mysqli_num_rows($result) > 0;

           if($check_crud)
           {
              while($row = mysqli_fetch_array($result))
              {
                ?>
            <div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-stretch">
                <a href="category.php?category_id=<?php echo $row['category_id']; ?>">
                    <div class="card mb-3" style="max-width: 50rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                        <div class="card-header text-center"><p class="card-title" style="color:#048a9a;font-size:1.0em;"><b><?php echo $row['category_name']; ?></b></p></div>
                        <div class="card-body text-primary">
                            <h5 class="geeks"><?php echo '<img class="card-img-top img-fluid" src="./admin/category_images/'.$row['category_image'].'" width="100px"; height="100px"; alt=" ">' ?></h5>
                        </div>
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
</section>

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

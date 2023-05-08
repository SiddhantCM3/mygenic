<?php include("header.php"); ?>
<?php include("carousel.php"); ?>

<section id="product" class="section-bg">
    <div class="container">
        <div class="section-head">
            <h2 class="text-center" data-aos="zoom-in" data-aos-delay="200"><span>our </span>products</h2>
        </div>
        <p class="text-center" data-aos="zoom-out" data-aos-delay="200">Pharmaceutical Tablets And Pharmaceutical Injections</p>
        <div class="row pt-3">
            <div class="col-lg-12 col-md-12 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div id="cards_landscape_wrap-2">
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
            <div class="col-lg-3 col-md-4 col-sm-4 ">
                <a href="sub-product.php?category_name=<?php echo $row['category_name']; ?>">
                    <div class="card mb-3" style="max-width: 50rem; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                        <div class="card-header"><h5 class="card-title" style="color:#048a9a;"><?php echo $row['category_name']; ?></h5></div>
                        <div class="card-body text-primary">
                            <h5 class="geeks"><?php echo '<img class="card-img-top" src="./admin/category_images/'.$row['category_image'].'" width="100px"; height="100px"; alt=" ">' ?></h5>
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




<?php include("footer.php")?>

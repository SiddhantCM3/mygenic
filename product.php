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
           require 'Admin/connect.php';
            
           $sql = "SELECT * FROM `products` ";
           $result = mysqli_query($con,$sql);
           $check_crud = mysqli_num_rows($result) > 0;

           if($check_crud)
           {
              while($row = mysqli_fetch_array($result))
              {
                ?>
            <div class="col-md-4 mb-5">
            <a href="productsview.php?parent_id=<?php echo $row['parent_id']; ?>">
               <div class="card" style="width: 18rem;">
                     <?php echo '<img class="card-img-top" src="./Admin/upload/'.$row['product_image'].'" width="100px"; height="100px"; alt=" ">' ?>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
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
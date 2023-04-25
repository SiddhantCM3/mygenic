<?php include("header.php"); ?>
<?php include("carousel.php"); ?>

<section id="product" class="section-bg">
    <div class="container">
        <div class="section-head">
            <h2 class="text-center" data-aos="zoom-in" data-aos-delay="200"><span>our </span>products</h2>
        </div>
        <p class="text-center" data-aos="zoom-out" data-aos-delay="200">Pharmaceutical Tablets And Pharmaceutical Injections</p>
        <div class="row pt-3">
        <?php include("productlist.php"); ?>
            <div class="col-lg-8 col-md-8 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div id="cards_landscape_wrap-2">

                    <div class="new-card" style="display: inline-block;">
                        <div class="card" style="max-width: 540px;">
                            <div class="card-row d-flex">
                                <a href="aprecap-capsule.php" target="_blank">
                                    <div class="productImage" id="" onclick="revealDescription()">
                                        <div class="items" id="cat1">
                                            <div class="card" style="width: 18rem;">
                                                <div class="img-title">
                                                    <h5 class="card-title">APRECAP CAPSULE</h5>
                                                </div>
                                                <div class="card-img">
                                                    <img src="assets\img\product-page\ANTI CANCER CAPSULES\APRECAP CAPSULE.jpg" class="card-img-top" alt="ANTI CANCER CAPSULES alecensa-150mg"> 
                                                </div>
                                                <p class="text-end z-3 pe-2 text-capitalize">-by glenmark pharmaceuticals ltd.</p>                    
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="productDescription" style="display: none;" onclick="stopPropagation(event)">
                                    <div class="card-body">
                                        <button type="button" class="btn-close closeButton" onclick="hideDescription()" aria-label="Close" style="float:right" id=""></button>
                                        <!-- <h5 class="card-title">ALECENSA 150MG CAPSULE</h5> -->
                                        <p><strong>Product Chemical: </strong>ALECTINIB 150MG</p>
                                        <p><strong>Product Form: </strong>CAPSULE</p>
                                        <p><strong>Company Name : </strong>ROCHE PRODUCTS INDIA PVT LTD.</p>
                                        <p><strong>Product Storage : </strong></p>
                                        <p><strong>Product Packing : </strong>224 CAPSULE</p>
                                        <p><strong>Product Category : </strong>ANTI CANCER CAPSULES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>








<?php include("footer.php")?> 
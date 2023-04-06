
<main id="carousel" class="owl-carousel owl-theme">
    <div class="item">
        <div class="zoomin">
            <img src="assets\img\minimalistic-science-banner-with-pills.jpg" alt="e-waste-mart-banner" class="img-fluid">
        </div>
        <p class="right" onslide="grow()"><span style="color:#ed6f1e;">Empowering Health</span> through </p>
        <p class="right" style="top:35%;" onslide="grow()">Innovation: Your Trusted Partner</p>
        <p class="right" style="top:50%;" onslide="grow()"> In Pharmaceutical Manufacturing</p>
    </div>
    <div class="item">
        <div class="zoomin">
            <img src="assets\img\shopping-cart-with-pill-foils.jpg" alt="e-waste-mart-banner" class="img-fluid">
        </div>
        <p class="left" onslide="grow()"><span style="color:#ed6f1e;">Transforming lives</span> through</p>
        <p class="left" style="top:35%;" onslide="grow()"> innovative and reliable</p>
        <p class="left" style="top:50%;" onslide="grow()"> pharmaceutical manufacturing.</p>
    </div>
    <div class="item">
        <div class="zoomin">
            <img src="assets\img\covid-still-life-with-vaccine.jpg" alt="e-waste-mart-banner" class="img-fluid">
        </div>
        <p class="right" onslide="grow()"><span style="color:#ed6f1e;">Committed to</span> improving </p>
        <p class="right" style="top:35%;" onslide="grow()">lives through innovation and  </p>
        <p class="right" style="top:50%;" onslide="grow()">quality pharmaceutical manufacturing.</p>
    </div>
    <div class="item">
        <div class="zoomin">
            <img src="assets\img\360_F_244941752_blcmwFb9nuztXpp7F8GAXAsptt0FNyko.jpg" alt="e-waste-mart-banner" class="img-fluid">
        </div>
        <p class="left" onslide="grow()"><span style="color:#ed6f1e;">Transforming Lives</span> with</p>
        <p class="left" style="top:35%;" onslide="grow()">Quality Medicines - Your </p>
        <p class="left" style="top:50%;" onslide="grow()">Trusted Pharmaceutical Partner</p>
    </div>
</main>

   <script>
  $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
   items : 1,
    loop: true,
    autoplay: true,
    autoplayTimeout:5000,
    responsiveClass:true
  });
});

function grow(){

}
</script>
<main id="carousel" class="owl-carousel owl-theme">
    <div class="item">
        <img src="assets\img\corousel image banner_01.jpg" alt="" class="img-fluid">
    </div>
    <div class="item">
        <img src="assets\img\corousel image banner_02.jpg" alt="" class="img-fluid">
    </div>
    <div class="item">
        <img src="assets\img\corousel image banner_03.jpg" alt="" class="img-fluid">
    </div>
    <div class="item">
        <img src="assets\img\corousel image banner_04.jpg" alt="" class="img-fluid">
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
    responsiveClass:true
  });
});

</script>
// var productCard = document.getElementsByClassName("product-card");
// var productCardWidth = productCard.offsetWidth;
// var productCardItem = document.getElementById("carousel");
// var count = 1;
// var items = productCardItem.querySelectorAll(".item").length;
// var prev = document.getElementById("prev");
// var next = document.getElementById("next");

// window.addEventListener('resize', function() {
//     productCardWidth = productCard.offsetWidth;
// });

// var prevSlide = function() {
//     if(count > 1) {
//       count = count - 2;
//       productCardItem.style.left = "-" + count * productCardWidth + "px";
//       count++;
//     }
  
//     else if(count = 1) {
//       count = items - 1;
//       productCardItem.style.left = "-" + count * productCardWidth + "px";
//       count++;
//     }
// };
// var nextSlide = function() {
//     if(count < items) {
//         productCardItem.style.left = "-" + count * productCardWidth + "px";
//       count++;
//     }
//     else if(count = items) {
//         productCardItem.style.left = "0px";
//       count = 1;
//     }
// };
// next.addEventListener("click", function() {
//     nextSlide();
//   });
  
//   prev.addEventListener("click", function() {
//     prevSlide();
//   });
//   setInterval(function() {
//     nextSlide()
//   }, 2000);

//   window.onload = function() {
//     responsiveSlider();  
//     }
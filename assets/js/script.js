// var desc = document.querySelector(".productDescription");

// function revealDescription()
//     {
//         if(desc.style.display === "none"){
//             desc.style.display = "block";
//         }
//     }


    var desc = document.getElementsByClassName("productDescription");
    var hide;
    for (var i = 0; i < desc.length; i++) {
        desc[i].onclick = function() {
        var classes = this.classList;
        if (classes.contains("show")) {
          classes.remove("show");
        } else {
          if (hide != null)
          desc.classList.remove("show");
          hide = this;
          classes.add("show");
        }
      }
    }
    
    function stopPropagation(event){
      event.stopPropagation();
    }
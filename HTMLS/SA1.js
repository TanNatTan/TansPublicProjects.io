document.addEventListener("DOMContentLoaded", function() {
    const sliderNavLinks = document.querySelectorAll(".slider-nav a");

    sliderNavLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
            e.preventDefault(); // Prevent the default anchor behavior
            const targetSlide = this.getAttribute("data-slide");
            const slide = document.querySelector(targetSlide);

            if (slide) {
                slide.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});

var myIndex = 0;
carousel();

var myIndex = 0;

function carousel() {
  var x = document.getElementsByClassName("mySlides");
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {
    myIndex = 1;
  }
  x[myIndex - 1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 5 seconds
}

carousel(); // Start the carousel



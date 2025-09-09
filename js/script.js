     let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Automatic slideshow
        setInterval(function() {
            plusSlides(1);
        }, 5000); // Change image every 5 seconds

        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("carousel-slide");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.opacity = "0";
          }
          slides[slideIndex-1].style.opacity = "1";
        }
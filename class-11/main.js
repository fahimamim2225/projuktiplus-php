jQuery(document).ready(function() {
    $(".course-slider").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button class="absolute -top-33 right-18 border border-[#FFB900] w-[40px] h-[40px] rounded-full text-[#FFB900] cursor-pointer hover:bg-[#FFB900] hover:text-white transition"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow: '<button class="absolute -top-33 right-4 border border-[#FFB900] w-[40px] h-[40px] rounded-full text-[#FFB900] cursor-pointer hover:bg-[#FFB900] hover:text-white transition"><i class="fa-solid fa-chevron-right"></i></button>',
    });

    
    $(".test-slider").slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
    });

    
    $(".blog-slider").slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
    });

    // Get current file name from URL
    const currentPath = window.location.pathname.split("/").pop() || "index.html";

    // Select all links
    const links = document.querySelectorAll("#menu .nav-link");

    links.forEach(link => {
      const href = link.getAttribute("href");
      if (href === currentPath) {
        link.classList.add(
          "font-bold",
          "border-b-2",
          "border-[#DD3142]"
        );
      } else {
        link.classList.add("text-black", "hover:text-[#DD3142]");
      }
    });

})
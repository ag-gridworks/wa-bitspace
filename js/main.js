$("#slider").owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
function gonavbarResponsive() {
    var x = document.getElementById("go-navbar");
    if (x.className === "go-navbar") {
        x.className += " responsive";
    } else {
        x.className = "go-navbar";
    }
}
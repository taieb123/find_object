(function($) {
  "use strict"; // Start of use strict
    //
    $("#news-slider8").owlCarousel({
        items : 3,
        loop:true,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        autoplay: true,
        autoPlaySpeed: 1000,
        autoPlayTimeout: 1000,
        autoplayHoverPause: true
    });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

    var lat = 48.852969;
    var lon = 2.349903;
    var macarte = null;
    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);
    }
    // Fonction d'initialisation de la carte

        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();


    $('.marker').on('click',function (e) {
        e.preventDefault();
        var lat =$(this).data('lat');
        var long =$(this).data('long');
        var circle = L.circle([lat, long], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 200
        }).addTo(macarte);
        macarte.panTo(new L.LatLng(lat, long));
        macarte.setZoom(16);
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    })
})(jQuery); // End of use strict

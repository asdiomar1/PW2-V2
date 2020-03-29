(function($) {

  "use strict";

  $(window).on('load', function() {

    /* Componente Slicknav para determinar sobre cual item del menu esta posicionado  */
    $('.mobile-menu').slicknav({
        prependTo: '.navbar-header',
        parentTag: 'liner',
        allowParentLinks: true,
        duplicate: true,
        label: '',
      });

      /* Componente WOW para determinar sobre cual div se hace scroll y cambiar el item activo
    ========================================================*/
     var wow = new WOW({
      //disabled for mobile
        mobile: false
    });
    wow.init();

    /* Nivo Lightbox
    ========================================================*/
    $('.lightbox').nivoLightbox({
        effect: 'fadeScale', //setea tipo de efecto cuando hay interaccion
        keyboardNav: true,
      });

    // one page navigation
    $('.navbar-nav').onePageNav({
            currentClass: 'active'
    });

    /* Funcion para retornar al principio de la pagina cuando se hace click en el boton
    ========================================================*/
      var offset = 200;
      var duration = 500;
      $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
          $('.back-to-top').fadeIn(400);
        } else {
          $('.back-to-top').fadeOut(400);
        }
      });

      $('.back-to-top').on('click',function(event) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, 600);
        return false;
      });

  });

}(jQuery));

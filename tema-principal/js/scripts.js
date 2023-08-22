(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < 1300;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');


    $("a#example1").fancybox({
      'titleShow'     : false
    });

    $("a#link-video").fancybox({
      'titleShow'     : false
    });


    
    /* BUTTON MENU MOBILE */
    $('.menuBtn').click(function () {      
      $(this).toggleClass('act');
      if ($(this).hasClass('act')) {
        $('.menu-mobile').addClass('act');
        $('body').addClass('act');
      } else {
        $('.menu-mobile').removeClass('act');
        $('body').removeClass('act');
      }
    });


    /* fixed menu */
    if(desktop){
      $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll >= 140){
          $('header').addClass('fixed');  
        }else{
          $('header').removeClass('fixed');  
        }
      });
    }
    
    $('.podcast img').click(function toggleAudio() {
          var audioElement = document.getElementById('player');      
          if (audioElement.paused) {
            audioElement.play();    
          } else {
            audioElement.pause();    
          }
        } 
    );

    /* INPUT MASK */
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };    
    $('#celular').mask(SPMaskBehavior, spOptions);
   

    /* ANCHOR */
    const links = document.querySelectorAll("a.anchor");
    links.forEach((link) => {
      function clickHandler(e) {
          e.preventDefault();
          const href = link.getAttribute("href");
          const offsetTop = document.querySelector(href).offsetTop;     
          window.scroll({
            top: offsetTop + 700,
            behavior: "smooth"
          });
        }
      link.addEventListener("click", clickHandler);
    });   

    
    /* CARROSSEL */
    $('.carrossel-fornecedores .carrossel').slick({
      slidesToShow: 6,
      slidesToScroll: 2,
      autoplay: true,
      dots: false,
      infinite: true,
      arrows: true,
      adaptiveHeight: true,
      fade: false,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          },
        },
      ],
    });

    $('.home .banners.carrossel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      dots: true,
      infinite: true,
      arrows: false,
      adaptiveHeight: true,
      fade: false,
      autoplaySpeed: 4000
    });


    /*--- COOKIES ---*/
    $('a.para-voce').click(function(){      
      localStorage.setItem('area', 'para-voce');            
    });
    $('a.para-negocio').click(function(){      
      localStorage.setItem('area', 'para-negocio');            
    });
    
    const areaName = localStorage.getItem('area');
    
    
    

  });
})(jQuery);

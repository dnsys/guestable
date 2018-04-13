//VENDORS
//window.$ = window.jQuery = require('jquery');
const $ = window.jQuery || window.$ || {}
require('script-loader!../../../node_modules/slick-carousel/slick/slick');

import Tabs from './components/Tabs'

class Application{
    constructor(){
      console.log('application start');
      this._init()
      this._logoSliderInit()
      this._floatingForm()

      //classes
      new Tabs()
    }

    _init(){
      this._tabSliderInit()
    }

    _tabSliderInit(){
      $('.tab-slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: true,
        nextArrow: '<i class="fa fa-angle-right right-arrow" aria-hidden="true"></i> ',
        prevArrow: '<i class="fa fa-angle-left left-arrow" aria-hidden="true"></i>',
        responsive: [{
          breakpoint: 992,
          settings: {

            slidesToShow: 2
          }
        },
          {
            breakpoint: 480,
            settings: {

              slidesToShow: 1
            }
          }
        ]
      });
    }

    _logoSliderInit(){
      $('.logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [{
          breakpoint: 992,
          settings: {

            slidesToShow: 3
          }
        },
          {
            breakpoint: 480,
            settings: {

              slidesToShow: 1
            }
          }
        ]
      });
    }

    _floatingForm(){
      $(".top-wrapper").click(function() {

        // $(".bottom-wrapper").show();
        $(".bottom-wrapper").slideDown('slow');
        $(this).parents().find('.float-form-wrapper').addClass('active-form');
      });

      $(".floter-close").click(function() {

        $(this).parent().removeClass('active-form');
        $(".bottom-wrapper").css("display", "none");

        $(this).parents().find('.float-form-wrapper').removeClass('active-form');
      });

      setTimeout(function() {
        $('.top-full-wrapper .top-wrapper').fadeIn("slow");
      }, 7000);

    }
}

new Application();

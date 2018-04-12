//VENDORS
//window.$ = window.jQuery = require('jquery');
const $ = window.jQuery || window.$ || {}
require('script-loader!../../../node_modules/slick-carousel/slick/slick');

import Tabs from './components/Tabs'

class Application{
    constructor(){
      console.log('application start');
      this._init()

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
}

new Application();

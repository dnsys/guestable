const $ = window.jQuery || window.$ || {}
require('script-loader!../../../../node_modules/slick-carousel/slick/slick');

class Tabs{
  constructor(){
    this.init()
    this._mobileTabSlider()
  }

  init(){
    let $tabButton = $('.sub_menu_click')
    let $innerTabBox = $('.inner_tab_box')

    $tabButton.on('click', function() {
      $(this).parents().find('.sub_menu_active').removeClass('sub_menu_active');
      $(this).parent().addClass('sub_menu_active').siblings().removeClass('sub_menu_active');
      $('.sub_menu_tab_inner').hide();
      $('#sub_menu_tab_' + $(this).data('target')).show();

      $('#sub_menu_tab_' + $(this).data('target') + ' .inner_tab_box').first().click();
    });

    $tabButton.first().click();

    $innerTabBox.on('click', function() {
      $(this).parents().find('.inner_tab_inner_common_active').removeClass('inner_tab_inner_common_active');
      $(this).parent().addClass('inner_tab_inner_common_active').siblings().removeClass('inner_tab_inner_common_active');
      $('.inner_tab_inner_common_wrapper').hide();
      $('#inner_tab_' + $(this).data('target')).show();
    });

    $innerTabBox.first().click();
  }

  _mobileTabSlider(){
    $('.mobile-slider').slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      arrows: false,
      dots: true,
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
export default Tabs;


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
      this._equalBlogArticlesHeight()
      this._mobileTabMenu()
      this._categoryTabsAjax()
      this._goBackButton()

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

    _equalBlogArticlesHeight(){
      let highestBox = 0;
      $('.blog-box a', this).each(function() {

        if ($(this).height() > highestBox)
          highestBox = $(this).height();
      });
      $('.blog-box a', this).height(highestBox);
    }

    _mobileTabMenu(){
      let $windowWidth = $(window).width();

      $('.sideBar').prepend('<a href="#_" class="mobile_menu_items visible-xs"><span class="menu_texts">Tab Menu</span><span class="plus_mark">+</span></a>');
      $(".mobile_menu_items").click(function() {
        $('.quick-contact').fadeToggle();
        $('.sideBar ul').slideToggle();
        $('.sideBar h3, .contact_sidebar_item').slideToggle();
        $(this).toggleClass('activate');
      });
    }

    _categoryTabsAjax(){
      $('#menu-blog-navigation li a').on('click', function (e) {
        e.preventDefault()

        let $this = $(this)
        let dataTarget = $(this).attr('data-target');
        let postsContainer = $('#posts-container')

        console.log(dataTarget)

        $('#menu-blog-navigation li').removeClass('active')
        $this.parent().addClass('active')

        postsContainer.html('')
        postsContainer.siblings('.custom-loader').show()

        $.ajax({
          type: 'post',
          url: ajaxUrl, //sometimes I'm using bloginfo to get current path: url: '<?php bloginfo('template_url'); ?>/ajax.php',
          data: {
            action: 'filter_posts_by_category',
            dataTarget: dataTarget,
          },
          success: function(data) {
            console.log(data);
            setTimeout(function () {
              postsContainer.siblings('.custom-loader').hide()
              postsContainer.html(data)
            }, 3000)
          }
        });
      })
    }

    _goBackButton(){
      $('.go-back-button').on('click', function () {
        window.history.back();
      })
    }
}

new Application();

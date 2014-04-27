// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var HowAreYou = {
  // All pages
  common: {
    init: function() {
      var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
      var Android = ( navigator.userAgent.match(/(Android)/g) ? true : false );
      if(iOS) {
        window.location = 'https://itunes.apple.com/pl/app/how-are-you-mood-tracker/id691974213?mt=8';
      } else if (Android) {
        window.location = 'https://play.google.com/store/apps/details?id=co.quantumlab.howareyou';
      }
      
      if(jQuery(".home").length === 0) {
        var site_url = $(".logo a").attr('href');
        jQuery(".main-nav a, .bottom-nav a").each(function() {
          var current_href = $(this).attr('href');
          if(current_href !== '#contact') {
            $(this).addClass('external-link');
            $(this).click(function() {
              window.location.href = site_url+current_href;
            });
          }
        });
      }

      jQuery(".main-nav a:not(.external-link), .bottom-nav a:not(.external-link)").smoothScroll({
        offset: -94,
        beforeScroll: function(e) {
          jQuery("li.active").removeClass('active');
        }
      }).on('click', function() {
        var hash = jQuery(this).attr('href');
        jQuery("a[href="+hash+"]").parent().addClass('active');
      });

      jQuery("header").affix({
        offset: {
          top: function() {
            if (jQuery(".homepage-slider").length > 0) {
              return 575;
            } else {
              return 10;
            }
          }
        }
      });

    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      var current_hash = window.location.hash;

      if(jQuery(current_hash).length > 0) {
        var menu_item = current_hash.replace('#', '');
        jQuery("li.menu-"+menu_item).addClass('active');
        jQuery('html,body').animate({
          scrollTop: jQuery('#' + menu_item).offset().top-94
        }, 400);
      } else {
        jQuery("li.menu-home").addClass('active');
      }

      window.location.hash = '';

      var slidesAmount = revapi1.revmaxslide();
      var currentSlide = 1;
      var stripeWidth = 100/slidesAmount;

      jQuery(".homepage-slider").append('<div id="slidesStripe"></div>');

      jQuery("#slidesStripe").css({
        'width': stripeWidth+'%',
        'left': stripeWidth*(currentSlide-1)+'%'
      });
    
      revapi1.bind("revolution.slide.onchange",function (e,data) {
        var currentSlide = data.slideIndex;
        jQuery("#slidesStripe").animate({
          'width': stripeWidth+'%',
          'left': stripeWidth*(currentSlide-1)+'%'
        }, 500);
      });

      jQuery(".about-qa .read.more").click(function() {
        jQuery(this).hide();
        jQuery(this).parent().parent().find(".all").fadeIn();
        jQuery(this).parent().parent().find(".read.less").fadeIn().css('display', 'table');
      });
      jQuery(".about-qa .read.less").click(function() {
        jQuery(this).hide();
        jQuery(this).parent().parent().find(".all").fadeOut();
        jQuery(this).parent().parent().find(".read.more").fadeIn().css('display', 'table');
      });
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = HowAreYou;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    jQuery.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

jQuery(document).ready(UTIL.loadEvents);

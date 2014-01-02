// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var HowAreYou = {
  // All pages
  common: {
    init: function() {
      jQuery("li.menu-home").addClass('active');

      jQuery(".main-nav a, .bottom-nav a").smoothScroll({
        beforeScroll: function(e) {
          jQuery("li.active").removeClass('active');
        }
      }).on('click', function() {
        var hash = jQuery(this).attr('href');
        jQuery("a[href="+hash+"]").parent().addClass('active');
      });

    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
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

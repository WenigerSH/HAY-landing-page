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

      jQuery(".main-nav a:not(.external-link), .bottom-nav a:not(.external-link), .btn-download").smoothScroll({
        offset: -94
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

      jQuery(".play-movie").fancybox({
          padding: 0,
          type: 'iframe',
          width: 640,
          height: 360,
          aspectRatio: true,
          scrolling: 'no'
      });

      jQuery('.btn-take-test').click(function(e) {
        e.preventDefault();
        jQuery('.test-wrapper-overlay, .test-wrapper').fadeIn();
      });

      jQuery('.test-wrapper-overlay').click(function() {
          jQuery('.test-wrapper, .test-wrapper-overlay').fadeOut();
          clearTest();
      });

      function clearTest() {
        jQuery(".test-wrapper .slide").hide();
        jQuery(".test-wrapper .introduction").show();
        jQuery(".test-wrapper input:checked").prop('checked', false);
        jQuery(".test-wrapper .question button").prop('disabled', true);
      }

      jQuery(".slide .btn").click(function() {
        if (jQuery(this).not(":disabled")) {
          //jQuery(this).parents(".slide").slideUp().next().slideDown();
          jQuery(this).parents(".slide").hide().next().show();
        }
      });

      jQuery(".slide label").click(function() {
        jQuery(this).parents(".slide").find(".btn-in-test").prop("disabled", false);
      });

      jQuery(".question-20 .btn").click(function() {
        if (jQuery(this).not(":disabled")) {
          var score_sadness = 0,
              score_interest = 0,
              score_apetite = 0,
              score_sleep = 0,
              score_thinking = 0,
              score_guilt = 0,
              score_fatique = 0,
              score_movement = 0,
              score_suicide = 0;

          var apetite = parseInt(jQuery('input:radio[name=apetite]:checked').val(), 10); //1
          var shake_off_the_blues = parseInt(jQuery('input:radio[name=shake_off_the_blues]:checked').val(), 10); //2
          var keeping_mind = parseInt(jQuery('input:radio[name=keeping_mind]:checked').val(), 10); //3
          var depressed = parseInt(jQuery('input:radio[name=depressed]:checked').val(), 10); //4
          var restless = parseInt(jQuery('input:radio[name=restless]:checked').val(), 10); //5
          var sad = parseInt(jQuery('input:radio[name=sad]:checked').val(), 10); //6
          var get_going = parseInt(jQuery('input:radio[name=get_going]:checked').val(), 10); //7
          var happy = parseInt(jQuery('input:radio[name=happy]:checked').val(), 10); //8
          var bad_person = parseInt(jQuery('input:radio[name=bad_person]:checked').val(), 10); //9
          var activities = parseInt(jQuery('input:radio[name=activities]:checked').val(), 10); //10
          var slept_more = parseInt(jQuery('input:radio[name=slept_more]:checked').val(), 10); //11
          var moving_slowly = parseInt(jQuery('input:radio[name=moving_slowly]:checked').val(), 10); //12
          var fidgety = parseInt(jQuery('input:radio[name=fidgety]:checked').val(), 10); //13
          var wish_was_dead = parseInt(jQuery('input:radio[name=wish_was_dead]:checked').val(), 10); //14
          var hurt = parseInt(jQuery('input:radio[name=hurt]:checked').val(), 10); //15
          var tired = parseInt(jQuery('input:radio[name=tired]:checked').val(), 10); //16
          var like_mysefl = parseInt(jQuery('input:radio[name=like_mysefl]:checked').val(), 10); //17
          var lost_weight = parseInt(jQuery('input:radio[name=lost_weight]:checked').val(), 10); //18
          var trouble_sleep = parseInt(jQuery('input:radio[name=trouble_sleep]:checked').val(), 10); //19
          var focus = parseInt(jQuery('input:radio[name=focus]:checked').val(), 10); //20

          score_sadness = parseInt(shake_off_the_blues + depressed + sad, 10);
          score_interest = parseInt(happy + activities, 10);
          score_apetite = parseInt(apetite + lost_weight, 10);
          score_sleep = parseInt(restless + slept_more + trouble_sleep, 10);
          score_thinking =  parseInt(keeping_mind + focus, 10);
          score_guilt = parseInt(bad_person + like_mysefl, 10);
          score_fatique = parseInt(get_going +  tired, 10);
          score_movement = parseInt(moving_slowly + fidgety, 10);
          score_suicide = parseInt(wish_was_dead + hurt, 10);

          var score_total = parseInt(score_sadness + score_interest + score_apetite + score_sleep + score_thinking + score_guilt + score_fatique + score_movement + score_suicide, 10);

          jQuery(".result-sadness").text(score_sadness);
          jQuery(".result-interest").text(score_interest);
          jQuery(".result-apetite").text(score_apetite);
          jQuery(".result-sleep").text(score_sleep);
          jQuery(".result-thinking").text(score_thinking);
          jQuery(".result-guilt").text(score_guilt);
          jQuery(".result-fatigue").text(score_fatique);
          jQuery(".result-movement").text(score_movement);
          jQuery(".result-suicide").text(score_suicide);

          jQuery(".score").text(score_total);
          var score_percent = parseInt(score_total/80*100, 10);
          if(score_percent < 13) {
            jQuery(".score-bar").addClass('no-stroke');
          }
          jQuery(".score-bar-stroke").animate({
            'width': score_percent+'%'
          }, 800);
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

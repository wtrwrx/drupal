(function ($, Drupal) {

  Drupal.behaviors.themeWaterWorks = {
    attach: function (context, settings) {
      var linksInvestors = $(".inverstor-articles div.read-more a");

      if (linksInvestors.length > 0) {
        anchorGoto(linksInvestors, 'investors-accordion')
      }

      // Issuers links - On Boarding
      var linksOnBoarding = $(".onboarding div.read-more a, .campaign div.read-more a");

      if (linksOnBoarding.length > 0) {
        anchorGoto(linksOnBoarding, 'onboarding-accordion')
      }

      // If menu second issuers link is clicked make sure it is not active.
      var menuSecondAnchors = $("nav.menu--menu-second .gva_menu_main li a");
      menuSecondAnchors.once('mmsecnd').each(function () {
        var href = $(this).attr('href');
        if (href.indexOf('issuers') !== -1) {
          var c = $(this).parent();
          if (c.hasClass('menu-item--active-trail')) {
            c.removeClass('menu-item--active-trail')
          }
        }
      });
    }
  };

  function anchorGoto(links, accordianClassName) {
    var accoridans = $('.' + accordianClassName + ' .gsc-accordionwwf-accordion .wwf-accordion .panel-default .panel-title a');
    var options = {
      speed: 1000, // default 500
      addActive: true, // default true
      activeClass: "active", // default active
      offset: 100 // default 100
    };
    links.each(function () {
      var link = $(this);
      link.on("click", function (e) {
        var goToLink = link.data("link");
        if(goToLink === 'yes') {

        }
        else {
          e.preventDefault();
          var accoridan_to_click = link.data("accordion");
          var goToPlace = link.data("goto");
          accoridans.each(function () {
                var href = $(this).attr('href').replace(/^#+/, "");
                var splitVar = href.split('-');
                var accordionId = parseInt(splitVar[2]);
                if (accordionId === accoridan_to_click) {
                  if ($(this).hasClass("collapsed")) {
                    $(this).click();
                  }

                  var scrollToId = "#" + href + " .panel-body " + " #" + goToPlace;
                  var scrollTo = $(scrollToId);

                  setTimeout(function () {
                    $("body, html").animate({
                      scrollTop: scrollTo.offset().top - options.offset
                    }, options.speed);
                  }, 500);

                }
              }
          );
        }

      });
    });
  }
  $( document ).ready(function() {
    var teamreadmorea = $(".team-block .read-more a");
    teamreadmorea.on('click', function(e){
      e.preventDefault();
      teamcontent = $(this).parent().parent().parent()[0].innerHTML;
      $('#sitemodal .modal-body').empty().append(teamcontent);
      $('#sitemodal').modal('show');
    });
    $('.panel-collapse').on('shown.bs.collapse', function (e) {
      var $panel = $(this).closest('.panel');
      jQuery('html,body').animate({
        scrollTop: $panel.offset().top
      }, 500);
    });
    $('.main-menu li a').click(function() {
      $(this).closest('.gva-offcanvas-mobile').removeClass('show-view');
      $('#menu-bar').removeClass('show-view');
    });
    $('.panel, .wwf-accordion').on('show.bs.collapse', function () {
      $(this).addClass('open');
    });
    $('.panel, .wwf-accordion').on('hide.bs.collapse', function () {
      $(this).removeClass('open');
    });
    });
})(jQuery, Drupal);

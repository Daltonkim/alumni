(function ($) {

 /**
  * Get the total displacement of given region.
  *
  * @param region
  *   Region name. Either "top" or "bottom".
  *
  * @return
  *   The total displacement of given region in pixels.
  */
  if (Drupal.overlay) {
    Drupal.overlay.getDisplacement = function (region) {
      var displacement = 0;
      var lastDisplaced = $('.overlay-displace-' + region + ':last');
      if (lastDisplaced.length) {
        displacement = lastDisplaced.offset().top + lastDisplaced.outerHeight();

        // In modern browsers (including IE9), when box-shadow is defined, use the
        // normal height.
        var cssBoxShadowValue = lastDisplaced.css('box-shadow');
        var boxShadow = (typeof cssBoxShadowValue !== 'undefined' && cssBoxShadowValue !== 'none');
        // In IE8 and below, we use the shadow filter to apply box-shadow styles to
        // the toolbar. It adds some extra height that we need to remove.
        if (!boxShadow && /DXImageTransform\.Microsoft\.Shadow/.test(lastDisplaced.css('filter'))) {
          displacement -= lastDisplaced[0].filters.item('DXImageTransform.Microsoft.Shadow').strength;
          displacement = Math.max(0, displacement);
        }
      }
      return displacement;
    };
  };

})(jQuery);
;
Drupal.settings.spotlight_settings = Drupal.settings.spotlight_settings || {};

(function ($) {

  /**
   * Form behavior for Spotlight
   */
  Drupal.behaviors.panopolySpotlight = {
    attach: function (context, settings) {
      if ($('.field-name-field-basic-spotlight-items', context).length) {
        $('.field-name-field-basic-spotlight-items', context).each(function() {
          var rotation_time = $(this).find('.panopoly-spotlight-buttons-wrapper').data('rotation-time'),
              $widget = $(this),
              $slides = $widget.find('.panopoly-spotlight'),
              $controls = $widget.find('.panopoly-spotlight-buttons-wrapper li'),
              current = 0,
              timer = null;

          function start() {
            if (timer === null) {
              timer = setTimeout(rotate, rotation_time);
            }
          }

          function stop() {
            if (timer !== null) {
              clearTimeout(timer);
              timer = null;
            }
          }

          function rotate() {
            // Increment the current slide.
            current++;
            if (current >= $controls.length) {
              current = 0;
            }

            // Click the control for the next slide.
            $controls.eq(current).children('a').trigger('click.panopoly-widgets-spotlight');
          }

          // Navigation is hidden by default, display it if JavaScript is enabled.
          $widget.find('.panopoly-spotlight-buttons-wrapper').css('display', 'block');

          // Hide all the slides but the first one.
          $slides.hide();
          $slides.eq(0).show();
          $controls.eq(0).addClass('active');

          // Bind the event for the slide numbers.
          $controls.once('panopoly-spotlight').children('a').bind('click.panopoly-widgets-spotlight', function (event) {
            var selector = $(this).attr('href');
            if (selector.indexOf('#') === 0) {
              event.preventDefault();

              // Mark the slide number as active.
              $controls.removeClass('active');
              $(this).parent().addClass('active');

              // Hide all slides but the selected one.
              $slides.hide();
              $slides.filter(selector).show();

              // Start the timer over if it's running.
              if (timer !== null) {
                stop();
                start();
              }

              return false;
            }
          });

          // Bind events to all the extra buttonts.
          $widget.find('.panopoly-spotlight-pause-play').once('panopoly-spotlight').bind('click.panopoly-widgets-spotlight', function(event) {
            event.preventDefault();
            if ($(this).hasClass('paused')) {
              start();
              $(this).text(Drupal.t('Pause'));
              $(this).removeClass('paused');
            }
            else {
              stop();
              $(this).text(Drupal.t('Play'));
              $(this).addClass('paused');
            }
          });
          if ($widget.find('.panopoly-spotlight-previous').length && $widget.find('.panopoly-spotlight-next').length) {
            $widget.find('.panopoly-spotlight-previous').once('panopoly-spotlight').bind('click.panopoly-widgets-spotlight', function (event) {
              event.preventDefault();
              $widget.find('.panopoly-spotlight-pause-play:not(.paused)').trigger('click.panopoly-widgets-spotlight');
              var activeControl = $($controls.filter('.active'));

              if (activeControl.prev().length != 0) {
                activeControl.prev().children('a').trigger('click.panopoly-widgets-spotlight');
              }
              else {
                $controls.last().children('a').trigger('click.panopoly-widgets-spotlight');
              }
            });
            $widget.find('.panopoly-spotlight-next').once('panopoly-spotlight').bind('click.panopoly-widgets-spotlight', function (event) {
              event.preventDefault();
              $widget.find('.panopoly-spotlight-pause-play:not(.paused)').trigger('click.panopoly-widgets-spotlight');
              var activeControl = $($controls.filter('.active'));

              if (activeControl.next().length != 0) {
                activeControl.next().children('a').trigger('click.panopoly-widgets-spotlight');
              }
              else {
                $controls.first().children('a').trigger('click.panopoly-widgets-spotlight');
              }
            });
          }

          start();
        });
      }
    }
  };

})(jQuery);
;
ï»¿/*!
 * jQuery lockfixed plugin
 * http://www.directlyrics.com/code/lockfixed/
 *
 * Copyright 2012-2015 Yvo Schaap
 * Released under the MIT license
 * http://www.directlyrics.com/code/lockfixed/license.txt
 *
 * Date: Sun March 30 2015 12:00:01 GMT
 */
(function($, undefined) {
  $.extend({
    /**
     * Lockfixed initiated
     * @param {Element} el - a jquery element, DOM node or selector string
     * @param {Object} config - offset - forcemargin
     */
    "lockfixed": function(el, config) {
      if (config && config.offset) {
        config.offset.bottom = parseInt(config.offset.bottom, 10);
        config.offset.top = parseInt(config.offset.top, 10);
      } else {
        config.offset = {
          bottom: 100,
          top: 0
        };
      }
      var el = $(el);
      if (el && el.offset()) {
        var el_position = el.css("position"),
          el_margin_top = parseInt(el.css("marginTop"), 10),
          el_position_top = el.css("top"),
          el_top = el.offset().top,
          pos_not_fixed = false;

        //We prefer feature testing, too much hassle for the upside
        //while prettier to use position: fixed (less jitter when scrolling)
        //iOS 5+ && Android does has fixed support, but results in issue with toggeling between fixed and viewport zoom

        if (config.forcemargin === true || navigator.userAgent.match(/\bMSIE (4|5|6)\./) || navigator.userAgent.match(/\bOS ([0-9])_/) || navigator.userAgent.match(/\bAndroid ([0-9])\./i)) {
          pos_not_fixed = true;
        }

        // We wrap the element with the height of the lockfixed, because position: fixed removes the height leaving an empty area (and some jitter). WCMC adds the height of the Jump to Top.
        var heightWithJump = el.outerHeight() + 110;
        el.wrap("<div class='lf-ghost' style='height:" + heightWithJump + "px;display:" + el.css("display") + "'></div>");

        // Bind to most comment events that will need to recalculate our lockfixed position
        $(window).bind('DOMContentLoaded load scroll resize orientationchange lockfixed:pageupdate', el, function(e) {
          // http://www.fourfront.us/blog/jquery-window-width-and-media-queries
          if ($(".information-column").css("float") === "left" &&
            // Only Pin if sidebar is NOT longer than the main content area
            $(".information-column").height() < $("#main-content").height()) {
            // if we have a input focus don't change this (for smaller screens)
            if (pos_not_fixed && document.activeElement && document.activeElement.nodeName === "INPUT") {
              return;
            }

            //el_width is set by looking at the ghost parent container because that is not affected by css position: fixed
            var top = 0,
              el_height = el.outerHeight(),
              el_width = el.parent().innerWidth() - parseInt(el.css("marginLeft"), 10) - parseInt(el.css("marginRight"), 10),
              max_height = $(document).height() - config.offset.bottom,
              scroll_top = $(window).scrollTop();

            // if element is not currently fixed position, reset measurements ( this handles DOM changes in dynamic pages )
            if (el.css("position") !== "fixed" && !pos_not_fixed) {
              el_top = el.offset().top;
              el_position_top = el.css("top");
            }

            if (scroll_top >= (el_top - (el_margin_top ? el_margin_top : 0) - config.offset.top)) {

              if (max_height < (scroll_top + el_height + el_margin_top + config.offset.top)) {
                top = (scroll_top + el_height + el_margin_top + config.offset.top) - max_height;
              } else {
                top = 0;
              }

              if (pos_not_fixed) {
                el.css({
                  'marginTop': (parseInt(scroll_top - el_top - top, 10) + (2 * config.offset.top)) + 'px'
                });
              } else {
                el.css({
                  'position': 'fixed',
                  'top': (config.offset.top - top) + 'px',
                  'width': el_width + "px"
                });
              }
            } else {
              el.css({
                'position': el_position,
                'top': el_position_top,
                'width': 'auto',
                'marginTop': (el_margin_top && !pos_not_fixed ? el_margin_top : 0) + "px"
              });
            }
          } else {
            el.css({'position':'static', 'width':'auto'});
          }
        });
      }
    }
  });

  $(window).load(function() {
    // Pinned Content Sidebar
    var footerOffset = $('.page-footer').outerHeight(true) + 40;
    $.lockfixed(".information-sidebar",{offset: {top: 35, bottom: footerOffset}});
  });

  // Check Position on Resize, timeout for performance
  var resizeTimer; // Set resizeTimer to empty so it resets on page load

  function resizeFunction() {
    $(document).trigger('lockfixed:pageupdate');
  }

  // On resize, run the function and reset the timeout
  $(window).resize(function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resizeFunction, 250);
  });

})(jQuery);;
/*!
 * @copyright Copyright (c) 2016 IcoMoon.io
 * @license   Licensed under MIT license
 *            See https://github.com/Keyamoon/svgxuse
 * @version   1.1.20
 */
(function(){if(window&&window.addEventListener){var c=Object.create(null),l,q,d=function(){clearTimeout(q);q=setTimeout(l,100)},n=function(){},t=function(){var e;window.addEventListener("resize",d,!1);window.addEventListener("orientationchange",d,!1);window.MutationObserver?(e=new MutationObserver(d),e.observe(document.documentElement,{childList:!0,subtree:!0,attributes:!0}),n=function(){try{e.disconnect(),window.removeEventListener("resize",d,!1),window.removeEventListener("orientationchange",d,
!1)}catch(c){}}):(document.documentElement.addEventListener("DOMSubtreeModified",d,!1),n=function(){document.documentElement.removeEventListener("DOMSubtreeModified",d,!1);window.removeEventListener("resize",d,!1);window.removeEventListener("orientationchange",d,!1)})},u=function(e){var c,d=location.hostname;if(window.XMLHttpRequest){c=new XMLHttpRequest;var m=document.createElement("a");m.href=e;e=m.hostname;c=void 0===c.withCredentials&&""!==e&&e!==d?XDomainRequest||void 0:XMLHttpRequest}return c};
l=function(){function e(){--p;0===p&&(n(),t())}function d(b){return function(){!0!==c[b.base]&&b.useEl.setAttributeNS("http://www.w3.org/1999/xlink","xlink:href","#"+b.hash)}}function l(b){return function(){var c=document.body,a=document.createElement("x");b.onload=null;a.innerHTML=b.responseText;if(a=a.getElementsByTagName("svg")[0])a.setAttribute("aria-hidden","true"),a.style.position="absolute",a.style.width=0,a.style.height=0,a.style.overflow="hidden",c.insertBefore(a,c.firstChild);e()}}function m(a){return function(){a.onerror=
null;a.ontimeout=null;e()}}var b,g,f,h,p=0,a,k;n();k=document.getElementsByTagName("use");for(h=0;h<k.length;h+=1){try{g=k[h].getBoundingClientRect()}catch(v){g=!1}f=k[h].getAttributeNS("http://www.w3.org/1999/xlink","href").split("#");b=f[0];f=f[1];a=g&&0===g.left&&0===g.right&&0===g.top&&0===g.bottom;g&&0===g.width&&0===g.height&&!a?(b.length||!f||document.getElementById(f)||(b=""),b.length&&(a=c[b],!0!==a&&setTimeout(d({useEl:k[h],base:b,hash:f}),0),void 0===a&&(f=u(b),void 0!==f&&(a=
new f,c[b]=a,a.onload=l(a),a.onerror=m(a),a.ontimeout=m(a),a.open("GET",b),a.send(),p+=1)))):a?b.length&&c[b]&&d({useEl:k[h],base:b,hash:f})():void 0===c[b]?c[b]=!0:c[b].onload&&(c[b].abort(),delete c[b].onload,c[b]=!0)}k="";p+=1;e()};window.addEventListener("load",function r(){window.removeEventListener("load",r,!1);q=setTimeout(l,0)},!1)}})();
;

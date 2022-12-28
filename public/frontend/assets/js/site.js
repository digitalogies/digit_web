var App = (function(){

  const appConfig = {
    windowHeight : window.innerHeight,
    windowWidth : window.innerWidth,
    body: $('body'),
    scrollPosition : document.getElementsByTagName('html')[0].scrollTop,
    scrollHeight: document.documentElement.scrollHeight - document.documentElement.clientHeight
  };

  const _fancyBox = ()=>{

    if($('#myCarousel').length){
      const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
        preload: 1
        });

        Fancybox.assign('[data-fancybox="carousel-gallery"]', {
        closeButton: "top",
        Thumbs: false,
        Carousel: {
          Dots: true,
          on: {
            change: (that) => {
              myCarousel.slideTo(myCarousel.getPageforSlide(that.page), {
                friction: 0
              });
            }
          }
        }
      });
    }


  };

  const _wowAnimation = ()=>{
    (function() {
      var Util,
        __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

      Util = (function() {
        function Util() {}

        Util.prototype.extend = function(custom, defaults) {
          var key, value;
          for (key in custom) {
            value = custom[key];
            if (value != null) {
              defaults[key] = value;
            }
          }
          return defaults;
        };

        Util.prototype.isMobile = function(agent) {
          return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
        };

        return Util;

      })();

      this.WOW = (function() {
        WOW.prototype.defaults = {
          boxClass: 'wow',
          animateClass: 'animated',
          offset: 0,
          mobile: true
        };

        function WOW(options) {
          if (options == null) {
            options = {};
          }
          this.scrollCallback = __bind(this.scrollCallback, this);
          this.scrollHandler = __bind(this.scrollHandler, this);
          this.start = __bind(this.start, this);
          this.scrolled = true;
          this.config = this.util().extend(options, this.defaults);
        }

        WOW.prototype.init = function() {
          var _ref;
          this.element = window.document.documentElement;
          if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
            return this.start();
          } else {
            return document.addEventListener('DOMContentLoaded', this.start);
          }
        };

        WOW.prototype.start = function() {
          var box, _i, _len, _ref;
          this.boxes = this.element.getElementsByClassName(this.config.boxClass);
          if (this.boxes.length) {
            if (this.disabled()) {
              return this.resetStyle();
            } else {
              _ref = this.boxes;
              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                box = _ref[_i];
                this.applyStyle(box, true);
              }
              window.addEventListener('scroll', this.scrollHandler, false);
              window.addEventListener('resize', this.scrollHandler, false);
              return this.interval = setInterval(this.scrollCallback, 50);
            }
          }
        };

        WOW.prototype.stop = function() {
          window.removeEventListener('scroll', this.scrollHandler, false);
          window.removeEventListener('resize', this.scrollHandler, false);
          if (this.interval != null) {
            return clearInterval(this.interval);
          }
        };

        WOW.prototype.show = function(box) {
          this.applyStyle(box);
          return box.className = "" + box.className + " " + this.config.animateClass;
        };

        WOW.prototype.applyStyle = function(box, hidden) {
          var delay, duration, iteration;
          duration = box.getAttribute('data-wow-duration');
          delay = box.getAttribute('data-wow-delay');
          iteration = box.getAttribute('data-wow-iteration');
          return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
        };

        WOW.prototype.resetStyle = function() {
          var box, _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            _results.push(box.setAttribute('style', 'visibility: visible;'));
          }
          return _results;
        };

        WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
          var style;
          style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
          if (duration) {
            style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
          }
          if (delay) {
            style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
          }
          if (iteration) {
            style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
          }
          return style;
        };

        WOW.prototype.scrollHandler = function() {
          return this.scrolled = true;
        };

        WOW.prototype.scrollCallback = function() {
          var box;
          if (this.scrolled) {
            this.scrolled = false;
            this.boxes = (function() {
              var _i, _len, _ref, _results;
              _ref = this.boxes;
              _results = [];
              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                box = _ref[_i];
                if (!(box)) {
                  continue;
                }
                if (this.isVisible(box)) {
                  this.show(box);
                  continue;
                }
                _results.push(box);
              }
              return _results;
            }).call(this);
            if (!this.boxes.length) {
              return this.stop();
            }
          }
        };

        WOW.prototype.offsetTop = function(element) {
          var top;
          top = element.offsetTop;
          while (element = element.offsetParent) {
            top += element.offsetTop;
          }
          return top;
        };

        WOW.prototype.isVisible = function(box) {
          var bottom, offset, top, viewBottom, viewTop;
          offset = box.getAttribute('data-wow-offset') || this.config.offset;
          viewTop = window.pageYOffset;
          viewBottom = viewTop + this.element.clientHeight - offset;
          top = this.offsetTop(box);
          bottom = top + box.clientHeight;
          return top <= viewBottom && bottom >= viewTop;
        };

        WOW.prototype.util = function() {
          return this._util || (this._util = new Util());
        };

        WOW.prototype.disabled = function() {
          return !this.config.mobile && this.util().isMobile(navigator.userAgent);
        };

        return WOW;

      })();

    }).call(this);


    wow = new WOW(
      {
        animateClass: 'animated',
        offset: 100
      }
    );
    wow.init();

  }

  const _tagsInput = ()=>{
    $(function () {
      $('input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');
    });
  } //Tags input

  const _scrollTop = ()=>{

    const checkScroll = ()=> {
      if ($(window).scrollTop() > 100) {
        $('#scroll').fadeIn();
        $('body').addClass('sticky-header');
      } else {
          $('#scroll').fadeOut();
          $('body').removeClass('sticky-header');
      }
    }

    checkScroll();



    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    let winHeight = appConfig.windowHeight;
    let body = appConfig.body;
    let stickyClass = 'sticky-header';
    let scrollHeight = appConfig.scrollHeight;

    appConfig.scrollPosition > appConfig.windowHeight ?
      body.addClass(stickyClass)
      :
      body.removeClass(stickyClass)
    ;

    $(window).scroll(function(){

      // Fixed AOS
      AOS.refresh();

      checkScroll();

      let scrollPosition = document.getElementsByTagName('html')[0].scrollTop;
      if(scrollPosition >= (winHeight/3)){
        body.addClass(stickyClass);
      }
      else{
        body.removeClass(stickyClass);
      }

      //Progress Menu
      let progressPercentage = Math.round(scrollPosition * 100 / scrollHeight) + 32;
      document.documentElement.style.setProperty('--menu-progress', `${progressPercentage}%`);

      if(scrollPosition > 10){
        document.documentElement.style.setProperty('--menu-progress', `${progressPercentage}%`);
      }else{
        document.documentElement.style.setProperty('--menu-progress', `0%`);
      }

      progressPercentage >= 100 ?
        $('body').addClass('progress-done')
        :
        $('body').removeClass('progress-done');
    });
    // window.addEventListener("scroll", function(e){

    // });
  } //scroll Top

  const _navToggle = ()=>{
      $('.nav-button').click(function(){
          $('body').toggleClass('nav-open');
          $('body').toggleClass('overflow_hide');
          $('#scroll').css('z-index','0');
      });
  } //_navToggle

  const _getCarousel = ()=> {

      //
      $('.carousel').slick({
          speed: 1000,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows:true,
          dots:true,
          centerMode: true,
          prevArrow:`<button type="button" class="slick-prev slick-arrow">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
<g>
	<path d="M160.5,192.05c14.17-12.15,28-23.99,41.82-35.83c18.37-15.74,36.73-31.5,55.12-47.22c4.57-3.91,7.13-8.68,6.35-14.76
		c-0.79-6.18-4.15-10.63-9.98-12.95c-6-2.38-11.55-1.25-16.41,2.87c-9.71,8.22-19.34,16.53-29,24.81
		c-27.09,23.2-54.16,46.43-81.3,69.58c-5.35,4.57-8.23,9.91-6.72,17.08c0.78,3.69,2.8,6.62,5.62,9.04
		c37.43,32.03,74.84,64.08,112.31,96.07c6.9,5.89,16.76,5.04,22.47-1.67c5.95-6.99,5.05-16.69-2.26-22.95
		c-31.62-27.11-63.27-54.2-94.91-81.29C162.67,194.02,161.76,193.18,160.5,192.05z"/>
</g>
</svg>
          </button>`,
          nextArrow: `<button type="button" class="slick-next slick-arrow">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
<g>
	<path d="M224.17,192.05c-14.17-12.15-28-23.99-41.82-35.83c-18.37-15.74-36.73-31.5-55.12-47.22c-4.57-3.91-7.13-8.68-6.35-14.76
		c0.79-6.18,4.15-10.63,9.98-12.95c6-2.38,11.55-1.25,16.41,2.87c9.71,8.22,19.34,16.53,29,24.81c27.09,23.2,54.16,46.43,81.3,69.58
		c5.35,4.57,8.23,9.91,6.72,17.08c-0.78,3.69-2.8,6.62-5.62,9.04c-37.43,32.03-74.84,64.08-112.31,96.07
		c-6.9,5.89-16.76,5.04-22.47-1.67c-5.95-6.99-5.05-16.69,2.26-22.95c31.62-27.11,63.27-54.2,94.91-81.29
		C222,194.02,222.91,193.18,224.17,192.05z"/>
</g>
</svg>
          </button>`,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              // centerMode: true,

            }

          }, {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: true,
              infinite: true,

            }
          },  {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }]
        });

        // For testimonials
        $('.testimonial_slider').slick({
          speed: 1000,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows:true,
          dots:true,
          fade:true,
          centerMode: true,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              // centerMode: true,

            }

          }, {
            breakpoint: 800,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,

            }
          },  {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }]
        });
        // For section hero
        $('.home_slider').slick({
          speed: 2000,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          easing: 'easeOutElastic',
          arrows:false,
          dots:true,
          fade:true,
          centerMode: true,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              // centerMode: true,

            }

          }, {
            breakpoint: 800,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,

            }
          },  {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }]
        });
        // For Members
        $('.member_slider').slick({
          speed: 1000,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows:false,
          dots:true,
          centerMode: true,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              // centerMode: true,

            }

          }, {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: true,
              infinite: true,

            }
          },  {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          },  {
            breakpoint: 320,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }]
        });
  } //_getCarousel

  const _getCounter = ()=> {
      var counters = $(".count");
      var countersQuantity = counters.length;
      var counter = [];

      for (i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
      }

      var count = function(start, value, id) {
      var localStart = start;
      setInterval(function() {
          if (localStart < value) {
          localStart++;
          counters[id].innerHTML = localStart;
          }
      }, 40);
      }

      for (j = 0; j < countersQuantity; j++) {
      count(0, counter[j], j);
      }
  } //_getCounter

  // const _imageTildEffect = ()=>{
  //     var x = 0.5;
  //     var y = 0.5;
  //     var maxRotation = 18;
  //     var perspective = 1000;

  //     $(document).mousemove(function(event){
  //         var pos = [event.pageX / document.body.clientWidth, event.pageY / document.body.clientHeight];
  //         for (var i=0;i < pos.length;i++) {
  //         if (pos[i]<0) {
  //             pos[i] = 0;
  //         }
  //         if (pos[i]>1) {
  //             pos[i] = 1;
  //         }
  //         }
  //         pos[0] = Math.round(((pos[0]*2)-1)*maxRotation);
  //         pos[1] = Math.round(((pos[1]*-2)+1)*maxRotation);
  //     $(".img").css("transform", "perspective(" + perspective + ") rotateX("+pos[1]+"deg) rotateY("+pos[0]+"deg)");
  //     $(".img").css("-webkit-transform", "perspective(" + perspective +    ") rotateX("+pos[1]+"deg) rotateY("+pos[0]+"deg)");
  //     });
  // }


  const _scrollOneSection = ()=> {
    // $.scrollify({
    //   section : ".section_100vh",
    //   interstitialSection : "",
    //   easing: "easeOutExpo",
    //   scrollSpeed: 1100,
    //   offset : 0,
    //   scrollbars: true,
    //   standardScrollElements: "",
    //   setHeights: true,
    //   overflowScroll: true,
    //   updateHash: true,
    //   touchScroll:true,
    // });
    const makeSectionScroll = ()=> {
      if(window.matchMedia("(min-width: 1024px)").matches){
        $.scrollify({
          section : "#MainContent .scrolly",
          // offset : getHeaderHeight,
          interstitialSection: '',//'#MainContent .scrolly',
          updateHash: false,
          setHeights: false,
          easing: "easeOutExpo",
          scrollSpeed: 100,
          offset: 0,
          scrollbars: true,
          standardScrollElements: "",
          setHeights: false,
          overflowScroll: true,
          updateHash: true,

        });
      }
    }

    makeSectionScroll();

    $(window).resize(makeSectionScroll);

  }

  const _formValidate = ()=> {
    $(document).ready(function(){
      $("input[type=text]").attr("oninput","this.value = this.value.replace(/[^a-z,A-Z ]/, '')");
      $("input[type=email]").attr("oninput","this.value = this.value.replace(/[^a-z,A-Z ]{0,9}/, '')")
    });
  }
  return {
      init: function(){
          _navToggle();
          _getCarousel();
          _getCounter();
          // _imageTildEffect();
          _scrollTop();
          _tagsInput();
          _wowAnimation();
          _fancyBox();
          _scrollOneSection();
          _formValidate();
      }
  }
})();


$(document).ready(function(){
  App.init();
});

if($('[data-aos]').length){
AOS.init({
  // offset: 200,
  // duration: 500,
  easing: 'ease-in-sine',//'ease-in-quad',
  // delay: 0,
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 0,//50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 0,//99, // the delay on throttle used while scrolling the page (advanced)

  // Settings that can be overridden on per-element basis, by data-aos-* attributes:
  offset: 0, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 3000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: true, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

// window.addEventListener('load', AOS.refresh);
// document.querySelectorAll('[data-aos]').forEach((item)=>{
//   item.addEventListener('load', ()=>{
//     AOS.refresh();
//   })
// })

}


if($('#particles-js').length){
particlesJS("particles-js", {"particles":
  {"number":
    {
      "value":260,
      "density":{"enable":true,"value_area":800}},
      "color":{"value":"#ffffff"},
      "shape":{
          "type":"circle",
          "stroke":{"width":0,"color":"#000000"},
          "polygon":{"nb_sides":5},
          "image":{"src":"img/github.svg","width":100,"height":100}},
          "opacity":{
              "value":0.60,
              "random":true,
              "anim":{
                "enable":true,
                "speed":1,
                "opacity_min":0,
                "sync":false
              }
            },
            "size":{
              "value":3,
              "random":true,
              "anim":{
                "enable":false,
                "speed":4,
                "size_min":0.3,
                "sync":false
              }
            },
            "line_linked":{
              "enable":false,
              "distance":150,
              "color":"#ffffff",
              "opacity":0.4,
              "width":1
            },
            "move":{
              "enable":true,
              "speed":1,
              "direction":"none",
              "random":true,
              "straight":false,
              "out_mode":"out",
              "bounce":false,
              "attract":{
                      "enable":false,
                      "rotateX":600,
                      "rotateY":600
                    }
                  }
            },
            "interactivity":{
                  "detect_on":"canvas",
                  "events":{
                        "onhover":{
                                  "enable":true,
                                  "mode":"bubble"
                                },
                        "onclick":{
                                  "enable":true,
                                  "mode":"repulse"
                                },
                        "resize":true
                      },
                  "modes":{
                        "grab":{
                              "distance":400,
                              "line_linked":{"opacity":1}
                            },
                        "bubble":{
                              "distance":250,
                              "size":0,
                              "duration":2,
                              "opacity":0,
                              "speed":3
                            },
                        "repulse":{
                              "distance":400,
                              "duration":0.4
                              },
                        "push":{"particles_nb":4},
                        "remove":{"particles_nb":2}
                      }
                    },
                    "retina_detect":true
                });
}

window.onload = function(){

  // Preloader
  setTimeout(()=>{
    $('#preloader').hide();
  },2200);

  // Thankyou Popup
  if($('#staticBackdrop').length){

      $('#staticBackdrop').modal('show');

      setTimeout(()=>{
          $('#staticBackdrop').modal('hide');
      },3000);

  }
  }
/* ---- particles.js config ---- */

// $(".home_slider").on("beforeChange", function (event, slick, currentSlide, nextSlide){
//   if (currentSlide === 0) {
//     $(".section-hero").removeClass("back_4");
//     $(".section-hero").addClass("back_2");
//   }
//   if (currentSlide === 1) {
//     $(".section-hero").removeClass("back_2");
//     $(".section-hero").addClass("back_3");
//   }
//   if (currentSlide === 2) {
//     $(".section-hero").removeClass("back_3");
//     $(".section-hero").addClass("back_4");
//   }
//   if (currentSlide === 3) {
//     $(".section-hero").removeClass("back_4");
//   }

//   // console.log("current slide: ", currentSlide);  
// });

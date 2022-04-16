<script src="{{ asset('webssets/js/jquery.min.j')}}s"></script>
  <script src="{{ asset('webssets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('webssets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('webssets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('webssets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('webssets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('webssets/js/aos.js')}}"></script>
  <script src="{{ asset('webssets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('webssets/js/scrollax.min.js')}}"></script>


  <script src="{{ asset('webssets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <script src="{{ asset('webssets/js/main.js')}}"></script>



  	<script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript"></script>

      <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
      <script>
          $('.filters ul li').click(function() {
              $('.filters ul li').removeClass('active');
              $(this).addClass('active');

              var data = $(this).attr('data-filter');
              $grid.isotope({
                  filter: data,



              })
              // $grid2.isotope({
              //     filter: data,



              // })
          });

          var $grid = $(".grid").isotope({
              itemSelector: ".all",

              isOriginLeft: false,
            masonry: {
                  columnWidth: ".all"
              }
          })

          // var $grid2 = $(".grid").isotope({
          //     itemSelector: ".home-all",

          //     isOriginLeft: false,
          //     isOriginTop: true,

          //     masonry: {
          //         columnWidth: ".home-all"
          //     }
          // })
      </script>
	  <script>
	  	$(document).ready(function () {
	  		$(".SlickCarousel").slick({
	  			rtl: false, // If RTL Make it true & .slick-slide{float:right;}
	  			autoplay: true,
	  			autoplaySpeed: 5000, //  Slide Delay
	  			speed: 800, // Transition Speed
	  			slidesToShow: 4, // Number Of Carousel
	  			slidesToScroll: 1, // Slide To Move
	  			pauseOnHover: false,
	  			appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
	  			prevArrow: '<span class="Slick-Prev"></span>',
	  			nextArrow: '<span class="Slick-Next"></span>',
	  			easing: "linear",
	  			responsive: [
				  {
				  	breakpoint: 1000, settings: {
				  		slidesToShow: 3,
				  	}
				  },
				  {
				  	breakpoint: 801, settings: {
				  		slidesToShow: 2,
				  	}
				  },
				  {
				  	breakpoint: 641, settings: {
				  		slidesToShow: 2,
				  	}
				  },
				  {
				  	breakpoint: 481, settings: {
				  		slidesToShow: 1,
				  	}
				  },
	  			],
	  		})
	  	})
	  </script>

  	<script>
	  	$(document).ready(function () {
	  		$(".SlickCarousel1").slick({
	  			rtl: false, // If RTL Make it true & .slick-slide{float:right;}
	  			autoplay: true,
	  			autoplaySpeed: 5000, //  Slide Delay
	  			speed: 800, // Transition Speed
	  			slidesToShow: 1.1, // Number Of Carousel
	  			slidesToScroll: 1, // Slide To Move
	  			pauseOnHover: false,
	  			appendArrows: $(".Container .Head2 .Arrows"), // Class For Arrows Buttons
	  			prevArrow: '<span class="Slick-Prev"></span>',
	  			nextArrow: '<span class="Slick-Next"></span>',
	  			easing: "linear",
	  			responsive: [
				  {
				  	breakpoint: 1000, settings: {
				  		slidesToShow: 1.1,
				  	}
				  },
				  {
				  	breakpoint: 801, settings: {
				  		slidesToShow: 1.1,
				  	}
				  },
				  {
				  	breakpoint: 641, settings: {
				  		slidesToShow: 1.1,
				  	}
				  },
				  {
				  	breakpoint: 481, settings: {
				  		slidesToShow: 1,
				  	}
				  },
	  			],
	  		})
	  	})
  	</script>

	  <script>
	  	$('.tarkikComandSlider').slick({
	  		slidesToShow: 4,
	  		slidesToScroll: 1,
	  		autoplay: true,
	  		autoplaySpeed: 5000,
	  		dots: true,
	  		nextArrow: false,
	  		prevArrow: false,
	  		responsive: [
				  {
				  	breakpoint: 1000, settings: {
				  		slidesToShow: 3,
				  	}
				  },
				  {
				  	breakpoint: 801, settings: {
				  		slidesToShow: 2,
				  	}
				  },
				  {
				  	breakpoint: 641, settings: {
				  		slidesToShow: 2,
				  	}
				  },
				  {
				  	breakpoint: 481, settings: {
				  		slidesToShow: 1,
				  	}
				  },
	  		],
	  	});
	  </script>
  	<script>
	  	$('.tarkikComandSlider1').slick({
	  		slidesToShow: 2,
	  		slidesToScroll: 1,
	  		autoplay: true,
	  		autoplaySpeed: 5000,
	  		dots: true,
	  		nextArrow: false,
	  		prevArrow: false,
	  		responsive: [
				  {
				  	breakpoint: 1000, settings: {
				  		slidesToShow: 2,
				  	}
				  },
				  {
				  	breakpoint: 801, settings: {
				  		slidesToShow: 1,
				  	}
				  },
				  {
				  	breakpoint: 641, settings: {
				  		slidesToShow: 1,
				  	}
				  },
				  {
				  	breakpoint: 481, settings: {
				  		slidesToShow: 1,
				  	}
				  },
	  		],
	  	});
  	</script>

      @yield('scripts')
  </body>
</html>

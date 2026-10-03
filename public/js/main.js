(function($) {

	"use strict";


	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

  var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: false,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// magnific popup
	if ($.fn.magnificPopup) {
		$('.image-popup').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			fixedContentPos: true,
			mainClass: 'mfp-no-margins mfp-with-zoom',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0, 1]
			},
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('data-title') || item.el.attr('title') || '';
				}
			},
			zoom: {
				enabled: true,
				duration: 300
			}
		});
	}

	var portfolioGallery = function() {
		$('[data-portfolio-gallery]').each(function() {
			var $gallery = $(this);
			var $items = $gallery.find('[data-gallery-item]');
			var $section = $gallery.closest('section');
			var $pagination = $section.find('[data-gallery-pagination]');
			var itemsPerPage = parseInt($gallery.data('items-per-page'), 10) || 8;
			var pageCount = Math.max(1, Math.ceil($items.length / itemsPerPage));
			var currentPage = 1;

			var showPage = function(page, scrollToGallery) {
				currentPage = ((page - 1 + pageCount) % pageCount) + 1;

				$items.each(function(index) {
					var isVisible = index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage;
					var $item = $(this);

					if (isVisible) {
						$item.show().addClass('fadeInUp ftco-animated');
					} else {
						$item.hide();
					}
				});

				$pagination.find('[data-gallery-page]').each(function() {
					var $link = $(this);
					var pageNumber = parseInt($link.data('gallery-page'), 10);

					$link.parent().toggleClass('active', pageNumber === currentPage);
				});

				if (scrollToGallery) {
					$('html, body').animate({
						scrollTop: $gallery.offset().top - 120
					}, 250);
				}
			};

			$pagination.on('click', '[data-gallery-page]', function(event) {
				event.preventDefault();
				showPage(parseInt($(this).data('gallery-page'), 10), true);
			});

			$pagination.on('click', '[data-gallery-prev]', function(event) {
				event.preventDefault();
				showPage(currentPage - 1, true);
			});

			$pagination.on('click', '[data-gallery-next]', function(event) {
				event.preventDefault();
				showPage(currentPage + 1, true);
			});

			showPage(1, false);
		});
	};
	portfolioGallery();

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


  var counter = function() {
		
		$('#section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


})(jQuery);

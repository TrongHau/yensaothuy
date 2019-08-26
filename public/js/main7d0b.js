$(window).on('load', function(){
	$('#insLoadpage').delay(1000).fadeOut('slow');
})
$(document).ready(function() {
	
	$('.btn-top-header').click(function() {
		$('.top-header-v2').slideToggle(400);
	});
	$(".slide-deals-of").owlCarousel({
		items: 2,
		autoplay: false,
		nav: false,
		loop: true,
		smartSpeed: 1000,
		margin: 30,
		dots: true,
		responsive: {
			300: {
				items: 1,
			},
			480: {
				items: 1,
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});
	function initializeClock(id, endtime, clock) {

		var daysSpan = clock.querySelector('.days');
		var hoursSpan = clock.querySelector('.hours');
		var minutesSpan = clock.querySelector('.minutes');
		var secondsSpan = clock.querySelector('.seconds');



		function updateClock() {
			var t = getTimeRemaining(endtime);

			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			if (t.total <= 0) {
				clearInterval(timeinterval);
			}
		}

		updateClock();
		var timeinterval = setInterval(updateClock, 1000);
	}

	if ($('.clockdiv')) {
		var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
		$('.clockdiv').each(function(index, el) {
			initializeClock('clockdiv', deadline, el);
		});
	};


	$(".relative-slide").owlCarousel({
		items: 4,
		autoplay: false,
		nav: false,
		loop: true,
		smartSpeed: 1000,
		margin: 30,
		dots: true,
		responsive: {
			300: {
				items: 1,
			},
			480: {
				items: 2,
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 5
			}
		}
	});
	var flyToCartElem = function(imgtodrag,cart){
		if (imgtodrag) {
			var imgclone = imgtodrag.clone()
			.offset({
				top: imgtodrag.offset().top,
				left: imgtodrag.offset().left
			})
			.css({
				'opacity': '0.5',
				'position': 'absolute',
				'height': '150px',
				'width': '150px',
				'z-index': '9999999'
			})
			.appendTo($('body'))
			.animate({
				'top': cart.offset().top + 2,
				'left': cart.offset().left + 2,
				'width': 35,
				'height': 35
			}, 1000, 'easeInOutExpo');

			setTimeout(function () {

			}, 1500);

			imgclone.animate({
				'width': 0,
				'height': 0
			}, function () {
				$(this).detach()
			});
		}
	}

	$(document).on('click','.btnMobileMenu, .mask-hide-menu',function(){
		$('.main-menu').toggleClass('active-menu-mb');
	})
	$(document).on('click','.main-menu .menu-lv1 li a i', function(e){
		e.preventDefault();
		$(this).parent().toggleClass('open').next().slideToggle();
	});
	// $(document).on('click','.add-to-cart', function (e) {
	// 	e.preventDefault();
	// 	var cart = $('.icon-cart');
	// 	var imgtodrag = $(this).parents('.ct-box-op').find("img").eq(0);
	// 	flyToCartElem(imgtodrag,cart);
	// 	var id =$(this).attr('data-id');
	// 	var quantity = 1 ;
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: '/cart/add.js',
	// 		async: true,
	// 		data: 'quantity=' + quantity + '&id=' + id,
	// 		success: function(result){
	// 			//	alert('Bạn đã thêm' + ' ' + result.product_title + ' ' + 'vào giỏ hàng thành công !');
	// 			$.ajax({url: "/cart/?view=view", success: function(result){
	// 				$(".cart-header").html(result);
	// 			}});
	//
	// 			var x =	$('#amount1').val();
	// 			var y	= $('#amount2').val();
	//
	// 			console.log(x);
	// 		},
	// 		error: function(XMLHttpRequest, textStatus) {
	// 			//Haravan.onError(XMLHttpRequest, textStatus);
	// 			alert(XMLHttpRequest.responseJSON.description = 'Bạn không thể đặt quá số lượng tồn kho!');
	//
	// 		}
	// 	});
	// });
	// $('#quick-view-modal .btn-addcart').on('click', function (e) {
	// 	e.preventDefault();
	// 	var cart = $('.icon-cart');
	// 	var imgtodrag = $('#quick-view-modal .p-product-image-feature');
	// 	flyToCartElem(imgtodrag,cart);
	// 	var id =$('#quick-view-modal #p-select').val();
	// 	var quantity = parseInt($('#quick-view-modal .form-input input[type=number]').val()) || 1 ;
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: '/cart/add.js',
	// 		async: true,
	// 		data: 'quantity=' + quantity + '&id=' + id,
	// 		success: function(result){
	// 			$.ajax({url: "/cart/?view=view", success: function(result){
	// 				$(".cart-header").html(result);
	// 			}});
	// 		},
	// 		error: function(XMLHttpRequest, textStatus) {
	// 			alert(XMLHttpRequest.responseJSON.description = 'Bạn không thể đặt quá số lượng tồn kho!');
	//
	// 		}
	// 	});
	// });



	$(window).scroll(function(){
		var k = $('.header2').innerHeight();
		if($(window).scrollTop() > k){

			$('.header2').addClass('sticky-header');
		}else if($(window).scrollTop() < 1){
			$('.header2').removeClass('sticky-header');

		}
	});
	var k = 'onsale'; 
	var x = '.';
	var n= x+k+1;
	console.log(n);

	$('.gallery-grid').isotope({ filter:n });
	// $.ajax({url: "/cart/?view=view", success: function(result){
	// 	$(".cart-header").html(result);
	// }});

	$(".slide-main-h3").owlCarousel({
		items: 1,
		lazyLoad: true,
		autoplay: true,
		smartSpeed: 1000,
		nav: false,
		loop: false,
		dots: true,
	});
	$('#search').click(function() {
		$('.light-box-search').addClass('show-search');
		$('body').addClass('no-scroll');
	});
	$('.hide-search').click(function() {
		$('.light-box-search').removeClass('show-search');
		$('body').removeClass('no-scroll');
	});


	$(".slide-best-sell-v3").owlCarousel({
		items: 6,
		autoplay: false,
		nav: true,
		loop: true,
		smartSpeed: 1000,
		margin: 30,
		navText: ['‹' , '›'],
		dots: true,
		responsive: {
			319: {
				items: 1,
			},
			320: {
				items: 2,
				margin: 15
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 5
			},
			1400: {
				items: 6
			}
		}
	});


	function getTimeRemaining(endtime) {
		var t = Date.parse(endtime) - Date.parse(new Date());
		var seconds = Math.floor((t / 1000) % 60);
		var minutes = Math.floor((t / 1000 / 60) % 60);
		var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		var days = Math.floor(t / (1000 * 60 * 60 * 24));
		return {
			'total': t,
			'days': days,
			'hours': hours,
			'minutes': minutes,
			'seconds': seconds
		};
	}




	$(".slide-na").owlCarousel({
		items: 1,
		autoplay: false,
		smartSpeed: 1000,
		nav: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		loop: true,
		dots: false,
	});

	$(".slider-clients").owlCarousel({
		items: 1,
		autoplay: false,
		smartSpeed: 1000,
		nav: true,
		navText: ['‹' , '›'],
		loop: false,
		dots: false,
	});


	$(".branding-v3").owlCarousel({
		items: 7,
		autoplay: false,
		nav: false,
		loop: true,
		smartSpeed: 1000,
		margin: 30,
		dots: true,
		responsive: {
			300: {
				items: 2,
			},
			480: {
				items: 3,
			},
			768: {
				items: 4
			},
			992: {
				items: 6
			},
			1200: {
				items: 7
			}
		}
	});

	$('.btn-showgp').click(function() {
		$('.ct-list-v1').fadeToggle(300);
		$(this).toggleClass('show-close');
	});


	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false,
		gallery: {
			enabled: true,
		}
	});





	$(window).load(function() {

		$('.filters-button-group').on('click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[filterValue] || filterValue;
			$grid.isotope({
				filter: filterValue
			});
		});

		$('.grid').isotope({
			// set itemSelector so .grid-sizer is not used in layout
			itemSelector: '.grid-item',
			percentPosition: true
		});


		$('.gallery-grid').isotope({
			// options
			itemSelector: '.grid-item',
			layoutMode: 'fitRows'
		});

		var $grid = $('.gallery-grid').isotope({
			itemSelector: '.element-item',
			layoutMode: 'fitRows',
			masonry: {
				columnWidth: 100,
				gutter: 20
			}
		});
	});



	// $('.cart-item-remove').click(function(event) {
	// 	console.log('abc');
	//
	// 	var productId = $(this).parents('.cart-item-content').attr('data-cart');
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: '/cart/delete.js',
	// 		async: true,
	// 		data:  '&id=' + productId,
	// 		success: function(result){
	// 			alert('Bạn đã xóa' + ' ' + result.product_title + ' ' + 'vào giỏ hàng thành công !');
	// 			$.ajax({url: "/cart/?view=view", success: function(result){
	// 				$(".cart-header").html(result);
	// 			}});
	//
	// 			var x =	$('#amount1').val();
	// 			var y	= $('#amount2').val();
	//
	// 			console.log(x);
	// 		}});
	// });

	$('.description-product .qtyplus').click(function(e) {
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		fieldName = $(this).attr('field');
		// Get its current value
		var currentVal = parseInt($('input[name=' + fieldName + ']').val());
		// If is not undefined
		if (!isNaN(currentVal)) {
			// Increment
			$('input[name=' + fieldName + ']').val(currentVal + 1);
		} else {
			// Otherwise put a 0 there
			$('input[name=' + fieldName + ']').val(1);
		}
	});
	// This button will decrement the value till 0
	$(".description-product .qtyminus").click(function(e) {
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		fieldName = $(this).attr('field');
		// Get its current value
		var currentVal = parseInt($('input[name=' + fieldName + ']').val());
		// If it isn't undefined or its greater than 0
		if (!isNaN(currentVal) && currentVal > 1) {
			// Decrement one
			$('input[name=' + fieldName + ']').val(currentVal - 1);
		} else {
			// Otherwise put a 0 there
			$('input[name=' + fieldName + ']').val(1);
		}
	});

	//
	// $('.cart-item-remove').click(function(event) {
	// 	console.log('abc');
	//
	// 	var productId = $(this).parents('.cart-item-content').attr('data-cart');
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: '/cart/delete.js',
	// 		async: true,
	// 		success: function(result){
	// 			$.ajax({url: "", success: function(result){
	// 				$(".collection").html(result);
	// 			}});
	//
	//
	//
	// 			console.log(x);
	// 		}});
	// });

	var $btns = $('.btn-filter').click(function() {
		if (this.id == 'all') {
			$('.result-filter > a').fadeIn(450);
			$('.result-filter > div').fadeIn(450);
		} else {
			var $el = $('.' + this.id).fadeIn(450);
			$('.result-filter > a').not($el).fadeOut(450);
			$('.result-filter > div').not($el).fadeOut(450);
		}
		$btns.removeClass('active');
		$(this).addClass('active');
	});



	// filter functions
	var filterFns = {
		// show if number is greater than 50
		numberGreaterThan50: function() {
			var number = $(this).find('.number').text();
			return parseInt(number, 10) > 50;
		},
		// show if name ends with -ium
		ium: function() {
			var name = $(this).find('.name').text();
			return name.match(/ium$/);
		}
	};
	// bind filter button click

	// change is-checked class on buttons
	$('.button-group').each(function(i, buttonGroup) {
		var $buttonGroup = $(buttonGroup);
		$buttonGroup.on('click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
		});
	});
	var k = [] ;
	var x = $('.box-prod').each(function(){

		var y	= $(this).attr('data-pro');
		k.push(y);


	});
	console.log(k);
	if($('.box-prod').attr('data-pro') == k){
		$('.box-prod').attr('data-pro').hide();
	}
});


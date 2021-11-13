(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		//Testimonials Swiper

		var testimonialSwiper = new Swiper('.swiper-container', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			loop: true,
			autoHeight: true,
			autoplay: {
				delay: 8000,
			},
			speed: 1000
		});

		AOS.init({
			once: true,
		});

		// You can put your own code in here

	});

}(jQuery));

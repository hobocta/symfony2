(function($) {
	$(document).ready(function() {

		$('.works__link, .sibling__link, .contacts a, .footer-feed a, .work__screenshot-link').tooltipster({
			animation: 'grow',
			theme: 'tooltipster-my',
			touchDevices: false
		});

		if ($('body').hasClass('node-type-site')) {
			$(document).on('keydown', function(e) {
				var href = null,
					link = null;
				if (e.ctrlKey && !e.altKey && !e.shiftKey) {
					if (e.keyCode === 39) {
						link = $('.sibling--prev .sibling__link');
					} else if (e.keyCode === 37) {
						link = $('.sibling--next .sibling__link');
					}
					if (link !== null && link.length) {
						location.href = link.attr('href');
					}
				}
			});
		}

	});
})(jQuery);

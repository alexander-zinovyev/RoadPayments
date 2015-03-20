(function () {
	'use strict';

	$('fill-balance-btn').on('click', function () {

		$.ajax({

			type: 'GET',
			url: 'payment/ajax'
		})
			.done(function (html) {
				$('.payment-widget').append(html);
			});
	});

})();
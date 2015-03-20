(function () {
	'use strict';

	$('fill-balance-btn').on('click', function () {

		$.ajax({

			type: 'GET',
			url: '/payment/ajax',
			success: function (html) {
				$('.content')
					.empty()
					.append(html);
			}


		});

	});

})();
'use strict';

angular
	.module('roadApp')
	.controller(function ($location) {
		var vm = this;

		vm.makePayment = function () {
			$location.path = '/payment';
		};
});
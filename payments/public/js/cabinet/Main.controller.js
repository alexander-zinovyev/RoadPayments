'use strict';

angular
	.module('roadApp')
	.controller(Main);

Main.$inject = ['$location'];

function Main($location) {
	var vm = this;

	vm.makePayment = function () {
		$location.path = '/payment';
	};
}
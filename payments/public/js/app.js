'use strict';

angular
	.module('roadApp', ['ngRoute'])
	.config(function ($interpolateProvider, $locationProvider, $routeProvider) {

		$interpolateProvider.startSymbol('<%');
		$interpolateProvider.endSymbol('%>');

		$locationProvider.html5Mode(true);

		$routeProvider
			.when('/home', {
				templateUrl: '../../resources/views/cabinet/home.blade.php',
				controller: 'cabinet/Main.controller'			
			})
			/*.when('/settings', {
				templateUrl: '../../resources/views/cabinet/settings.blade.php',
				controller: 'cabinet/Settings'
			})*/
			.when('/history', {
				templateUrl: '../../resources/views/cabinet/history.blade.php',
				controller: 'cabinet/Main.controller'
			})
			.otherwise({ redirectTo: '/home' });
});
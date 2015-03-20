'use strict';

angular
	.module('roadApp', [])
	.config(configure);

configure.$inject = 
	['$interpolatenProvider', '$locationProvider', '$routeProvider'];

function configure($interpolateProvider, $locationProvider, $routeProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');

	$locationProvider.html5Mode(true);

	$routeProvider
		.when('/home', {
			templateUrl: '../../resources/views/cabinet/home.blade.php',
			controller: 'cabinet/Main'			
		})
		.when('/settings', {
			templateUrl: '../../resources/views/cabinet/settings.blade.php',
			controller: 'cabinet/Settings'
		})
		.when('/history', {
			templateUrl: '../../resources/views/cabinet/history.blade.php',
			controller: 'cabinet/Main'
		})
		.otherwise({ redirectTo: '/home' });
}
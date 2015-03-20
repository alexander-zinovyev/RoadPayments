'use strict';

angular
	.module('roadApp', [])
	.config(configure);

configure.$inject = ['$interpolationProvider'];

function configure($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
}
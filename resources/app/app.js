(function(appSettings) {

	angular.module('cohApp.Main', [
		'ngAnimate',
		'ngAria',
		'ngCookies',
		'ngMessages',
		'ngResource',
		'ngRoute',
		'ngSanitize',
		'ngTouch',
		'cohApp.Common',
		'cohApp.Judges',
		'cohApp.Login'
	])
	.config(function ($routeProvider) {
		$routeProvider
			.when('/', {
				templateUrl: appSettings.basePath + 'resources/tpl/home/main.html',
				controller: 'InfoCtrl'
			})
			.when('/candidatos/nuevo', {
				templateUrl: appSettings.basePath + 'resources/tpl/candidates/candidate-new.html',
				controller: 'CandidatesNewCtrl'
			})
			.when('/comite-evaluador', {
				templateUrl: appSettings.basePath + 'resources/tpl/judges/main.html',
				controller: 'JudgesListCtrl'
			})
			.when('/congreso', {
				templateUrl: appSettings.basePath + 'resources/tpl/candidates/main.html',
				controller: 'CandidatesMainCtrl'
			})
			.when('/evaluaciones', {
				templateUrl: appSettings.basePath + 'resources/tpl/assessments/main.html',
				controller: 'AssessmentsMainCtrl'
			})
			.when('/admin/home', {
				templateUrl: appSettings.basePath + 'resources/tpl/admin/main.html',
				controller: 'AdminMainCtrl'
			})
			.when('/login', {
				templateUrl: appSettings.basePath + 'resources/tpl/auth/login.html',
				controller: 'LoginCtrl'
			})
			.when('/login/new', {
				templateUrl: appSettings.basePath + 'resources/tpl/auth/login-new.html',
				controller: 'LoginNewCtrl'
			})
			.otherwise({
				redirectTo: '/'
			});
		});
})(window.appSettings);
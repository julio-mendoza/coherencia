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
				controller: 'InfoController'
			})
			.when('/candidatos/nuevo', {
				templateUrl: appSettings.basePath + 'resources/tpl/candidates/candidate-new.html',
				controller: 'CandidatesNewController'
			})
			.when('/comite-evaluador', {
				templateUrl: appSettings.basePath + 'resources/tpl/judges/main.html',
				controller: 'JudgesListController'
			})
			.when('/congreso', {
				templateUrl: appSettings.basePath + 'resources/tpl/candidates/main.html',
				controller: 'CandidatesMainController'
			})
			.when('/evaluaciones', {
				templateUrl: appSettings.basePath + 'resources/tpl/assessments/main.html',
				controller: 'AssessmentsMainController'
			})
			.when('/admin/home', {
				templateUrl: appSettings.basePath + 'resources/tpl/admin/main.html',
				controller: 'AdminMainController'
			})
			.when('/login', {
				templateUrl: appSettings.basePath + 'resources/tpl/auth/login.html',
				controller: 'LoginController'
			})
			.when('/login/new', {
				templateUrl: appSettings.basePath + 'resources/tpl/auth/login-new.html',
				controller: 'LoginNewController'
			})
			.otherwise({
				redirectTo: '/'
			});
		});
})(window.appSettings);
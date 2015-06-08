(function(appSettings) {

	angular.module('cohApp.Main')
		.controller('MainController', function($scope, configValuesService) {
			$scope.buildRoute = function(path) {
				return appSettings.basePath + path;
			};
		});

})(window.appSettings);
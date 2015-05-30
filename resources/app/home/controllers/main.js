(function(appSettings) {

	angular.module('cohApp.Main')
		.controller('MainController', function($scope, ConfigValues) {
			$scope.buildRoute = function(path) {
				return appSettings.basePath + path;
			};
		});

})(window.appSettings);
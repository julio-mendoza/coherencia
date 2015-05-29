(function(appSettings) {

	angular.module('cohApp.Main')
		.controller('MainCtrl', function($scope, ConfigValues) {
			$scope.buildRoute = function(path) {
				return appSettings.basePath + path;
			};
		});

})(window.appSettings);
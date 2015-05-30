(function(appSettings) {

	angular.module('cohApp.Main')
		.controller('InfoController', function($scope, ConfigValues) {
			ConfigValues.get({code: 'home_body'}, function(data) {
				$scope.bodyCfg = data.response;
			});
		});

})(window.appSettings);
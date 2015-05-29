(function(appSettings) {

	angular.module('cohApp.Main')
		.controller('InfoCtrl', function($scope, ConfigValues) {
			ConfigValues.get({code: 'home_body'}, function(data) {
				$scope.bodyCfg = data.response;
			});
		});

})(window.appSettings);
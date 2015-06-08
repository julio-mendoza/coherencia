(function(appSettings) {

	angular.module('cohApp.Main')
		.controller('InfoController', function($scope, configValuesService) {
			configValuesService.get({code: 'home_body'}, function(data) {
				$scope.bodyCfg = data.response;
			});
		});

})(window.appSettings);
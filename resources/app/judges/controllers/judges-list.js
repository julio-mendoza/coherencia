(function(appSettings) {

	angular.module('cohApp.Judges')
		.controller('JudgesListController', function($scope, Judges) {
			Judges.query(function(data) {
				$scope.judges = data.response;
			});
		});

})(window.appSettings);
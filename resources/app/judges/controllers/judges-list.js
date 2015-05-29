(function(appSettings) {

	angular.module('cohApp.Judges')
		.controller('JudgesListCtrl', function($scope, Judges) {
			Judges.query(function(data) {
				$scope.judges = data.response;
			});
		});

})(window.appSettings);
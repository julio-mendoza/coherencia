(function(appSettings) {

	angular.module('cohApp.Login')
		.controller('LoginNewController', function($scope, UserAccounts) {
			$scope.save = function() {
				if ($scope.newAccount.$valid) {
					$scope.userAccount.user.email_address = $scope.userAccount.person.primary_email_address;

					UserAccounts.save($scope.userAccount, function() {
						alert('Nice Demo');
					});
				}
			}
		});

})(window.appSettings);
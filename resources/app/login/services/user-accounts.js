(function(appSettings) {

	angular.module('cohApp.Judges')
		.factory('UserAccounts', function($resource) {
			return $resource(appSettings.restPath + '/useraccounts/:id', {}, {
				query: {
					method: 'GET',
					isArray: false
				}
			});
		});

})(window.appSettings);
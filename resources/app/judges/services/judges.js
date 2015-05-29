(function(appSettings) {

	angular.module('cohApp.Judges')
		.factory('Judges', function($resource) {
			return $resource(appSettings.restPath + '/judges/:id', {}, {
				query: {
					method: 'GET',
					isArray: false
				}
			});
		});

})(window.appSettings);
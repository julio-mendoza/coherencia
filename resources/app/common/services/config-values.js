(function(appSettings) {

	angular.module('cohApp.Common')
		.factory('ConfigValues', function($resource) {
			return $resource(appSettings.restPath + '/cfgvalues/:code', {code: '@id'}, {
				query: {
					method: 'GET',
					isArray: false
				}
			});
		});

})(window.appSettings);
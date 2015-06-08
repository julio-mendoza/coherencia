(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.common')
        .factory('configValuesService', configValuesServiceFactory);

    configValuesServiceFactory.$inject = ['$resource'];

    /* @ngInject */
    function configValuesServiceFactory($resource) {
        var service = $resource(appSettings.restPath + '/cfgvalues/:code', {code: '@id'}, {
        	query: {
        		method: 'GET',
        		isArray: false
        	}
        });

        return service;
    }
})(window.appSettings);

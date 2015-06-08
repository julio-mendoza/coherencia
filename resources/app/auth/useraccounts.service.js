(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.auth')
        .factory('userAccountsService', userAccountsServiceFactory);

    userAccountsServiceFactory.$inject = ['$resource'];

    /* @ngInject */
    function userAccountsServiceFactory($resource) {
        var service = $resource(appSettings.restPath + '/useraccounts/:id', {}, {
        	query: {
        		method: 'GET',
        		isArray: false
			}
		});

        return service;
    }
})(window.appSettings);
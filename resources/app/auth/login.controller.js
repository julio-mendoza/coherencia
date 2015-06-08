(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.auth')
        .controller('LoginController', LoginController);

    LoginController.$inject = [];

    /* @ngInject */
    function LoginController() {
        var viewModel = this;
        
        activate();

        ////////////////

        function activate() {
        }
    }
})(window.appSettings);
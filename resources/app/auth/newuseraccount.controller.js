(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.auth')
        .controller('NewUserAccountController', NewUserAccountController);

    NewUserAccountController.$inject = ['userAccountsService'];

    /* @ngInject */
    function NewUserAccountController(userAccountsService) {
        var viewModel = this;

		viewModel.user = {};
		viewModel.person = {};
		viewModel.save = save;

        ////////////////

        function save(userAccountForm) {
        	var person = viewModel.person,
				user = viewModel.user;

			if (userAccountForm.$valid) {
				user.email_address = person.primary_email_address;
				user.user_name = person.id_number;

				userAccountsService.save(viewModel, function() {
					viewModel.accountCreated = true;
				});
			}
        }
    }
})(window.appSettings);
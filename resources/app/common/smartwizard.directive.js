(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.common')
        .directive('cohSmartWizard', cohSmartWizardDirective);

    cohSmartWizardDirective.$inject = [];

    /* @ngInject */
    function cohSmartWizardDirective () {
        // Usage:
        //
        // Creates:
        //
        var directive = {
            link: link,
            restrict: 'A',
            replace: false
        };
        return directive;

        function link(scope, element, attrs) {
        	//TODO: pass parameters by directive
			element.smartWizard({
				transitionEffect: 'slideleft',
				enableFinishButton: false,
				labelNext: 'Siguiente',
				labelPrevious: 'Anterior',
				labelFinish: 'Estoy Listo'
			});
        }
    }
})(window.appSettings);

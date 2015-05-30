(function(appSettings) {

	angular.module('cohApp.Common')
		.directive('cohSmartWizard', function() {
			return {
				restrict: 'A',
				replace: false,
				link: function(scope, elem, attrs) {
					//TODO: pass parameters by directive
					elem.smartWizard({
						transitionEffect: 'slideleft',
						enableFinishButton: false,
						labelNext: 'Siguiente',
						labelPrevious: 'Anterior',
						labelFinish: 'Estoy Listo'
					});
				}
			};
		});

})(window.appSettings);
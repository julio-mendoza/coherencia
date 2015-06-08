(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.common')
        .directive('cohNumericOnly', cohNumericOnlyDirective);

    cohNumericOnlyDirective.$inject = ['$parse'];

    /* @ngInject */
    function cohNumericOnlyDirective ($parse) {
        // Usage:
        //
        // Creates:
        //
        var directive = {
            require: '?ngModel',
            link: link,
            restrict: 'A'
        };

        return directive;

        function link(scope, element, attrs, ctrl) {
            var numericOnlyGetter;

            if(!ctrl) {
                if(console && console.warn){
                    console.warn('Match validation requires ngModel to be on the element');
                }
                return;
            }

            numericOnlyGetter = $parse(attrs.cohNumericOnly);

            scope.$watch(ctrl.$viewValue, function() {
                ctrl.$$parseAndValidate();
            });

            ctrl.$validators.numeric = function() {
                var isValid = true;
                
                if(numericOnlyGetter(scope)) {
                    isValid = !isNaN(ctrl.$viewValue);
                }

                return isValid;
            };
        }
    }
})(window.appSettings);

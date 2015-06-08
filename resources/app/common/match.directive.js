(function(appSettings) {
    'use strict';

    angular
        .module('cohApp.common')
        .directive('cohMatch', cohValueCompareDirective);

    cohValueCompareDirective.$inject = ['$parse'];

    /* @ngInject */
    function cohValueCompareDirective($parse) {
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
            var matchGetter, caselessGetter;

        	if(!ctrl) {
                if(console && console.warn){
                    console.warn('Match validation requires ngModel to be on the element');
                }
                return;
            }

            matchGetter = $parse(attrs.cohMatch);
            caselessGetter = $parse(attrs.cohMatchCaseless);

            scope.$watch(getMatchValue, function() {
                ctrl.$$parseAndValidate();
            });

            ctrl.$validators.match = function() {
                var match = getMatchValue();
                
                if(caselessGetter(scope) && angular.isString(match) && angular.isString(ctrl.$viewValue)) {
                    return ctrl.$viewValue.toLowerCase() === match.toLowerCase();
                }

                return ctrl.$viewValue === match;
            };

            function getMatchValue() {
                var match = matchGetter(scope);

                if(angular.isObject(match) && match.hasOwnProperty('$viewValue')) {
                    match = match.$viewValue;
                }
                
                return match;
            }
        }
    }
})(window.appSettings);
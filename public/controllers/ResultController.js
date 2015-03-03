/**
 * Created by dennis on 2/26/15.
 */




var kipsoen = angular.module('ResultController', []);

kipsoen.controller('ResultListCtrl', ['$scope', 'ResultsFactory', 'ResultFactory', '$location',
    function ($scope, ResultsFactory, ResultFactory, $location) {

        // callback for ng-click 'editResult':
        $scope.editResult = function (resultId) {
            $location.path('/result-detail/' + resultId);
        };

        // callback for ng-click 'deleteResult':
        $scope.deleteResult = function (resultId) {
            ResultFactory.delete({ id: resultId });
            $scope.results = ResultsFactory.query();
        };

        // callback for ng-click 'createResult':
        $scope.createNewResult = function () {
            $location.path('/result-creation');
        };

        $scope.results = ResultsFactory.query();
    }]);

kipsoen.controller('ResultDetailCtrl', ['$scope', '$routeParams', 'ResultFactory', '$location',
    function ($scope, $routeParams, ResultFactory, $location) {

        // callback for ng-click 'updateResult':
        $scope.updateResult = function () {
            ResultFactory.update($scope.result);
            $location.path('/result-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/result-list');
        };

        $scope.result = ResultFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('ResultCreationCtrl', ['$scope', 'ResultsFactory', '$location',
    function ($scope, ResultsFactory, $location) {

        // callback for ng-click 'createNewResult':
        $scope.createNewResult = function () {
            ResultsFactory.create($scope.result);
            $location.path('/result-list');
        }
    }]);
/**
 * Created by dennis on 05/11/20.
 */


/**
 * Created by dennis on 2/26/15.
 */




var kipsoen = angular.module('StudentResultController', []);

kipsoen.controller('ResultListCtrl', ['$scope', 'ResultsFactory', 'ResultFactory', 'ExaminationsFactory', '$location',
    function ($scope, ResultsFactory, ResultFactory, ExaminationsFactory, $location) {

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

        $scope.examinations = ExaminationsFactory.query();


        $scope.filters = { };

    }]);

kipsoen.controller('ResultDetailCtrl', ['$scope', '$routeParams', 'ResultsFactory', 'ResultFactory', '$location',
    function ($scope, $routeParams, ResultsFactory, ResultFactory, $location) {

        // callback for ng-click 'updateResult':

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/results-list');
        };


       // $scope.students = StudentsFactory.query();

        $scope.result = ResultFactory.show({id: $routeParams.id});

       // $scope.examinations = ExaminationsFactory.query();
    }]);

kipsoen.controller('ResultCreationCtrl', ['$scope', 'ResultsFactory', '$location',
    function ($scope, ResultsFactory, $location) {

        // callback for ng-click 'createNewResult':
        $scope.createNewResult = function () {
            ResultsFactory.create($scope.result);
            $location.path('/result-list');
        }
    }]);
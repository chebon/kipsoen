/**
 * Created by dennis on 2/26/15.
 */




var kipsoen = angular.module('ResultController', []);

kipsoen.controller('ResultListCtrl', ['$scope', 'ResultsFactory', 'ResultFactory', 'StudentsFactory', 'ExaminationsFactory', '$location',
    function ($scope, ResultsFactory, ResultFactory, StudentsFactory, ExaminationsFactory,  $location) {

        // callback for ng-click 'editResult':
        $scope.editResult = function (resultId) {
            $location.path('/result-detail/' + resultId);
        };

        $scope.ViewResult = function (resultId) {
            $location.path('/result-det/' + resultId);
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





        $scope.filters = { };



        $scope.examinations = ExaminationsFactory.query()

        $scope.results = ResultsFactory.query();

        /*.success(function(data) {
            $scope.results = [];
            angular.forEach(data.results, function(value, key) {
                $scope.results.push(value);
            });
            $scope.isVisible = function(name){
                return true;// return false to hide this result's albums
            };
        });*/








    }]);

kipsoen.controller('ResultDetailCtrl', ['$scope', '$routeParams', 'ResultsFactory', 'ExaminationsFactory', 'StudentsFactory', 'ResultFactory', '$location',
    function ($scope, $routeParams, ResultsFactory, ExaminationsFactory, StudentsFactory, ResultFactory, $location) {

        // callback for ng-click 'updateResult':
        $scope.updateResult = function () {
            ResultFactory.update($scope.result);
            $location.path('/result-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/result-list');
        };


       $scope.students = StudentsFactory.query();

        $scope.result = ResultFactory.show({id: $routeParams.id});

        $scope.examinations = ExaminationsFactory.query();
    }]);



kipsoen.controller('ResultDetail', ['$scope', '$routeParams', 'ResultsFactory', 'ExaminationsFactory', 'StudentsFactory', 'ResultFactory', '$location',
    function ($scope, $routeParams, ResultsFactory, ExaminationsFactory, StudentsFactory, ResultFactory, $location) {

        // callback for ng-click 'updateResult':
        $scope.updateResult = function () {
            ResultFactory.update($scope.result);
            $location.path('/result-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/result-list');
        };


        $scope.students = StudentsFactory.query();

        $scope.result = ResultFactory.show({id: $routeParams.id});

        $scope.examinations = ExaminationsFactory.query();
    }]);

kipsoen.controller('ResultCreationCtrl', ['$scope', 'ResultsFactory', '$location',
    function ($scope, ResultsFactory, $location) {

        // callback for ng-click 'createNewResult':
        $scope.createNewResult = function () {
            ResultsFactory.create($scope.result);
            $location.path('/result-list');
        }
    }]);
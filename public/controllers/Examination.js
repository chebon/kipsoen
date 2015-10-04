/**
 * Created by dennis on 11/09/15.
 */



var kipsoen = angular.module('ExaminationController', []);

kipsoen.controller('ExaminationListCtrl', ['$scope', 'ExaminationsFactory', 'ExaminationFactory', '$location',
    function ($scope, ExaminationsFactory, ExaminationFactory, $location) {

        // callback for ng-click 'editExamination':
        $scope.editExamination = function (examinationId) {
            $location.path('/examination-detail/' + examinationId);
        };

        // callback for ng-click 'deleteExamination':
        $scope.deleteExamination = function (examinationId) {
            ExaminationFactory.delete({ id: examinationId });
            $scope.examinations = ExaminationsFactory.query();
        };

        // callback for ng-click 'createExamination':
        $scope.createNewExamination = function () {
            $location.path('/examination-creation');
        };

        $scope.examinations = ExaminationsFactory.query();
    }]);

kipsoen.controller('ExaminationDetailCtrl', ['$scope', '$routeParams', 'ExaminationFactory', '$location',
    function ($scope, $routeParams, ExaminationFactory, $location) {
        // callback for ng-click 'updateExamination':
        $scope.updateExamination = function () {
            ExaminationFactory.update($scope.examination);
            $location.path('/examination-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/examination-list');
        };

        $scope.examination = ExaminationFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('ExaminationCreationCtrl', ['$scope', 'ExaminationsFactory', 'StudentsFactory', '$location',
    function ($scope, ExaminationsFactory, StudentsFactory, $location) {


        $scope.cancel = function () {
            $location.path('/examination-list');
        };




        // callback for ng-click 'createNewExamination':
        $scope.createNewExamination = function () {
            ExaminationsFactory.create($scope.examination);
            $location.path('/examination-list');
        }
    }]);
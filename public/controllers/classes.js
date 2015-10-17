/**
 * Created by dennis on 17/10/15.
 */








var kipsoen = angular.module('ClassController', []);

kipsoen.controller('ClassListCtrl', ['$scope', 'ClassesFactory', 'ClassFactory', '$location',
    function ($scope, ClassesFactory, ClassFactory, $location) {

        // callback for ng-click 'editClass':
        $scope.editClass = function (classId) {
            $location.path('/class-detail/' + classId);
        };

        // callback for ng-click 'deleteClass':
        $scope.deleteClass = function (classId) {
            ClassFactory.delete({ id: classId });
            $scope.classes = ClassesFactory.query();
        };

        // callback for ng-click 'createClass':
        $scope.createNewClass = function () {
            $location.path('/class-creation');
        };

        $scope.classes = ClassesFactory.query();
    }]);

kipsoen.controller('ClassDetailCtrl', ['$scope', '$routeParams', 'ClassesFactory', 'ExaminationsFactory', 'StudentsFactory', 'ClassFactory', '$location',
    function ($scope, $routeParams, ClassesFactory, ExaminationsFactory, StudentsFactory, ClassFactory, $location) {

        // callback for ng-click 'updateClass':
        $scope.updateClass = function () {
            ClassFactory.update($scope.class);
            $location.path('/class-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/class-list');
        };


        $scope.students = StudentsFactory.query();

        $scope.class = ClassFactory.show({id: $routeParams.id});

        $scope.examinations = ExaminationsFactory.query();
    }]);

kipsoen.controller('ClassCreationCtrl', ['$scope', 'ClassesFactory', '$location',
    function ($scope, ClassesFactory, $location) {

        // callback for ng-click 'createNewClass':
        $scope.createNewClass = function () {
            ClassesFactory.create($scope.class);
            $location.path('/class-list');
        }
    }]);
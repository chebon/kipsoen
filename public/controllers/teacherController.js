/**
 * Created by dennis on 2/24/15.
 */


var kipsoen = angular.module('TeacherController', []);

kipsoen.controller('TeacherListCtrl', ['$scope', 'TeachersFactory', 'TeacherFactory', '$location',
    function ($scope, TeachersFactory, TeacherFactory, $location) {

        // callback for ng-click 'editTeacher':
        $scope.editTeacher = function (teacherId) {
            $location.path('/teacher-detail/' + teacherId);
        };

        // callback for ng-click 'deleteTeacher':
        $scope.deleteTeacher = function (teacherId) {
            TeacherFactory.delete({ id: teacherId });
            $scope.teachers = TeachersFactory.query();
        };

        // callback for ng-click 'createTeacher':
        $scope.createNewTeacher = function () {
            $location.path('/teacher-creation');
        };

        $scope.teachers = TeachersFactory.query();
    }]);

kipsoen.controller('TeacherDetailCtrl', ['$scope', '$routeParams', 'TeacherFactory', '$location',
    function ($scope, $routeParams, TeacherFactory, $location) {

       // callback for ng-click 'updateTeacher':
        $scope.updateTeacher = function () {
            TeacherFactory.update($scope.teacher);
            $location.path('/teacher-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/teacher-list');
        };

        $scope.teacher = TeacherFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('TeacherCreationCtrl', ['$scope', 'TeachersFactory', '$location',
    function ($scope, TeachersFactory, $location) {

        // callback for ng-click 'createNewTeacher':
        $scope.createNewTeacher = function () {
            TeachersFactory.create($scope.teacher);
            $location.path('/teacher-list');
        }

        $scope.cancel = function () {
            $location.path('/teacher-list');
        };
    }]);
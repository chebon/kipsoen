/**
 * Created by dennis on 2/24/15.
 */



var kipsoen = angular.module('StudentController', []);

kipsoen.controller('StudentListCtrl', ['$scope', 'StudentsFactory', 'StudentFactory', 'ExaminationFactory', '$location',
    function ($scope, StudentsFactory, StudentFactory, ExaminationFactory, $location) {

        // callback for ng-click 'editStudent':
        $scope.editStudent = function $email(studentId) {
            $location.path('/student-detail/' + studentId);
        };



        $scope.result = function $email(studentId) {
            $location.path('/result-detail/' + studentId);
        };

        // callback for ng-click 'deleteStudent':
        $scope.deleteStudent = function (studentId) {
            StudentFactory.delete({ id: studentId });
            $scope.students = StudentsFactory.query();
        };


       /* $scope.deleteExamination = function (studentId) {
            ExaminationFactory.delete({ id: studentId });
            $scope.students = StudentsFactory.query();
        };*/

        // callback for ng-click 'createStudent':
        $scope.createNewStudent = function () {
            $location.path('/student-creation');
        };

        $scope.students = StudentsFactory.query();
    }]);

kipsoen.controller('StudentDetailCtrl', ['$scope', '$routeParams', 'StudentFactory', '$location',
    function ($scope, $routeParams, StudentFactory, $location) {

        // callback for ng-click 'updateStudent':
        $scope.updateStudent = function () {
            StudentFactory.update($scope.student);
            $location.path('/student-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/student-list');
        };

        $scope.student = StudentFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('StudentCreationCtrl', ['$scope', 'StudentsFactory', '$location',
    function ($scope, StudentsFactory, $location) {

        // callback for ng-click 'createNewStudent':
        $scope.createNewStudent = function () {
            StudentsFactory.create($scope.student);
            $location.path('/student-list');
        }
    }]);
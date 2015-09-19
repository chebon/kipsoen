/**
 * Created by dennis on 2/20/15.
 */


var kipsoen = angular.module('kipsoen', ['ngRoute', 'StudentController', 'studentService', "TeacherController", "teacherService",
"parentService", "ParentController", 'resultService', 'ResultController', 'examinationService', 'ExaminationController']);


kipsoen.config(['$routeProvider', function ($routeProvider) {

    $routeProvider.when('/student-list', {templateUrl: 'partials/student-list.html', controller: 'StudentListCtrl'});
    $routeProvider.when('/student-detail/:id', {templateUrl: 'partials/student-detail.html', controller: 'StudentDetailCtrl'});
    $routeProvider.when('/student-creation', {templateUrl: 'partials/student-creation.html', controller: 'StudentCreationCtrl'});

    $routeProvider.when('/teacher-list', {templateUrl: 'partials/teacher-list.html', controller: 'TeacherListCtrl'});
    $routeProvider.when('/teacher-detail/:id', {templateUrl: 'partials/teacher-detail.html', controller: 'TeacherDetailCtrl'});
    $routeProvider.when('/teacher-creation', {templateUrl: 'partials/teacher-creation.html', controller: 'TeacherCreationCtrl'});


    $routeProvider.when('/parent-list', {templateUrl: 'partials/parent-list.html', controller: 'ParentListCtrl'});
    $routeProvider.when('/parent-detail/:id', {templateUrl: 'partials/parent-detail.html', controller: 'ParentDetailCtrl'});
    $routeProvider.when('/parent-creation', {templateUrl: 'partials/parent-creation.html', controller: 'ParentCreationCtrl'});


    $routeProvider.when('/examination-list', {templateUrl: 'partials/examination-list.html', controller: 'ExaminationListCtrl'});
     $routeProvider.when('/examination-detail/:id', {templateUrl: 'partials/examination-detail.html', controller: 'ExaminationDetailCtrl'});
     $routeProvider.when('/examination-creation', {templateUrl: 'partials/examination-creation.html', controller: 'ExaminationCreationCtrl'});

    $routeProvider.when('/result-list', {templateUrl: 'partials/result-list.html', controller: 'ResultListCtrl'});
    $routeProvider.when('/result-detail/:id', {templateUrl: 'partials/result-detail.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-creation', {templateUrl: 'partials/result-creation.html', controller: 'ResultCreationCtrl'});

    /* $routeProvider.when('/entry-list', {templateUrl: 'partials/entry-list.html', controller: 'EntryListCtrl'});
     $routeProvider.when('/entry-detail/:id', {templateUrl: 'partials/entry-detail.html', controller: 'EntryDetailCtrl'});
     $routeProvider.when('/entry-creation', {templateUrl: 'partials/entry-creation.html', controller: 'EntryCreationCtrl'});*/

    $routeProvider.otherwise({redirectTo: '/home'});
}]);

/**
 * Created by dennis on 05/11/20.
 */
/**
 * Created by dennis on 2/20/15.
 */


var kipsoen = angular.module('kipsoen', ['ngRoute', 'StudentController', 'studentService', "TeacherController", "teacherService",
    "parentService", "ParentController", 'resultService', "secretaryService", "SecretaryController", 'ResultController', 'examinationService', 'ExaminationController', "announcementService", "AnnouncementController", "ClassController", "classService"]);


kipsoen.config(['$routeProvider', function ($routeProvider) {

    $routeProvider.when('/student-list', {templateUrl: 'partials/secretary-student-list.html', controller: 'StudentListCtrl'});
    $routeProvider.when('/student-detail/:id', {templateUrl: 'partials/secretary-student-detail.html', controller: 'StudentDetailCtrl'});
    $routeProvider.when('/student-creation', {templateUrl: 'partials/student-creation.html', controller: 'StudentCreationCtrl'});

    $routeProvider.when('/teacher-list', {templateUrl: 'partials/secretary-teacher-list.html', controller: 'TeacherListCtrl'});
    $routeProvider.when('/teacher-detail/:id', {templateUrl: 'partials/secretary-teacher-detail.html', controller: 'TeacherDetailCtrl'});
    $routeProvider.when('/teacher-creation', {templateUrl: 'partials/teacher-creation.html', controller: 'TeacherCreationCtrl'});


    $routeProvider.when('/parent-list', {templateUrl: 'partials/secretary-parent-list.html', controller: 'ParentListCtrl'});
    $routeProvider.when('/parent-detail/:id', {templateUrl: 'partials/secretary-parent-detail.html', controller: 'ParentDetailCtrl'});
    $routeProvider.when('/parent-creation', {templateUrl: 'partials/parent-creation.html', controller: 'ParentCreationCtrl'});


    $routeProvider.when('/examination-list', {templateUrl: 'partials/secretary-examination-list.html', controller: 'ExaminationListCtrl'});
    $routeProvider.when('/examination-detail/:id', {templateUrl: 'partials/secretary-examination-detail.html', controller: 'ExaminationDetailCtrl'});
    $routeProvider.when('/examination-creation', {templateUrl: 'partials/secretary-examination-creation.html', controller: 'ExaminationCreationCtrl'});

    $routeProvider.when('/result-list', {templateUrl: 'partials/secretary-result-list.html', controller: 'ResultListCtrl'});
    $routeProvider.when('/result-detail/:id', {templateUrl: 'partials/secretary-result-detail.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-creation', {templateUrl: 'partials/secretary-result-creation.html', controller: 'ResultCreationCtrl'});

    $routeProvider.when('/announcement-list', {templateUrl: 'partials/announcement-list.html', controller: 'AnnouncementListCtrl'});
    $routeProvider.when('/announcement-detail/:id', {templateUrl: 'partials/announcement-detail.html', controller: 'AnnouncementDetailCtrl'});
    $routeProvider.when('/announcement-creation', {templateUrl: 'partials/announcement-creation.html', controller: 'AnnouncementCreationCtrl'});

    $routeProvider.when('/secretaries-list', {templateUrl: 'partials/secretary-list.html', controller: 'SecretaryListCtrl'});
    $routeProvider.when('/secretary-detail/:id', {templateUrl: 'partials/secretary-detail.html', controller: 'SecretaryDetailCtrl'});
    $routeProvider.when('/secretary-creation', {templateUrl: 'partials/secretary-creation.html', controller: 'SecretaryCreationCtrl'});

    $routeProvider.otherwise({redirectTo: '/home'});
}]);

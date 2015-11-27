/**
 * Created by dennis on 26/11/15.
 */



/**
 * Created by dennis on 05/11/20.
 */
/**
 * Created by dennis on 2/20/15.
 */


var kipsoen = angular.module('kipsoen', ['ngRoute', 'StudentController', 'studentService', "TeacherController", "teacherService",
    "parentService", "ParentController", 'resultService', 'ResultController', 'examinationService', 'ExaminationController', "announcementService", "AnnouncementController", "ClassController", "classService"]);


kipsoen.config(['$routeProvider', function ($routeProvider) {

    $routeProvider.when('/student-list', {templateUrl: 'partials/principle-student-list.html', controller: 'StudentListCtrl'});
    $routeProvider.when('/student-detail/:id', {templateUrl: 'partials/secretary-student-detail.html', controller: 'StudentDetailCtrl'});
    $routeProvider.when('/student-creation', {templateUrl: 'partials/student-creation.html', controller: 'StudentCreationCtrl'});

    $routeProvider.when('/teacher-list', {templateUrl: 'partials/principle-teacher-list.html', controller: 'TeacherListCtrl'});
    $routeProvider.when('/teacher-detail/:id', {templateUrl: 'partials/secretary-teacher-detail.html', controller: 'TeacherDetailCtrl'});
    $routeProvider.when('/teacher-creation', {templateUrl: 'partials/teacher-creation.html', controller: 'TeacherCreationCtrl'});


    $routeProvider.when('/examination-list', {templateUrl: 'partials/examination-list.html', controller: 'ExaminationListCtrl'});
    $routeProvider.when('/examination-detail/:id', {templateUrl: 'partials/examination-detail.html', controller: 'ExaminationDetailCtrl'});
    $routeProvider.when('/examination-creation', {templateUrl: 'partials/examination-creation.html', controller: 'ExaminationCreationCtrl'});

    $routeProvider.when('/result-list', {templateUrl: 'partials/result-list.html', controller: 'ResultListCtrl'});
    $routeProvider.when('/result-detail/:id', {templateUrl: 'partials/principle-result-detail.html', controller: 'ResultDetailCtrl'});







    $routeProvider.when('/announcement-list', {templateUrl: 'partials/announcement-list.html', controller: 'AnnouncementListCtrl'});
    $routeProvider.when('/announcement-detail/:id', {templateUrl: 'partials/announcement-detail.html', controller: 'AnnouncementDetailCtrl'});
    $routeProvider.when('/announcement-creation', {templateUrl: 'partials/announcement-creation.html', controller: 'AnnouncementCreationCtrl'});



    $routeProvider.otherwise({redirectTo: '/home'});
}]);

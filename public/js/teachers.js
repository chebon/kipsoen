/**
 * Created by dennis on 13/10/15.
 */
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
    $routeProvider.when('/result-detail-mathematics/:id', {templateUrl: 'partials/result-detail-mathematics.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-english/:id', {templateUrl: 'partials/result-detail-english.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-kiswahili/:id', {templateUrl: 'partials/result-detail-kiswahili.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-biology/:id', {templateUrl: 'partials/result-detail-biology.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-chemistry/:id', {templateUrl: 'partials/result-detail-chemistry.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-physics/:id', {templateUrl: 'partials/result-detail-physics.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-business-studies/:id', {templateUrl: 'partials/result-detail-business-studies.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-religious_education/:id', {templateUrl: 'partials/result-detail-religious_education.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-history/:id', {templateUrl: 'partials/result-detail-history.html', controller: 'ResultDetailCtrl'});
    $routeProvider.when('/result-detail-agriculture/:id', {templateUrl: 'partials/result-detail-agriculture.html', controller: 'ResultDetailCtrl'});


    $routeProvider.when('/announcement-list', {templateUrl: 'partials/announcement-list.html', controller: 'AnnouncementListCtrl'});
    $routeProvider.when('/announcement-detail/:id', {templateUrl: 'partials/announcement-detail.html', controller: 'AnnouncementDetailCtrl'});
    $routeProvider.when('/announcement-creation', {templateUrl: 'partials/announcement-creation.html', controller: 'AnnouncementCreationCtrl'});

    $routeProvider.otherwise({redirectTo: '/home'});
}]);

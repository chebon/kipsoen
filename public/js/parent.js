/**
 * Created by dennis on 24/09/15.
 */

/**
 * Created by dennis on 2/20/15.
 */


var kipsoen = angular.module('kipsoen', ['ngRoute', 'studentService',
      'resultService', 'ResultController', 'examinationService', 'ExaminationController']);


kipsoen.config(['$routeProvider', function ($routeProvider) {

    $routeProvider.when('/student-list', {templateUrl: 'partials/student-list.html', controller: 'StudentListCtrl'});
    $routeProvider.when('/student-detail/:id', {templateUrl: 'partials/student-detail.html', controller: 'StudentDetailCtrl'});








    $routeProvider.when('/examination-list', {templateUrl: 'partials/examination-list.html', controller: 'ExaminationListCtrl'});
    $routeProvider.when('/examination-detail/:id', {templateUrl: 'partials/examination-detail.html', controller: 'ExaminationDetailCtrl'});


    $routeProvider.when('/result-list', {templateUrl: 'partials/result-list.html', controller: 'ResultListCtrl'});
    $routeProvider.when('/result-detail/:id', {templateUrl: 'partials/result-detail.html', controller: 'ResultDetailCtrl'});


    /* $routeProvider.when('/entry-list', {templateUrl: 'partials/entry-list.html', controller: 'EntryListCtrl'});
     $routeProvider.when('/entry-detail/:id', {templateUrl: 'partials/entry-detail.html', controller: 'EntryDetailCtrl'});
     $routeProvider.when('/entry-creation', {templateUrl: 'partials/entry-creation.html', controller: 'EntryCreationCtrl'});*/

    $routeProvider.otherwise({redirectTo: '/home'});
}]);

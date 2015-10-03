/**
 * Created by dennis on 28/09/15.
 */
var app = angular.module("homepage", ["ngResource"]);




app.factory('AnnouncementsFactory', function ($resource) {
    return $resource('/announcements', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});






app.controller("AnnouncementController", function($scope ,AnnouncementsFactory){

    $scope.try2 =[1,5,6,7,3 ]

    $scope.try = AnnouncementsFactory.query();
});


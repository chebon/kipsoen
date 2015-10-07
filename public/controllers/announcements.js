/**
 * Created by dennis on 04/10/15.
 */



/**
 * Created by dennis on 11/09/15.
 */



var kipsoen = angular.module('AnnouncementController', []);

kipsoen.controller('AnnouncementListCtrl', ['$scope', 'AnnouncementsFactory', 'AnnouncementFactory', '$location',
    function ($scope, AnnouncementsFactory, AnnouncementFactory, $location) {

        // callback for ng-click 'editAnnouncement':
        $scope.editAnnouncement = function (announcementId) {
            $location.path('/announcement-detail/' + announcementId);
        };



        // callback for ng-click 'deleteAnnouncement':
        $scope.deleteAnnouncement = function (announcementId) {
            AnnouncementFactory.delete({ id: announcementId });
            $scope.announcements = AnnouncementsFactory.query();
        };

        // callback for ng-click 'createAnnouncement':
        $scope.createNewAnnouncement = function () {
            $location.path('/announcement-creation');
        };

        $scope.announcements = AnnouncementsFactory.query();
    }]);

kipsoen.controller('AnnouncementDetailCtrl', ['$scope', '$routeParams', 'AnnouncementFactory', '$location',
    function ($scope, $routeParams, AnnouncementFactory, $location) {
        // callback for ng-click 'updateAnnouncement':
        $scope.updateAnnouncement = function () {
            AnnouncementFactory.update($scope.announcement);
            $location.path('/announcement-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/announcement-list');
        };

        $scope.announcement = AnnouncementFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('AnnouncementCreationCtrl', ['$scope', 'AnnouncementsFactory', 'StudentsFactory', '$location',
    function ($scope, AnnouncementsFactory, StudentsFactory, $location) {


        $scope.cancel = function () {
            $location.path('/announcement-list');
        };




        // callback for ng-click 'createNewAnnouncement':
        $scope.createNewAnnouncement = function () {
            AnnouncementsFactory.create($scope.announcement);
            $location.path('/announcement-list');
        }
    }]);
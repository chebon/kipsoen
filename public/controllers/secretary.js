/**
 * Created by dennis on 05/11/20.
 */


/**
 * Created by dennis on 2/24/15.
 */


var kipsoen = angular.module('SecretaryController', []);

kipsoen.controller('SecretaryListCtrl', ['$scope', 'SecretariesFactory', 'SecretaryFactory', '$location',
    function ($scope, SecretariesFactory, SecretaryFactory, $location) {

        // callback for ng-click 'editSecretary':
        $scope.editSecretary = function (secretaryId) {
            $location.path('/secretary-detail/' + secretaryId);
        };

        // callback for ng-click 'deleteSecretary':
        $scope.deleteSecretary = function (secretaryId) {
            SecretaryFactory.delete({ id: secretaryId });
            $scope.secretaries = SecretariesFactory.query();
        };

        // callback for ng-click 'createSecretary':
        $scope.createNewSecretary = function () {
            $location.path('/secretary-creation');
        };

        $scope.secretaries = SecretariesFactory.query();
    }]);

kipsoen.controller('SecretaryDetailCtrl', ['$scope', '$routeParams', 'SecretaryFactory', '$location',
    function ($scope, $routeParams, SecretaryFactory, $location) {

        // callback for ng-click 'updateSecretary':
        $scope.updateSecretary = function () {
            SecretaryFactory.update($scope.secretary);
            $location.path('/secretaries-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/secretaries-list');
        };

        $scope.secretary = SecretaryFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('SecretaryCreationCtrl', ['$scope', 'SecretariesFactory', '$location',
    function ($scope, SecretariesFactory, $location) {

        // callback for ng-click 'createNewSecretary':
        $scope.createNewSecretary = function () {
            SecretariesFactory.create($scope.secretary);
            $location.path('/secretaries-list');
        }

        $scope.cancel = function () {
            $location.path('/secretaries-list');
        };
    }]);
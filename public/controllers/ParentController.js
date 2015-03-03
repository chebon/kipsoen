/**
 * Created by dennis on 2/24/15.
 */


var kipsoen = angular.module('ParentController', []);

kipsoen.controller('ParentListCtrl', ['$scope', 'ParentsFactory', 'ParentFactory', '$location',
    function ($scope, ParentsFactory, ParentFactory, $location) {

        // callback for ng-click 'editParent':
        $scope.editParent = function (parentId) {
            $location.path('/parent-detail/' + parentId);
        };

        // callback for ng-click 'deleteParent':
        $scope.deleteParent = function (parentId) {
            ParentFactory.delete({ id: parentId });
            $scope.parents = ParentsFactory.query();
        };

        // callback for ng-click 'createParent':
        $scope.createNewParent = function () {
            $location.path('/parent-creation');
        };

        $scope.parents = ParentsFactory.query();
    }]);

kipsoen.controller('ParentDetailCtrl', ['$scope', '$routeParams', 'ParentFactory', '$location',
    function ($scope, $routeParams, ParentFactory, $location) {
        // callback for ng-click 'updateParent':
        $scope.updateParent = function () {
            ParentFactory.update($scope.parent);
            $location.path('/parent-list');
        };

        // callback for ng-click 'cancel':
        $scope.cancel = function () {
            $location.path('/parent-list');
        };

        $scope.parent = ParentFactory.show({id: $routeParams.id});
    }]);

kipsoen.controller('ParentCreationCtrl', ['$scope', 'ParentsFactory', '$location',
    function ($scope, ParentsFactory, $location) {

        // callback for ng-click 'createNewParent':
        $scope.createNewParent = function () {
            ParentsFactory.create($scope.parent);
            $location.path('/parent-list');
        }
    }]);
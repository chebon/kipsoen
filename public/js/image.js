/**
 * Created by dennis on 28/09/15.
 */
var app = angular.module("homepage", ["ngCookies"]);


app.factory("image", function($http) {
    return {
        "getImages": function() {
            return $http.get("/images");
        }
    };
});


app.controller("images", function($scope, image){
    $scope.images =image.getImages();
});

/**
 * Created by dennis on 2/26/15.
 */



var kipsoen = angular.module('resultService', ['ngResource']);

kipsoen.factory('ResultsFactory', function ($resource) {
    return $resource('/results', {}, {
        query: { method: 'GET', isArray: true },
        create: { method: 'POST' }
    })
});

kipsoen.factory('ResultFactory', function ($resource) {
    return $resource('/results/:id', {}, {
        show: { method: 'GET' },
        update: { method: 'PUT', params: {id: '@id'} },
        delete: { method: 'DELETE', params: {id: '@id'} }
    })
});